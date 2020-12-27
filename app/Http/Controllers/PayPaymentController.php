<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\HoaDon;
use App\ChiTietHoaDon;

class PayPaymentController extends Controller
{
    private $_api_context;


    
public function __construct()
{

    /** PayPal api context **/
    $paypal_conf = \Config::get('paypal');
    $this->_api_context = new ApiContext(new OAuthTokenCredential(
        $paypal_conf['client_id'],
        $paypal_conf['secret'])
    );
    $this->_api_context->setConfig($paypal_conf['settings']);

}



public function payWithpaypal(Request $request)
{
    

    $payer = new Payer();
    $payer->setPaymentMethod('paypal');
    $cart = Cart::getcontent();
    $itemArr= array();
    $tongtien = 0;
    foreach($cart as $value){
        $price_item=ceil(($value->price)/23000);
        $item = new Item();
        $item->setName($value->name)
            ->setCurrency('USD')
            ->setQuantity($value->quantity)
            ->setPrice($price_item);
        array_push($itemArr,$item);
        $tongtien += ($price_item*$value->quantity);
    }
    // return $tongtien;
    $item_list = new ItemList();
    $item_list->setItems($itemArr);

    $amount = new Amount();
    $amount->setCurrency('USD')
        ->setTotal($tongtien);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Your transaction description');

    $redirect_urls = new RedirectUrls();
 

    $redirect_urls->setReturnUrl(sprintf('%s%s',URL::route('status'),'?success=true')) /** Specify return URL **/
        ->setCancelUrl(sprintf('%s%s',URL::route('status'),'?success=false'));

    $payment = new Payment();
    $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
    /** dd($payment->create($this->_api_context));exit; **/
    try {

        $payment->create($this->_api_context);

    } catch (\PayPal\Exception\PPConnectionException $ex) {

        if (\Config::get('app.debug')) {

            \Session::put('error', 'Connection timeout');
            return Redirect::route('cart');

        } else {

            \Session::put('error', 'Some error occur, sorry for inconvenient');
            return Redirect::route('cart');

        }

    }

    foreach ($payment->getLinks() as $link) {

        if ($link->getRel() == 'approval_url') {

            $redirect_url = $link->getHref();
            break;

        }

    }

    /** add payment ID to session **/
    // Session::put('paypal_payment_id', $payment->getId());

    if (isset($redirect_url)) {

        /** redirect to paypal **/
        return Redirect::away($redirect_url);

    }

    \Session::put('error', 'Unknown error occurred');
    return Redirect::route('cart');

}


public function getPaymentStatus(Request $request)
{
    $datarray=$request->all();


    if($datarray['success']== 'true'){
        if(empty($datarray['PayerID']) || empty($datarray['token'])){
           Session::put('error', 'URL trả về không thành công');
         return redirect()->route('cart');
        }

        $payment = Payment::get($datarray['paymentId'], $this->_api_context);
         $execution = new PaymentExecution();
         $execution->setPayerId($datarray['PayerID']);
         $result = $payment->execute($execution, $this->_api_context);
         if ($result->getState() == 'approved') {

         \Session::put('success', 'Payment success');

         $HoaDon = new HoaDon();
         $HoaDon->user_id = Auth::user()->user_id;
         $HoaDon->hd_ngaylap = date('y-m-d h:i:s');
         $HoaDon->hd_trangthaidh = 0;
         $HoaDon->hd_hinhthuctt = 1;
         $HoaDon->hd_trangthai = 1;
         $HoaDon->save();
         foreach(Cart::getContent() as $value){
             $ChiTietHoaDon = new ChiTietHoaDon();
             $ChiTietHoaDon->hd_id = $HoaDon->hd_id;
             $ChiTietHoaDon->giay_id = $value->id;
             $ChiTietHoaDon->soluong = $value->quantity;
             $ChiTietHoaDon->save();
         }

         Cart::clear();

            return redirect()->route('complete'); 
        }
    }

     \Session::put('error', 'thanh toán thất bại');
     return redirect()->route('cart');

}
}

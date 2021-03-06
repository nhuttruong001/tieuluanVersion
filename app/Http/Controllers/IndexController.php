<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\BinhLuan;
use App\ChiTietHoaDon;
use App\Giay;
use App\HoaDon;
use App\User;
use App\KhuyenMai;
use App\LoaiGiay;
use App\NhaCungCap;
Use Alert;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Support\Facades\Redirect;
use Validate;
use Carbon\Carbon;

use Cart;
use Cacbon;



class IndexController extends Controller
{
    public function __construct(){
 
        $BinhLuan = BinhLuan::all();
        $ChiTietHoaDon = ChiTietHoaDon::all();
        $Giay = Giay::all();
        $HoaDon = HoaDon::all();
        $User = User::all();
        $KhuyenMai = KhuyenMai::all();
        $LoaiGiay = LoaiGiay::all();
        $NhaCungCap = NhaCungCap::all();
 
       
        $now=  Carbon::now('Asia/Ho_Chi_Minh');

         ///////////// giay mới /////////////////
         $giaymoi = DB::table('Giay')
         ->join('loaigiay','loaigiay.loai_id','=','Giay.loai_id')
         ->join('khuyenmai','khuyenmai.km_id','=','Giay.km_id')
         ->join('nhacungcap','nhacungcap.ncc_id','=','Giay.ncc_id')
         ->orderBy('Giay.giay_id','desc')
         ->limit(8)->get();

         $binhluan = DB::table('BinhLuan')
         ->join('User','User.user_id','=','BinhLuan.user_id')
         ->join('Giay','Giay.giay_id','=','BinhLuan.giay_id')
         ->orderBy('BinhLuan.bl_id','desc')
         ->limit(5)->get();

         

         view()->share('binhluan',$binhluan);
      

         view() ->share('giaymoi',$giaymoi);
      
         view() ->share('now',$now);
     
         view()->share('BinhLuan',$BinhLuan);
         view()->share('ChiTietHoaDon',$ChiTietHoaDon);
         view()->share('Giay',$Giay);
         view()->share('HoaDon',$HoaDon);
         view()->share('User',$User);
         view()->share('KhuyenMai',$KhuyenMai);
         view()->share('LoaiGiay',$LoaiGiay);
         view()->share('NhaCungCap',$NhaCungCap);
   
         view()->share('User',$User);


    }
    public function getIndex(Request $request){
        
        $giay1 = Giay::orderBy('Giay.giay_id','desc')->where('giay_trangthai', 1)
            ->paginate(12);
        // $giay1 = DB::table('Giay')
        // ->join('loaigiay','loaigiay.loai_id','=','Giay.loai_id')
        // ->join('khuyenmai','khuyenmai.km_id','=','Giay.km_id')
        // ->join('nhacungcap','nhacungcap.ncc_id','=','Giay.ncc_id')
        // ->orderBy('Giay.giay_id','desc')
        // ->paginate(12);
        
        // if($request['page'] == 1){
        //     $giay1[0]->status = 1;
        //     $giay1[1]->status = 1;
        //     $giay1[2]->status = 1;
        //     $giay1[3]->status = 1;
        // }
    
        return view('frontend.index')->with('giay1',$giay1);
    }

    public function getCart(){
        $cart = Cart::getcontent();
        return view('frontend.cart',compact('cart'));
    }

    public function getAddCart($id){
     
        $product = Giay::find($id);
        
        $giasaukm = $product->giay_gia;
        if($product->KhuyenMai->km_id != 1){
            $giasaukm = $giasaukm - $giasaukm * ($product->KhuyenMai->km_phantram/100);
        }
        
        $product = Giay::find($id);
          Cart::add(array(          
         'id'           => $id,
         'name'         => $product->giay_ten, 
         'quantity'      => 1, 
         'price'        => $giasaukm, 
         'attributes'   => array('avatar' => $product-> giay_hinhanh)));
         $cart = Cart::getcontent();
        
        // Cart::remove($id);
        return redirect()->route('cart');
     // return view('frontend.cart')->with('cart',$cart);

    }

    // add the product to cart



    public function getDestroy($id){
        
        Cart::remove($id);
        $cart = Cart::getcontent();
       return view('frontend.cart')->with('cart',$cart);

    }

    public function getDelete(){
        if (Cart::isEmpty()) {
            return redirect('cart');
        }else{
            
            Cart::clear();
        }
        $cart = Cart::getcontent();
        return view('frontend.cart')->with('cart',$cart);
    }

    // public function getDeleteCart($id){
    //     if($id == 'all'){
    //         Clear::Cart();
    //     }else{
    //         Cart::remove($id);
    //     }
    //     $cart = Cart::getcontent();
    //     return view('frontend.cart')->with('cart',$cart);
    // }

   



    public function getUpdate(Request $request){
        
       // dd($request ->id);
        
        $id = $request->id ;
        $qty = $request->qty ;
        // Cart::update($id, array(
        //     'quantity' => $request->qty, 
        //   ));

          Cart::update($id , array(
            'quantity' => array(
                'relative' => false,
                'value' =>   $qty, 
            ),
          ));
         return response (['mess' => 'thanh cong']); 
       // $cart = Cart::getcontent();
      //  return redirect()->route('cart');
     //  return view('frontend.cart')->with('cart',$cart);
    // return back();
        
    }






    public function getDetails($id){
        $details =Giay::find($id);
        $comment =  BinhLuan::where('giay_id', $id)->get();
        

        return view('frontend.details')
                ->with('comment', $comment)
                ->with('details', $details);
    }

    // public function getSearch(){
        
    //     return view('frontend.search');
    // }

        // Tìm kiếm
    public function getSearch(Request $request){
            $tu_khoa = ($request->tu_khoa);
            if(!($tu_khoa == null)){
                $giay1 = DB::table('giay')
                ->whereRaw('giay_trangthai = 1 and lower(giay_ten) LIKE (?)',["%{$tu_khoa}%"])
                ->paginate(4);
                return view('frontend.index')->with('giay1',$giay1);
            }else{
                return redirect('home');

            }
    }

    public function getCategory($id){
        $LoaiGiay = LoaiGiay::all();
        $LoaiGiay1 = LoaiGiay::find($id);
        $giay = Giay::select()->where('loai_id',$id)->get();
        return view('frontend.category')->with('LoaiGiay',$LoaiGiay)->with('LoaiGiay1',$LoaiGiay1)->with('giay',$giay);
    }

    public function getComplete(){
        return view('frontend.complete');
    }

    public function getEmail(){
        return view('frontend.email');
    }

    public function getSignup(){
        return view('frontend.signup');
    }

    public function getLogin(){
        return view('frontend.login');
    }

    public function getBinhLuan(){      
        return view('details');
  
    }

    public function getQLCart(){
        $user = Auth::user()->user_id; 
        $HoaDon = HoaDon::select()->where('user_id',$user)->get();
        return view('frontend.quanlyCart')->with('chitietHD',$HoaDon);
    }

    public function getThanhtoan(Request $request){  
     if (Cart::isEmpty()) {
            return redirect('cart');
        }
     else{
        $HoaDon = new HoaDon();
        $HoaDon->user_id = Auth::user()->user_id;
        $HoaDon->hd_ngaylap = date('y-m-d h:i:s');
        $HoaDon->hd_trangthaidh = 0;
        $HoaDon->hd_hinhthuctt = 0;
        $HoaDon->hd_trangthai = 1;
        $HoaDon->save();

        foreach(Cart::getContent() as $value){
        
            $ChiTietHoaDon = new ChiTietHoaDon();
            $ChiTietHoaDon->hd_id = $HoaDon->hd_id;
            $ChiTietHoaDon->giay_id = $value->id;
            $ChiTietHoaDon->soluong = $value->quantity;
            $ChiTietHoaDon->save();
        }
    }
       Session::flash('alert-4', 'Thanh toán thành công!!!');
       Cart::clear();
       return redirect()->route('complete');
  
    }


 




  




}

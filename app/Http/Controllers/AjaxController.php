<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;


class AjaxController extends Controller
{
  public function getAjax(){
    $cartCollection = Cart::getContent();
    return $cart;
  }
}

<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Giay;
use App\User;
use App\HoaDon;
use Validator;


use Response;
use Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
class DonHangController extends Controller
{
    function __construct(){
		$Giay = Giay::all();
        $User = User::all();
  
        $giay_id = "";
        $user_id = "";

    	view()->share('Giay',$Giay);
        view()->share('User',$User);

        view()->share('giay_id',$giay_id);
        view()->share('user_id',$user_id);
  
	}
    public function getDanhSach(){
        $HoaDon = HoaDon::where('hd_trangthai','=',1)->paginate(8);
        return view('admin.DonHang.danhsach')->with('HoaDon',$HoaDon);
    }
}

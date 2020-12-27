<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Giay;
use App\User;
use App\HoaDon;
use App\ChiTietHoaDon;
use Validator;
use Cart;

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
        // $HoaDon = HoaDon::select()->paginate(8);
        $HoaDon = HoaDon::where('hd_trangthai','=',1)->paginate(8);
        return view('admin.DonHang.danhsach')->with('HoaDon',$HoaDon);
    }

    public function getChiTiet($id){
        $HoaDon =  HoaDon::find($id);
        $cart = Cart::getcontent();
        $tong = number_format(\Cart::getSubTotal(),0,',','.');
        $ChiTietHoaDon = ChiTietHoaDon::select()->where('hd_id',$id)->get();
        return view('admin.DonHang.chitiet')->with('HoaDon',$HoaDon)->with('ChiTietHoaDon',$ChiTietHoaDon)->with('cart',$cart)->with('tong',$tong);
    }

    public function xulytt($id){

        $HoaDon =  HoaDon::find($id);
        $HoaDon->hd_trangthaidh = 1;
        $HoaDon->save();
       // $user = HoaDon::where('hd_id',$id)->update('hd_trangthaidh', 1);
       Session::flash('alert-4', 'Cap nhat trang thai thanh cong');
       
       return redirect()->route('DonHang_DS');

    }

    public function getXoa($id){
        $HoaDon = HoaDon::find($id);
        $HoaDon->hd_trangthai = 0;
        $HoaDon->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('DonHang_DS');
    }

//     public function postTimkiem(Request $request){
//         $tukhoa = $request->tukhoa;
//         $HoaDon = DB::table('HoaDon')
//         ->join('User','HoaDon.user_id','=','User.user_id')
//         ->select('*')
//         ->where('User.user_hoten','like',"%$tukhoa%")
//         ->paginate(8);
//         return view('admin.DonHang.danhsach')->with('HoaDon',$HoaDon)->with('tukhoa',$tukhoa);

       

// }
}

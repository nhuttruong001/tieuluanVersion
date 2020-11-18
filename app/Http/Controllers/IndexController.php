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


use Illuminate\Support\Facades\Auth;
use DB;

use Session;
use Illuminate\Support\Facades\Redirect;
use Validate;
use Carbon\Carbon;

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
    public function getIndex(){
       
        $giay1 = DB::table('Giay')
            ->orderBy('Giay.giay_id','desc')
            ->paginate(8);
            
        return view('frontend.index')->with('giay1',$giay1);
    }

    public function getCart(){
        $details =Giay::find($id);
        return view('frontend.cart');
    }

    public function getDetails($id){
        $details =Giay::find($id);
        return view('frontend.details')->with('details',$details);
    }

    public function getSearch(){
        return view('frontend.search');
    }

    public function getCategory(){
        return view('frontend.category');
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


}

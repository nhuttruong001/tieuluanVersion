<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LoaiGiay;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;

class LoaiGiayController extends Controller
{
    public function getDanhSach(){
        $LoaiGiay = LoaiGiay::where('loai_trangthai','=',1)->paginate(10);
        return view('admin.LoaiGiay.danhsach')->with('LoaiGiay',$LoaiGiay);
    }

    public function getThem(){
        return view('admin.LoaiGiay.them');
    }

    public function postThem(Request $request){
    //    $this->validate($request, [
    //         'Loai_ten' => 'required',
    //         ]
    //         ,
    //         [
    //             'loai_ten.required' => 'Vui lòng không được để tên loại',
    //         ]);

            $LoaiGiay = new LoaiGiay();
            $LoaiGiay->loai_ten = $request->loai_ten;
            $LoaiGiay->loai_trangthai = 1;
            $LoaiGiay->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('LoaiGiay_DS');

    }

    public function getSua($id){
        $LoaiGiay =  LoaiGiay::find($id);
        return view('admin.LoaiGiay.sua')->with('LoaiGiay',$LoaiGiay);
    }

    public function postSua(Request $request, $id){
        $LoaiGiay = LoaiGiay::find($id);
        $LoaiGiay->loai_ten = $request->loai_ten;
        $LoaiGiay->loai_trangthai = 1;
        $LoaiGiay->save();
        Session::flash('alert-2', 'Cập Nhật thành công!!!');
        return redirect()->route('LoaiGiay_DS');

    }

    public function getXoa($id){
        $LoaiGiay = LoaiGiay::find($id);
        $LoaiGiay->loai_trangthai = 0;
        $LoaiGiay->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('LoaiGiay_DS');
    }


}

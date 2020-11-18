<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaCungCap;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;
class NhaCungCapController extends Controller
{
    public function getDanhSach(){
        $NhaCungCap = NhaCungCap::where('ncc_trangthai','=',1)->paginate(10);
        return view('admin.NhaCungCap.danhsach')->with('NhaCungCap',$NhaCungCap);
    }

    
    public function getThem(){
        return view('admin.NhaCungCap.them');
    }

    public function postThem(Request $request){
    //    $this->validate($request, [
    //         'Loai_ten' => 'required',
    //         ]
    //         ,
    //         [
    //             'loai_ten.required' => 'Vui lòng không được để tên loại',
    //         ]);

            $NhaCungCap = new NhaCungCap();
            $NhaCungCap->ncc_ten = $request->ncc_ten;
            $NhaCungCap->ncc_trangthai = 1;
            $NhaCungCap->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('NhaCungCap_DS');

    }

    public function getSua($id){
        $NhaCungCap =  NhaCungCap::find($id);
        return view('admin.NhaCungCap.sua')->with('NhaCungCap',$NhaCungCap);
    }

    public function postSua(Request $request, $id){
        $NhaCungCap = NhaCungCap::find($id);
        $NhaCungCap->ncc_ten = $request->ncc_ten;
        $NhaCungCap->ncc_trangthai = 1;
        $NhaCungCap->save();
        Session::flash('alert-2', 'Cập Nhật thành công!!!');
        return redirect()->route('NhaCungCap_DS');

    }

    public function getXoa($id){
        $NhaCungCap = NhaCungCap::find($id);
        $NhaCungCap->ncc_trangthai = 0;
        $NhaCungCap->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('NhaCungCap_DS');
    }

}

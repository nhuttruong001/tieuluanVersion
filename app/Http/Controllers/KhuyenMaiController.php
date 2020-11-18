<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhuyenMai;
use Validator;
use Session;
use DB;
use Image;
use Response;
use Redirect;
class KhuyenMaiController extends Controller
{
    public function getDanhSach(){
        $KhuyenMai = KhuyenMai::where('km_trangthai','=',1)->paginate(10);
        return view('admin.KhuyenMai.danhsach')->with('KhuyenMai',$KhuyenMai);
    }

    public function getThem(){
        return view('admin.KhuyenMai.them');
    }

    public function postThem(Request $request){
        $validation = $this->validate($request,
        [
            'km_ngaybd' => 'required|date|after:now',
            'km_ngaykt' => 'required|date|after:km_ngaybd',
            'km_phantram' => 'required'
           
        ],
        [
            'require' => 'Bạn chưa chọn ngày!',
            'km_ngaybd.after' => 'Ngày bắt đầu phải lớn hơn ngày hiện tại!',
            'km_ngaykt.after' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu!',
            'km_phantram.required' => 'Bạn chưa nhập phần trăm khuyến mãi'
            
        ]);

            $KhuyenMai = new KhuyenMai();
            $KhuyenMai->km_ngaybd = $request->km_ngaybd;
            $KhuyenMai->km_ngaykt = $request->km_ngaykt;
            $KhuyenMai->km_phantram = $request->km_phantram;
            $KhuyenMai->km_trangthai = 1;
            $KhuyenMai->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('KhuyenMai_DS');

    }

    public function getSua($id){
        $KhuyenMai =  KhuyenMai::find($id);
        return view('admin.KhuyenMai.sua')->with('KhuyenMai',$KhuyenMai);
    }

    public function postSua(Request $request, $id){
        $KhuyenMai = KhuyenMai::find($id);
        $KhuyenMai->km_ngaybd = $request->km_ngaybd;
        $KhuyenMai->km_ngaykt = $request->km_ngaykt;
        $KhuyenMai->km_phantram = $request->km_phantram;
        $KhuyenMai->km_trangthai = 1;
        $KhuyenMai->save();
        Session::flash('alert-2', 'Cập Nhật thành công!!!');
        return redirect()->route('KhuyenMai_DS');

    }

    public function getXoa($id){
        $KhuyenMai = KhuyenMai::find($id);
        $KhuyenMai->km_trangthai = 0;
        $KhuyenMai->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('KhuyenMai_DS');
    }
}

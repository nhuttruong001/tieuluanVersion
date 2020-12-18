<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giay;
use App\LoaiGiay;
use App\KhuyenMai;
use App\NhaCungCap;
use Validator;


use Response;
use Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class GiayController extends Controller
{

    function __construct(){
		$LoaiGiay = LoaiGiay::all();
        $KhuyenMai = KhuyenMai::all();
        $NhaCungCap = NhaCungCap::all();
        $loai_id = "";
        $km_id = "";
        $ncc_id = "";
    	view()->share('LoaiGiay',$LoaiGiay);
        view()->share('KhuyenMai',$KhuyenMai);
        view()->share('NhaCungCap',$NhaCungCap);
        view()->share('loai_id',$loai_id);
        view()->share('km_id',$km_id);
        view()->share('ncc_id',$ncc_id);
	}
    public function getDanhSach(){
        $Giay = Giay::where('giay_trangthai','=',1)->paginate(8);
        return view('admin.Giay.danhsach')->with('Giay',$Giay);
    }

    public function getThem(){
        return view('admin.Giay.them');
    }

    public function postThem(Request $request){

            $Giay = new Giay();
            $Giay->loai_id = $request->loai_id;
            $Giay->km_id = $request->km_id;
            $Giay->ncc_id = $request->ncc_id;
            $Giay->giay_ten = $request->giay_ten;
            $Giay->giay_gia = $request->giay_gia;
            $Giay->giay_soluong = $request->giay_soluong;
            if($request->hasFile('giay_hinhanh')){
                $dataTime = date('Ymd_His');
                $file = $request->file('giay_hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                    Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                    // $request->session()->flash('status', 'Task was successful!');
                    return redirect()->route('Giay_Them');
                }
                $fileName = $dataTime . '-' . $file->getClientOriginalName();
                //resize ảnh
                $destinationPath = public_path('upload/giay');
                $resize_image = Image::make($file->getRealPath());
                $resize_image->resize(300, 300, function($constraint)
                {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $fileName);
                //
                $Giay->giay_hinhanh = $fileName;
            }else{
                $Giay->giay_hinhanh="";
            }
            $Giay->giay_mota = $request->giay_mota;
            $Giay->giay_trangthai = 1;
           
            $Giay->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('Giay_DS');

    }

   //
   public function getSua($id){
    $Giay =  Giay::find($id);
    return view('admin.Giay.sua')->with('Giay',$Giay);
}

public function postSua(Request $request, $id){

    $Giay = Giay::find($id);
    $Giay->loai_id = $request->loai_id;
    $Giay->km_id = $request->km_id;
    $Giay->ncc_id = $request->ncc_id;
    $Giay->giay_ten = $request->giay_ten;
    $Giay->giay_gia = $request->giay_gia;
    $Giay->giay_soluong = $request->giay_soluong;
    if($request->hasFile('giay_hinhanh')){
        $dataTime = date('Ymd_His');
        $file = $request->file('giay_hinhanh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
            Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
            return redirect()->route('Giay_Them');
        }
        $fileName = $dataTime . '-' . $file->getClientOriginalName();
        //resize ảnh
        $destinationPath = public_path('upload/giay');
        $resize_image = Image::make($file->getRealPath());
        $resize_image->resize(300, 300, function($constraint)
        {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $fileName);
        //
        $Giay->giay_hinhanh = $fileName;
    }else{
        $Giay->giay_hinhanh=$Giay->giay_hinhanh;
    }
    $Giay->giay_mota = $request->giay_mota;
    $Giay->giay_trangthai = 1;
   
    $Giay->save();
    Session::flash('alert-2', 'Cập Nhật thành công!!!');
    return redirect()->route('Giay_DS');
} 

    public function getXoa($id){
    $Giay = Giay::find($id);
    $Giay->giay_trangthai = 0;
    $Giay->save();
    Session::flash('alert-3', 'Xóa thành công!!!');
    return redirect()->route('Giay_DS');
}

public function postTimkiem(Request $request){
    $tukhoa = $request->tukhoa;
    $ncc_id = $request->ncc_id;
    $loai_id = $request->loai_id;

     // nhập đầy đủ
     if((!empty($tukhoa)) && (!empty($ncc_id)) && (!empty($loai_id))){
        $Giay = Giay::where([['ncc_id','=',$ncc_id],['loai_id','=',$loai_id],['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }

    // không nhập từ khóa
    else if ((!empty($ncc_id)) && (!empty($loai_id))){
        $Giay = Giay::where([['ncc_id',$ncc_id],['loai_id','=',$loai_id],['giay_trangthai',1],])->paginate(10);
    } 
    // không chọn nhà cung cấp
    else if ((!empty($tukhoa)) && (!empty($loai_id))){
        $Giay = Giay::where([['loai_id','=',$loai_id],['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }

      // không chọn loại giày
      else if ((!empty($tukhoa))  && (!empty($ncc_id))){
        $Giay = Giay::where([['ncc_id','=',$ncc_id],['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }

     // Chọn loại và ncc
     else if ((!empty($loai_id)) && (!empty($ncc_id))){
        $Giay = Giay::where([['loai_id','=',$loai_id],['ncc_id','=',$ncc_id],['giay_trangthai',1],])->paginate(10);
    }

     // Chọn nhà cc và nhân tên giay
     else if ((!empty($tukhoa)) && (!empty($ncc_id))){
        $Giay = Giay::where([['ncc_id','=',$ncc_id],['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }
    // Chọn loại và nhập tên giày
    else if ((!empty($tukhoa)) && (!empty($loai_id))){
        $Giay = Giay::where([['loai_id','=',$loai_id],['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }

      // Chọn nhà cung cấp
      else if ((!empty($ncc_id))){
        $Giay = Giay::where([['ncc_id','=',$ncc_id],['giay_trangthai',1],])->paginate(10);
    }
    // Chọn loại
    else if ((!empty($loai_id))){
        $Giay = Giay::where([['loai_id','=',$loai_id],['giay_trangthai',1],])->paginate(10);
    }
     // nhập tên giày
    else {
        $Giay = Giay::where([['giay_ten','like',"%$tukhoa%"],['giay_trangthai',1],])->paginate(10);
    }

    return view('admin.Giay.danhsach')->with('Giay',$Giay)->with('ncc_id',$ncc_id)->with('loai_id',$loai_id)->with('tukhoa',$tukhoa);

 
    
}
}

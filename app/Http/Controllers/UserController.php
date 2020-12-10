<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Image;
use Response;
use Redirect;

class UserController extends Controller
{
    function __construct(){
        $User = User::all();
        $user_id = "";
        view()->share('user_id',$user_id);
	}
    public function getDanhSach(){
        $User = User::where('user_trangthai','=',1)->paginate(8);
        return view('admin.User.danhsach')->with('User',$User);
    }

    public function getThem(){
        return view('admin.User.them');
    }

    public function postThem(Request $request){
       $this->validate($request, [
            'user_username' => 'required',
            'user_password' => 'required',
            'user_hoten' => 'required',
            'user_gioitinh' => 'required',
            'user_ngaysinh' => 'required',
            'user_diachi' => 'required',
            'user_sdt' => 'required',
            'user_quyen' => 'required',
            ]
            ,
            [
                'user_username.required' => 'Vui lòng không được để trống username',
                'user_password.required' => 'Vui lòng không được để trống password',
                'user_hoten.required' => 'Vui lòng không được để trống họ tên',
                'user_gioitinh.required' => 'Vui lòng không được để trống giới tính',
                'user_ngaysinh.required' => 'Vui lòng không được để trống ngày sinh',
                'user_diachi.required' => 'Vui lòng không được để trống địa chỉ',
                'user_sdt.required' => 'Vui lòng không được để trống sđt',
                'user_quyen.required' => 'Vui lòng chọn quyền',
            ]);

            $User = new User();
            $User->user_username = $request->user_username;
            $User->password = bcrypt($request->user_password);
            $User->user_hoten = $request->user_hoten;
            $User->user_gioitinh = $request->user_gioitinh;
            $User->user_ngaysinh = $request->user_ngaysinh;
            $User->user_diachi = $request->user_diachi;
            $User->user_sdt = $request->user_sdt;
            $User->user_quyen = $request->user_quyen;
            $User->user_trangthai = 1;
            $User->save();
            Session::flash('alert-1', 'Thêm thành công!!!');
            return redirect()->route('User_DS');

    }

    public function getSua($id){
        $User =  User::find($id);
        return view('admin.User.sua')->with('User',$User);
    }

    public function postSua(Request $request, $id){
        $User = User::find($id);
        $User->user_username = $request->user_username;
        // $User->user_password = $request->user_password;
        $User->user_hoten = $request->user_hoten;
        $User->user_gioitinh = $request->user_gioitinh;
        $User->user_ngaysinh = $request->user_ngaysinh;
        $User->user_diachi = $request->user_diachi;
        $User->user_sdt = $request->user_sdt;
        $User->user_trangthai = 1;
        $User->save();

        Session::flash('alert-2', 'Cập Nhật thành công!!!');
        return redirect()->route('User_DS');

    }

    public function getXoa($id){
        $User = User::find($id);
        $User->user_trangthai = 0;
        $User->save();
        Session::flash('alert-3', 'Xóa thành công!!!');
        return redirect()->route('User_DS');
    }

    public function postTimkiem(Request $request){
       
            $tukhoa = $request->tukhoa;
            $User = DB::table('User')->where('User.user_hoten','like',"%$tukhoa%")->get();
            return view('admin.User.danhsach')->with('User',$User)->with('tukhoa',$tukhoa);
        
    

}


}

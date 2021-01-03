<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Image;
use Response;
use Redirect;
use Illuminate\Support\Collection;
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
            'user_email' => 'required|unique:User', 
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
                'user_email.required' => "Vui lòng nhập email",
                 'user_email.unique' => "Email đã tồn tại",
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
            $User->user_email = $request->user_email;
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
        $User->user_email = $request->user_email;
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
            $User = DB::table('User')
            ->select()
            ->where('User.user_hoten','like',"%$tukhoa%")
            ->paginate(8);

            // dd($tukhoa);

            // dd($User);
            return view('admin.User.danhsach')->with('User',$User)->with('tukhoa',$tukhoa);

}

// public function postTimkiem(Request $request){
//     $tukhoa = $request->tukhoa;
//     $user_gioitinh = $request->user_gioitinh;

//       // nhập đầy đủ
//       if((!empty($tukhoa)) && (!empty($user_gioitinh))){
//         $User = User::where([['user_gioitinh','=',$user_gioitinh],['user_hoten','like',"%$tukhoa%"],['user_trangthai',1],])->paginate(10);
//     }

//        // Chọn gioitinh
//        else if ((!empty($user_gioitinh))){
//         $User = User::where([['user_gioitinh','=',$user_gioitinh],['user_trangthai',1],])->paginate(10);
//     }

//     // nhập tên user
//     else {
//         $User = User::where([['user_hoten','like',"%$tukhoa%"],['user_trangthai',1],])->paginate(10);
//     }

//     return view('admin.User.danhsach')->with('User',$User)->with('tukhoa',$tukhoa)->with('user_gioitinh',$user_gioitinh);
// }

}

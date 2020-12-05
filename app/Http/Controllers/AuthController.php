<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Validator;
use DB;
use Image;
use Redirect;
use Session;
use App\User;


class AuthController extends Controller
{
    public function user_username(){
        return 'user_username';
    }

    public function getLogin(){
       return view('frontend.login'); //return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'user_username' => $request->user_username,
            'password' => $request->password
        ];

        if (Auth::attempt($arr)) {
            return redirect()->route("User_DS"); 
        } else {
            return redirect()->back()
            ->withInput()->with("error", "Sai tài khoản hoặc mật khẩu");
        }
    }

    public function getSignup(){
        return view('frontend.signup'); //return ra trang login để đăng nhập
     }

     public function postSignup(Request $request){
        $this->validate($request, [
             'user_username' => 'required',
             'password' => 'required',
             'user_hoten' => 'required',
             'user_gioitinh' => 'required',
             'user_ngaysinh' => 'required',
             'user_diachi' => 'required',
             'user_sdt' => 'required',
            
             ]
             ,
             [
                 'user_username.required' => 'Vui lòng không được để trống username',
                 'password.required' => 'Vui lòng không được để trống password',
                 'user_hoten.required' => 'Vui lòng không được để trống họ tên',
                 'user_gioitinh.required' => 'Vui lòng không được để trống giới tính',
                 'user_ngaysinh.required' => 'Vui lòng không được để trống ngày sinh',
                 'user_diachi.required' => 'Vui lòng không được để trống địa chỉ',
                 'user_sdt.required' => 'Vui lòng không được để trống sđt',
                
             ]);
 
             $User = new User();
             $User->user_username = $request->user_username;
             $User->password = bcrypt($request->password);
             $User->user_hoten = $request->user_hoten;
             $User->user_gioitinh = $request->user_gioitinh;
             $User->user_ngaysinh = $request->user_ngaysinh;
             $User->user_diachi = $request->user_diachi;
             $User->user_sdt = $request->user_sdt;
             $User->user_quyen = 1;
             $User->user_trangthai = 1;
             $User->save();
             Session::flash('alert-success', 'Bạn đã đăng ký thành công!!!');
             return view('frontend.login');
            
 
     }

     public function logOut(){
        Auth::logout();
        return redirect()->route("trangchu");
    }

 

    public function getChangePass($id){
        $change = User::find($id);
        return view('frontend.formChange')->with('change',$change);
    } 

    public function postChangePass(Request $request, $id){
        $user = User::find($id);


                $arrr = [
                        'user_username'  => $user->user_username,
                        'password'      => $request->old_password
                ];

           if (Auth::attempt($arrr)) {
                    $this->validate($request, [
                        'new_password'=>'min:4|max:50',
                        'confirm_password'=>'same:new_password',
                        ],[
                            'new_password.min'=>'Mật khẩu phải ít nhất 8 kí tự',
                            'new_password.max' => 'Mật khẩu không được quá 50 kí tự',
                            'confirm_password.same' => 'Mật khẩu không trùng khớp',
                        ]);


                    $user->password =bcrypt($request->new_password);

                    $user->save();

                    Session::flash('alert-success', 'Đổi mật khẩu thành công!!');
                    return redirect::back();
           }else{
                    Session::flash('alert-warning', 'Đổi Mật Khẩu Thất Bại!!');
                    return redirect::back();
           }




    }

}

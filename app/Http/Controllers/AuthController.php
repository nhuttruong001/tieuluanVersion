<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

}

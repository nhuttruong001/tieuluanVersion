<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Redirect;
use Session;
use App\KhachHang;


class AuthController extends Controller
{
    public function kh_username(){
        return 'kh_username';
    }

    public function ad_username(){
        return 'ad_username';
    }

    public function getLogin(){
        return view('frontend.login1');
    }

    public function postLogin(Request $request)
    {
        
        $username = $request['username'];
        $password = $request['password'];

        // var_dump($username);

        if (Auth::attempt(['kh_username' => $username,'kh_password' =>$password])) {
            return redirect()->route("trangchu"); 
        } else {
            return redirect()->back()
            ->withInput()->with("error", "Sai tài khoản hoặc mật khẩu");
        }
    }
}

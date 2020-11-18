<?php

namespace App\Http\Middleware;
// use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Closure;

class KhachHangLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    //     $username = $request->kh_username;
    //     $password = $request->kh_password;

    //     $users = DB::table('khachhang')->where('kh_username', $username)->where('kh_password', $password)->get();



    //    if($users.length > 0){
    //         $kh = Auth::user();
    //         if($request->has('kh_username') && $request->has('kh_password')){
    //             return $next($request); 
    //         }else{
               return redirect()->route('trangchu');
        //     }
        // }else{
        //     return redirect()->route('formlogin1');
        // }
        

    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{


    protected $table = "User";
    protected $primaryKey = 'user_id';
    protected $guarded      = ['user_id'];
    protected $fillable = [
        'user_username',
        'user_password',
        'user_hoten',
        'user_ngaysinh',
        'user_gioitinh',
        'user_diachi',
        'user_sdt',
        'user_trangthai'
    ];

    public function HoaDon(){
        $this->hasMany('App\HoaDon','hd_id','hd_id');
    }

    public function BinhLuan(){
        $this->hasMany('App\BinhLuan','hd_id','hd_id');
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
    




    // use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}

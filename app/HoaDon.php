<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = "HoaDon";
    protected $primaryKey = 'hd_id';
    protected $guarded      = ['hd_id'];
    protected $fillable = [
        'kh_id',
        'user_id',
        'hd_ngaylap',
        'hd_trangthai'
    ];

    public function Giay(){
        $this->hasMany('App\Giay','giay_id','giay_id');
    }

    public function User(){
        $this->belongsto('App\User','user_id','user_id');
    }
}

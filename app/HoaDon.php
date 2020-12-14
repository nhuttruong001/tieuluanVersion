<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "HoaDon";
    protected $primaryKey = 'hd_id';
    protected $guarded      = ['hd_id'];
    protected $fillable = [
        'hd_id',
        'user_id',
        'hd_ngaylap',
        'hd_trangthaidh',
        'hd_trangthai'
    ];

    public function Giay(){
        return  $this->hasMany('App\Giay','giay_id','giay_id');
    }
    public function ChiTietHoaDon(){
        return  $this->hasMany('App\ChiTietHoaDon','hd_id','hd_id');
    }

    public function User(){
        return $this->belongsto('App\User','user_id','user_id');
    }
}

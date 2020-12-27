<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "ChiTietHoaDon";
 
    protected $fillable = [
        'giay_id',
        'hd_id',
        'soluong',
    
    ];

    public function Giay(){
        return  $this->hasMany('App\Giay','giay_id','giay_id');
    }
    public function HoaDon(){
        return $this->belongsto('App\HoaDon','hd_id','hd_id');
    }
}

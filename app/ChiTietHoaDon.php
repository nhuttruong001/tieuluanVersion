<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $table = "ChiTietHoaDon";
 
    protected $fillable = [
        'giay_id',
        'hd_id',
        'soluong'
    ];

    public function Giay(){
        $this->belongsto('App\Giay');
    }
    public function HoaDon(){
        $this->belongsto('App\HoaDon');
    }
}

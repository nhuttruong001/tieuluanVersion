<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table = "KhuyenMai";
    protected $primaryKey = 'km_id';
    protected $guarded      = ['km_id'];
    protected $fillable = [
        'km_ngaybd',
        'km_ngaykt',
        'km_phantram',
        'km_trangthai'
    ];

    public function KhuyenMai(){
        $this->belongsto('App\KhuyenMai','giay_id','giay_id');
    }
}

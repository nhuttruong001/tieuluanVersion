<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giay extends Model
{
    protected $table = "Giay";
    protected $primaryKey = 'giay_id';
    protected $guarded      = ['giay_id'];
    protected $fillable = [
        'loai_id',
        'km_id',
        'ncc_id',
        'giay_ten',
        'giay_gia',
        'giay_hinhanh',
        'giay_mota',
        'giay_trangthai'
    ];

    public function LoaiGiay(){
        return $this->belongsto('App\LoaiGiay','loai_id','loai_id');
    }

    public function NhaCungCap(){
        return $this->belongsto('App\NhaCungCap','ncc_id','ncc_id');
    }

    public function  binhluan(){
        return $this->hasMany('App\binhluan','bl_id','bl_id');
    }
}

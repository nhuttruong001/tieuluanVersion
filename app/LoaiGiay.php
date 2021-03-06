<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiGiay extends Model
{
    protected $table = "LoaiGiay";
    protected $primaryKey = 'loai_id';
    protected $guarded      = ['loai_id'];
    protected $fillable = [
        'loai_ten',
        'loai_trangthai'
    ];

    public function Giay(){
        return  $this->hasMany('App\Giay','giay_id','giay_id');
    }
}

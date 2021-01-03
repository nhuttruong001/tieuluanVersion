<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = "BinhLuan";
    protected $primaryKey = 'bl_id';
    protected $guarded      = ['bl_id'];
    protected $fillable = [
        'user_id',
        'giay_id',
        'bl_noidung',
        'bl_trangthai'
    ];
    public $timestamps = false;
    protected $dates = ['created_at'];

    public function Giay(){
        return $this->belongsto('App\Giay','giay_id','giay_id');
    }

    public function User(){
        return $this->belongsto('App\User','user_id','user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    protected $table = "NhaCungCap";
    protected $primaryKey = 'ncc_id';
    protected $guarded      = ['ncc_id'];
    protected $fillable = [
        'ncc_ten',
        'ncc_trangthai'
    ];

    public function Giay(){
        $this->hasMany('App\Giay','giay_id','giay_id');
    }
}

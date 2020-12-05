<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BinhLuan;
use DB;

class BinhLuanController extends Controller
{

    public function postBinhLuan(Request $request)
    {
        $BinhLuan = new BinhLuan();
        $BinhLuan->giay_id = $request->giay_id;
        $BinhLuan->user_id = $request->user_id;
        $BinhLuan->bl_noidung = $request->bl_noidung;
        $BinhLuan->bl_trangthai = 1;
        $BinhLuan->save();
        return redirect()->route('details', ['id' => $request->giay_id]);
    }


   

    public function destroy($id){
        $BinhLuan = BinhLuan::find($id);
        $BinhLuan->bl_trangthai = 0;
        $BinhLuan->save();
        Session::flash('alert-3', 'Xóa bình luận thành công!!!');
        return redirect()->back();
}
}
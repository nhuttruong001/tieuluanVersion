<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BinhLuan;
use DB;

class BinhLuanController extends Controller
{

        public function getBinhLuan(Request $request,$id){
        $giay = Giay::find($id);
        $listBinhLuan = BinhLuan::where(['giay_id',$id])->get();
        return view('details')->with('listBinhLuan',$listBinhLuan);
    }
   

    public function postBinhLuan(Request $request)
    {   
        if(!$request->user_id){
            return response()->json([
                'type' => 500,
                'message' => "Ban phai dang nhap moi duoc them binh luan!!!"
            ]); 
        }
        $BinhLuan = new BinhLuan();
        $BinhLuan->giay_id = $request->giay_id;
        $BinhLuan->user_id = $request->user_id;
        $BinhLuan->bl_noidung = $request->bl_noidung;
        $BinhLuan->bl_trangthai = 1;

        $BinhLuan->save();

        $bl = '<li class="com-title">';
        $bl .=	'<i style="font-size:24px" class="fas">&#xf508;</i>&nbsp;'. DB::table('user')->where('user_id', $request->user_id)->first()->user_hoten.'<br>';
			
		$bl .=	'<span>2021-01-03 19:66:40</span></li>';	
		
		$bl .= '<li class="com-details">'.$request->bl_noidung.'</li>';
	
        return response()->json([
            'type' => 200,
            'message' => "Ban da them binh luan thanh cong!!!",
            'data' => $bl
        ]);    
    }

//     public function destroy($id){
//         $BinhLuan = BinhLuan::find($id);
//         $BinhLuan->bl_trangthai = 0;
//         $BinhLuan->save();
//         Session::flash('alert-3', 'Xóa bình luận thành công!!!');
//         return redirect()->back();
// }
}
<?php

use Illuminate\Database\Seeder;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'bl_id' => 1,
                'user_id' => 1,
                'giay_id' => 1,
                'bl_noidung' => 'giay dep qua',
                'bl_trangthai' => 1,
                "bl_created_at" =>  "2020-12-30 10:02:30"
            ],
            [
                'bl_id' => 2,
                'user_id' => 2,
                'giay_id' => 1,
                'bl_noidung' => 'giay dep qua',
                'bl_trangthai' => 1,
                "bl_created_at" =>  "2020-12-30 10:02:30"
            ],
            [
                'bl_id' => 3,
                'user_id' => 3,
                'giay_id' => 2,
                'bl_noidung' => 'giay dep qua, toi da mua va thay chat luong rat tot',
                'bl_trangthai' => 1,
                "bl_created_at" =>   "2020-12-30 10:02:30"
            ],
            [
                'bl_id' => 4,
                'user_id' => 7,
                'giay_id' => 22,
                'bl_noidung' => 'giay dep qua, toi da mua va thay chat luong rat tot',
                'bl_trangthai' => 1,
                "bl_created_at" =>   "2020-12-30 10:02:30"
            ],
            [
                'bl_id' => 5,
                'user_id' => 3,
                'giay_id' => 2,
                'bl_noidung' => 'giay dep qua, toi da mua va thay chat luong rat tot',
                'bl_trangthai' => 1,
                "bl_created_at" =>   "2020-12-30 10:02:30"
            ]


            ];
            DB::table('BinhLuan')->insert($arr);
    }
}


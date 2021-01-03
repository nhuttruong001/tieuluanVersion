<?php

use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
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
                'hd_id' => 1,
                'user_id' => 1,
                'hd_ngaylap' => '2020-05-07',
                'hd_trangthaidh' => 1,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 2,
                'user_id' => 2,
                'hd_ngaylap' => '2020-06-09',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 1,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 3,
                'user_id' => 2,
                'hd_ngaylap' => '2020-10-07',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 4,
                'user_id' => 5,
                'hd_ngaylap' => '2020-11-07',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 5,
                'user_id' => 5,
                'hd_ngaylap' => '2020-12-07',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 6,
                'user_id' => 6,
                'hd_ngaylap' => '2020-12-11',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 7,
                'user_id' => 6,
                'hd_ngaylap' => '2020-11-17',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 8,
                'user_id' => 7,
                'hd_ngaylap' => '2020-11-02',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 0,
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 9,
                'user_id' => 8,
                'hd_ngaylap' => '2020-10-18',
                'hd_trangthaidh' => 0,
                'hd_hinhthuctt' => 1,
                'hd_trangthai' => 1
            ]


            ];
            DB::table('HoaDon')->insert($arr);
    }
}
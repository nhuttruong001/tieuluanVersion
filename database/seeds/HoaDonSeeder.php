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
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 2,
                'kh_id' => 2,
                'hd_ngaylap' => '2020-06-09',
                'hd_trangthai' => 1
            ],
            [
                'hd_id' => 3,
                'kh_id' => 2,
                'hd_ngaylap' => '2020-10-07',
                'hd_trangthai' => 1
            ]

            ];
            DB::table('HoaDon')->insert($arr);
    }
}
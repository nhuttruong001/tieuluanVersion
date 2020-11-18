<?php

use Illuminate\Database\Seeder;

class ChiTietHoaDonSeeder extends Seeder
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
                'giay_id' => 1,
                'hd_id' => 1,
                'soluong' => 2 
            ],
            [
                'giay_id' => 2,
                'hd_id' => 2,
                'soluong' => 1 
            ]

            ];
            DB::table('ChiTietHoaDon')->insert($arr);
    }
}

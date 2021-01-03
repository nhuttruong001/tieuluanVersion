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
            ],
            [
                'giay_id' => 10,
                'hd_id' => 3,
                'soluong' => 2
            ],
            [
                'giay_id' => 3,
                'hd_id' => 4,
                'soluong' => 2
            ],
            [
                'giay_id' => 2,
                'hd_id' => 5,
                'soluong' => 2
            ],
            [
                'giay_id' => 6,
                'hd_id' => 6,
                'soluong' => 2
            ],
            [
                'giay_id' => 4,
                'hd_id' => 7,
                'soluong' => 2
            ],
            [
                'giay_id' => 11,
                'hd_id' => 8,
                'soluong' => 2
            ],
            [
                'giay_id' => 3,
                'hd_id' => 9,
                'soluong' => 2
            ]


            ];
            DB::table('ChiTietHoaDon')->insert($arr);
    }
}

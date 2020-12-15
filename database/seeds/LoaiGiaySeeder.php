<?php

use Illuminate\Database\Seeder;

class LoaiGiaySeeder extends Seeder
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
                'loai_id' => 1,
                'loai_ten' => 'Bóng đá',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 2,
                'loai_ten' => 'Sandal',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 3,
                'loai_ten' => 'Sneaker',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 4,
                'loai_ten' => 'Giày Tây',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 5,
                'loai_ten' => 'Dép',
                'loai_trangthai' => 1
            ]



            ];
            DB::table('LoaiGiay')->insert($arr);
    }
}
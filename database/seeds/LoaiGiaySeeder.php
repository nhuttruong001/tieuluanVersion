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
                'loai_ten' => 'bóng đá',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 2,
                'loai_ten' => 'sandal',
                'loai_trangthai' => 1
            ],
            [
                'loai_id' => 3,
                'loai_ten' => 'thể thao',
                'loai_trangthai' => 1
            ]


            ];
            DB::table('LoaiGiay')->insert($arr);
    }
}
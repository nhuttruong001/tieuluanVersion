<?php

use Illuminate\Database\Seeder;

class NhaCungCapSeeder extends Seeder
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
                'ncc_id' => 1,
                'ncc_ten' => 'nike',
                'ncc_trangthai' => 1
            ],
            [
                'ncc_id' => 2,
                'ncc_ten' => 'adidas',
                'ncc_trangthai' => 1
            ],
            [
                'ncc_id' => 3,
                'ncc_ten' => 'bitis',
                'ncc_trangthai' => 1
            ]

            ];
            DB::table('NhaCungCap')->insert($arr);
    }
}

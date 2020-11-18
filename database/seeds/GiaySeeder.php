<?php

use Illuminate\Database\Seeder;

class GiaySeeder extends Seeder
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
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 1,
                'giay_ten' => 'JORDAN 1',
                'giay_gia' => 3500000,
                'giay_hinhanh' => 'jordan_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 2,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 1,
                'giay_ten' => 'JORDAN 4',
                'giay_gia' => 4500000,
                'giay_hinhanh' => 'jordan_4.jpg',
                'giay_mota' => 'Mẫu giày thể thao được ưa chuộng nhất',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 3,
                'loai_id' => 2,
                'km_id' => 2,
                'ncc_id' => 2,
                'giay_ten' => 'STAN SMITH',
                'giay_gia' => 2400000,
                'giay_hinhanh' => 'stanmith_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 4,
                'loai_id' => 2,
                'km_id' => 2,
                'ncc_id' => 2,
                'giay_ten' => 'ULTRABOOST 20',
                'giay_gia' => 5000000,
                'giay_hinhanh' => 'ultraboost_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 5,
                'loai_id' => 3,
                'km_id' => 2,
                'ncc_id' => 3,
                'giay_ten' => 'BITIS HUNTER X 2020',
                'giay_gia' => 2400000,
                'giay_hinhanh' => 'bitishunterx2020_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ]


            ];
            DB::table('Giay')->insert($arr);
    }
}

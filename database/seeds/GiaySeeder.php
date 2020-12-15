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
                'loai_id' => 3,
                'km_id' => 1,
                'ncc_id' => 1,
                'giay_ten' => 'JORDAN 1',
                'giay_gia' => 3500000,
                'giay_soluong' => 100,
                'giay_hinhanh' => 'jordan_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 2,
                'loai_id' => 3,
                'km_id' => 1,
                'ncc_id' => 1,
                'giay_ten' => 'JORDAN 4',
                'giay_gia' => 4500000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'jordan_4.jpg',
                'giay_mota' => 'Mẫu giày thể thao được ưa chuộng nhất',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 3,
                'loai_id' => 3,
                'km_id' => 2,
                'ncc_id' => 2,
                'giay_ten' => 'STAN SMITH',
                'giay_gia' => 2400000,
                'giay_soluong' => 10,
                'giay_hinhanh' => 'stanmith_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 4,
                'loai_id' => 3,
                'km_id' => 2,
                'ncc_id' => 2,
                'giay_ten' => 'ULTRABOOST 20',
                'giay_gia' => 200,
                'giay_soluong' => 60,
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
                'giay_soluong' => 150,
                'giay_hinhanh' => 'bitishunterx2020_1.jpg',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 6,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'CR7 Sport 1',
                'giay_gia' => 2400000,
                'giay_soluong' => 150,
                'giay_hinhanh' => 'bongda_9.png',
                'giay_mota' => 'Mẫu giày thể thao luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 7,
                'loai_id' => 2,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Sandal nữ 1',
                'giay_gia' => 2400000,
                'giay_soluong' => 150,
                'giay_hinhanh' => 'sandal_1.jpg',
                'giay_mota' => 'Mẫu giày Sandal luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 8,
                'loai_id' => 4,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Giầy Tây 1',
                'giay_gia' => 2400000,
                'giay_soluong' => 150,
                'giay_hinhanh' => 'giaytay_1.jpg',
                'giay_mota' => 'Mẫu giày tây luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 9,
                'loai_id' => 5,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Dép 1',
                'giay_gia' => 180000,
                'giay_soluong' => 150,
                'giay_hinhanh' => 'dep_1.jpg',
                'giay_mota' => 'Mẫu dép luôn hot trong nhiều năm nay',
                'giay_trangthai' => 1
            ]





            ];
            DB::table('Giay')->insert($arr);
    }
}

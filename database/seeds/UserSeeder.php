<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'user_id' => 1,
                'user_username' => 'ngoclinh',
                'user_password' => bcrypt('ngoclinh'),
                'user_hoten' => 'Nguyễn Ngọc Linh',
                'user_ngaysinh' => '1998-02-01',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Mỹ Xuyên, Sóc Trăng',
                'user_sdt' => '09881234561',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 2,
                'user_username' => 'hongtien',
                'user_password' => bcrypt('hongtien'),
                'user_hoten' => 'Hồng Anh Tiến',
                'user_ngaysinh' => '1998-07-03',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Mỹ Xuyên, Sóc Trăng',
                'user_sdt' => '0998897302',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 3,
                'user_username' => 'nhuttruong',
                'user_password' => bcrypt('nhuttruong'),
                'user_hoten' => 'Nguyễn Nhựt Trường',
                'user_ngaysinh' => '1998-04-24',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Mang Thít,Vĩnh Long',
                'user_sdt' => '0395620066',
                'user_quyen' => 0, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 4,
                'user_username' => 'haisang',
                'user_password' => bcrypt('haisang'),
                'user_hoten' => 'Nguyễn Huỳnh Hải Sang',
                'user_ngaysinh' => '1998-01-25',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Thốt nốt, Cần Thơ',
                'user_sdt' => '0395621234',
                'user_quyen' => 0, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ]

            ];
            DB::table('User')->insert($arr);
    }
}

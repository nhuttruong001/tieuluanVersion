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
                'password' => bcrypt('ngoclinh'),
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
                'password' => bcrypt('hongtien'),
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
                'password' => bcrypt('nhuttruong'),
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
                'password' => bcrypt('haisang'),
                'user_hoten' => 'Nguyễn Huỳnh Hải Sang',
                'user_ngaysinh' => '1998-01-25',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Thốt nốt, Cần Thơ',
                'user_sdt' => '0395621234',
                'user_quyen' => 0, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 5,
                'user_username' => 'giakiet',
                'password' => bcrypt('giakiet'),
                'user_hoten' => 'Long Gia Kiệt',
                'user_ngaysinh' => '1998-07-23',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Phường 5,Vĩnh Long',
                'user_sdt' => '0397896543',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 6,
                'user_username' => 'thuyduong',
                'password' => bcrypt('thuyduong'),
                'user_hoten' => 'Nguyễn Thị Thùy Dương',
                'user_ngaysinh' => '2003-06-19',
                'user_gioitinh' => 0,#1 là nam 0 là nữ
                'user_diachi' => 'Thốt nốt, Cần Thơ',
                'user_sdt' => '0120987654',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 7,
                'user_username' => 'siliem',
                'password' => bcrypt('siliem'),
                'user_hoten' => 'Võ Sĩ Liêm',
                'user_ngaysinh' => '1998-03-07',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Tân Phú,An Giang',
                'user_sdt' => '0385674321',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 8,
                'user_username' => 'thanhphan',
                'password' => bcrypt('thanhphan'),
                'user_hoten' => 'Phan Văn Thành',
                'user_ngaysinh' => '1998-05-24',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Phú Tân, An Giang',
                'user_sdt' => '0395621111',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ],
            [
                'user_id' => 9,
                'user_username' => 'sockha',
                'password' => bcrypt('sockha'),
                'user_hoten' => 'Chau Sóc Kha',
                'user_ngaysinh' => '1998-01-20',
                'user_gioitinh' => 1,#1 là nam 0 là nữ
                'user_diachi' => 'Tịnh Biên,An Giang',
                'user_sdt' => '0349081143',
                'user_quyen' => 1, #1 la khach hang 0 la admin
                'user_trangthai' => 1

            ]

            ];
            DB::table('User')->insert($arr);
    }
}

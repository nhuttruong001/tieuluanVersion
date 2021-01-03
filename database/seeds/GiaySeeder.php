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
                'giay_mota' => 'Sự hợp nhất của thế giới thời trang và giày thể thao đã đạt đến đỉnh cao tuyệt đối với sự hợp tác này, giữa Jordan Brand và nhà thời trang cao cấp của Pháp Dior.
                Bằng cách áp dụng Dior Grey nổi tiếng với Oblique Jacquard của mình, Dior và Jordan đã tăng cường vẻ đẹp của hình dáng ban đầu một cách đáng kinh ngạc, dẫn đến sự xa hoa chưa từng có mà sau này, mọi người đã cạn kiệt tài khoản tiết kiệm chỉ để mua một đôi.',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
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
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 10,
                'loai_id' => 5,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Dép 2',
                'giay_gia' => 195000,
                'giay_soluong' => 100,
                'giay_hinhanh' => 'dep_2.jpeg',
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 11,
                'loai_id' => 5,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Dép 3',
                'giay_gia' => 235000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'dep_3.jpg',
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 12,
                'loai_id' => 5,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Dép 4',
                'giay_gia' => 215000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'dep_4.jpg',
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 13,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 2,
                'giay_ten' => 'Bóng đá 2',
                'giay_gia' => 1215000,
                'giay_soluong' => 30,
                'giay_hinhanh' => 'bongda_2.jpg',
                'giay_mota' => 'Sản phẩm dùng cho dân PHỦI, đinh thấp, thích hợp đá bóng trên mặt sân cỏ nhân tạo. Nhưng cũng có thể đá trên sân cỏ tự nhiên ko vấn đề, sản phẩm được giới đá bóng phủi săn lùng. Giá tiền lại rất hợp lý cho a e chuyên bóng đá phủi 
                Chất liệu da PU, chống thấm nước  
                Đế giầy cao TF giúp tăng khả năng bám trụ.  
                Họa tiết logo sắc nét 
                Full khâu đế , chắc chắn , bền bỉ ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 14,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Bóng đá 3',
                'giay_gia' => 400000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'bongda_3.jpg',
                'giay_mota' => 'Sản phẩm dùng cho dân PHỦI, đinh thấp, thích hợp đá bóng trên mặt sân cỏ nhân tạo. Nhưng cũng có thể đá trên sân cỏ tự nhiên ko vấn đề, sản phẩm được giới đá bóng phủi săn lùng. Giá tiền lại rất hợp lý cho a e chuyên bóng đá phủi 
                Chất liệu da PU, chống thấm nước  
                Đế giầy cao TF giúp tăng khả năng bám trụ.  
                Họa tiết logo sắc nét 
                Full khâu đế , chắc chắn , bền bỉ ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 15,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Bóng đá 4',
                'giay_gia' => 550000,
                'giay_soluong' => 20,
                'giay_hinhanh' => 'bongda_4.jpg',
                'giay_mota' => 'Sản phẩm dùng cho dân PHỦI, đinh thấp, thích hợp đá bóng trên mặt sân cỏ nhân tạo. Nhưng cũng có thể đá trên sân cỏ tự nhiên ko vấn đề, sản phẩm được giới đá bóng phủi săn lùng. Giá tiền lại rất hợp lý cho a e chuyên bóng đá phủi 
                Chất liệu da PU, chống thấm nước  
                Đế giầy cao TF giúp tăng khả năng bám trụ.  
                Họa tiết logo sắc nét 
                Full khâu đế , chắc chắn , bền bỉ ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 16,
                'loai_id' => 1,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Bóng đá 5',
                'giay_gia' => 950000,
                'giay_soluong' => 60,
                'giay_hinhanh' => 'bongda_5.jpg',
                'giay_mota' => 'Sản phẩm dùng cho dân PHỦI, đinh thấp, thích hợp đá bóng trên mặt sân cỏ nhân tạo. Nhưng cũng có thể đá trên sân cỏ tự nhiên ko vấn đề, sản phẩm được giới đá bóng phủi săn lùng. Giá tiền lại rất hợp lý cho a e chuyên bóng đá phủi 
                Chất liệu da PU, chống thấm nước  
                Đế giầy cao TF giúp tăng khả năng bám trụ.  
                Họa tiết logo sắc nét 
                Full khâu đế , chắc chắn , bền bỉ ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 17,
                'loai_id' => 2,
                'km_id' => 1,
                'ncc_id' => 2,
                'giay_ten' => 'Sandal 2',
                'giay_gia' => 300000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'sandal_2.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 18,
                'loai_id' => 2,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Sandal 3',
                'giay_gia' => 215000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'sandal_3.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 19,
                'loai_id' => 4,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Giày tây 2',
                'giay_gia' => 2200000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'giaytay_2.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 20,
                'loai_id' => 4,
                'km_id' => 1,
                'ncc_id' => 3,
                'giay_ten' => 'Giầy tây 3',
                'giay_gia' => 2215000,
                'giay_soluong' => 50,
                'giay_hinhanh' => 'giaytay_3.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 21,
                'loai_id' => 4,
                'km_id' => 4,
                'ncc_id' => 3,
                'giay_ten' => 'Giầy tây 4',
                'giay_gia' => 1400000,
                'giay_soluong' => 30,
                'giay_hinhanh' => 'giaytay_4.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 22,
                'loai_id' => 2,
                'km_id' => 2,
                'ncc_id' => 3,
                'giay_ten' => 'Sandal 4',
                'giay_gia' => 115000,
                'giay_soluong' => 30,
                'giay_hinhanh' => 'sandal_4.jpg',
                'giay_mota' => 'Bạn đi giày hay bị đau đầu ngón chân, bạn lười xỏ và chỉnh dây giày (giày có dây nhưng ko chỉnh dây vẫn xỏ chân vào giày dc nhé^^) hay chỉ đơn giản là bạn thích sự mềm mại thoải mái cho bàn chân mà kiểu dáng vẫn vô cùng hợp thời trang thì bơi hết vào đây nào, đảm bảo đôi giày này sẽ ko làm bạn thất vọng đâu nhé!
                Kiểu dáng cổ thấp, chất liệu vải dù siêu bền với thiết kế các lỗ nhỏ giúp không khi bên trong giày lưu thông, tránh bị hôi chân. Các bạn có thể giặt giũ thoải mái mà ko lo hư hại nhưng lưu ý phơi giày trong bóng râm để giày ko bị bay màu nhé. Giày gồm có 3 màu: hồng, đen, trắng cơ bản dễ phối đồ lắm nhé! ',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 23,
                'loai_id' => 5,
                'km_id' => 3,
                'ncc_id' => 3,
                'giay_ten' => 'Dép Gucci 1',
                'giay_gia' => 165000,
                'giay_soluong' => 30,
                'giay_hinhanh' => 'dep_1_1.jpg',
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ],
            [
                'giay_id' => 24,
                'loai_id' => 5,
                'km_id' => 2,
                'ncc_id' => 3,
                'giay_ten' => 'Dép Gucci 2',
                'giay_gia' => 115000,
                'giay_soluong' => 30,
                'giay_hinhanh' => 'dep_1_2.jpg',
                'giay_mota' => 'Dép nam nữ  mắt cáo hàng siêu đẹp ,chính hãng made in THAILAND.
                Chất liệu: xốp EVA cao cấp, đế có thiết kế dạng gợn sóng bằng cao su tăng độ ma sát
                Dép rất chắc chắn, bền đẹp và êm chân
                Phần đế dép được thiết kế 2 lớp chắc chắn.',
                'giay_trangthai' => 1
            ]






            ];
            DB::table('Giay')->insert($arr);
    }
}

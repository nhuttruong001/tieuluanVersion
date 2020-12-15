@extends('frontend.layout.master')
@section('frontend_content')



<!-- main -->
<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
					
						<li class="menu-item">danh mục sản phẩm</li>
						@foreach($LoaiGiay as $loai)
						<li class="menu-item"><a href="{{route('category',['id'=>$loai->loai_id])}}" title="">{{$loai->loai_ten}}</a></li>
					
						@endforeach

											
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>
                
					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-1.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-2.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-3.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-4.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-5.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-6.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="{{asset('frontend/img/home/banner-I-7.jpg')}}" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="{{asset('frontend/img/home/slide-1.jpg')}}" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img src="{{asset('frontend/img/home/slide-2.jpg')}}" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="{{asset('frontend/img/home/slide-3.jpg')}}" alt="New York" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="{{asset('frontend/img/home/banner-t-1.jpg')}}" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="{{asset('frontend/img/home/banner-t-2.jpg')}}" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

				
					<div id="wrap-inner">
						<div class="products">
							<h2>Lịch Sử Giỏ Hàng</h2>

							<div id="wrap-inner" style="margin-left:2%">
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							<p>
								<span class="info">Khách hàng: </span> {{$auth-> user_hoten}}
							
              </p>
              <p>
								<span class="info">Ngày sinh: </span> {{$auth-> user_ngaysinh}}
                
							</p>
							<p>
								<span class="info">Điện thoại: </span>{{$auth-> user_sdt}}
								
							</p>
							<p>
								<span class="info">Địa chỉ:</span> {{$auth-> user_diachi}}
               
							</p>
						</div>						
						<div id="hoa-don">
							<h3>Hóa đơn mua hàng</h3>							
							<table class="table-bordered table-responsive">
								<tr class="bold">
									<td width="25%">Tên sản phẩm</td>
									<td width="15%">Giá</td>
									<td width="10%">Số lượng</td>
									<td width="15%">Thành tiền</td>
									<td width="15%">Ngày mua</td>
									<td width="20%">Trạng thái</td>
                </tr>
                @foreach ($chitiethd as $value)
								<tr>
									
									<td>{{$value->ChiTietHoaDon[0]->Giay[0]->giay_ten}}</td>
									<td>{{$value->ChiTietHoaDon[0]->Giay[0]->giay_gia}}</td>
									<td>{{$value->ChiTietHoaDon[0]->soluong}}</td>
									<td>{{$value->ChiTietHoaDon[0]->soluong * $value->ChiTietHoaDon[0]->Giay[0]->giay_gia}}</td>
									<td>{{$value->hd_ngaylap}}</td>
									@if($value->hd_trangthaidh == 0)
									<td>Đang xử lý</td>
									@else
									<td>Đã hoàn thành</td>
									@endif
									
									
								</tr>				
				  <?php $tong +=  $value->ChiTietHoaDon[0]->soluong * $value->ChiTietHoaDon[0]->Giay[0]->giay_gia  ?>
				  @endforeach
				  <td class="total-price"></td>
				  <td class="total-price"></td>
				  <td class="total-price"></td>

				  <td colspan="3"> <b>Tổng tiền:</b> {{number_format($tong,0,',','.')}} VNĐ</td>
								</tr>
							</table>
						</div>
					</div>					
            

							{{--aaaa--}}
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->



@endsection
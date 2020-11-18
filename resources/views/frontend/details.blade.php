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
							<li class="menu-item"><a href="#" title="">Giày nam</a></li>
							<li class="menu-item"><a href="#" title="">Giày nữ</a></li>
							<li class="menu-item"><a href="#" title="">Sneaker</a></li>	
							<li class="menu-item"><a href="#" title="">Sandal</a></li>
							<li class="menu-item"><a href="#" title="">Giầy tây</a></li>
							<li class="menu-item"><a href="#" title="">Giày mọi</a></li>
							<li class="menu-item"><a href="#" title="">Bóng đá</a></li>
											
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
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$details->giay_ten}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="upload/giay/{{$details->giay_hinhanh}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price" >{{$details->giay_gia}} VND</span></p>
									<p>Bảo hành: 1 đổi 1 trong 12 tháng</p> 
									<p>Phụ kiện: Vớ,bộ vệ sinh giày</p>
									<p>Tình trạng: mới 100%</p>
									<p>Hỗ trợ thanh toán : Paypal,...</p>
									<p>Còn hàng: Còn hàng</p>
									<p class="add-cart text-center"><a href="{{route('cart')}}">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">{{$details->giay_mota}}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form>
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list">
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2017-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2017-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2017-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
						</div>
					</div>					
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->



@endsection
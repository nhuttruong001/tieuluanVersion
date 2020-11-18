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
							<li class="menu-item"><a href="#" title="">Nike</a></li>	
							<li class="menu-item"><a href="#" title="">Adidas</a></li>
							<li class="menu-item"><a href="#" title="">Sandal</a></li>
							<li class="menu-item"><a href="#" title="">Giày Tây</a></li>
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
						<div class="products">
							<h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
							@foreach ($giay1 as $g)
								@if($g->giay_trangthai == 1)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="upload/giay/{{$g->giay_hinhanh}}" class="img-thumbnail"></a>
									<p><a href="#">{{$g->giay_ten}}</a></p>
									<p class="price">{{$g->giay_gia}}</p>	  
									<div class="marsk">
										<a href="{{route('details',['id'=>$g->giay_id])}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endif
								@endforeach
							</div>                	                	
						</div>

						<!-- <div id="wrap-inner">
						<div class="products">
							<h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                                    
								</div>
							</div>                	                	
						</div> -->

						<div class="products">
							<h3>sản phẩm mới</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                      
								</div> 
							</div>    
						</div>
					</div>

						<!-- <div class="products">
							<h3>sản phẩm mới</h3>

							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="{{asset('frontend/img/home/product-1.png')}}" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div> -->
								
						</div>
					</div>
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->



@endsection
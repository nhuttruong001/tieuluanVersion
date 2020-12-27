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
								<img src="{{asset('frontend/img/home/slide-1.jpg')}}" alt="Los Angeles">
							</div>
							<div class="carousel-item">
								<img src="{{asset('frontend/img/home/slide-2.jpg')}}" alt="Chicago">
							</div>
							<div class="carousel-item">
								<img src="{{asset('frontend/img/home/slide-3.jpg')}}" alt="New York">
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
{{--san pham moi nhat--}}
				<div id="wrap-inner">
					<div class="products">
						<h3>sản phẩm mới nhất</h3>
					
						<div class="product-list row">
							@foreach ($giay1 as $g)
							@if($g->giay_trangthai == 1)
							<div class="product-item hihi col-md-3 col-sm-6 col-xs-12 " style="overflow:hidden">
								<a href="#"><img src="upload/giay/{{$g->giay_hinhanh}}" class="img-thumbnail"></a>
								<p><a href="#">{{$g->giay_ten}}</a></p>
								<p class="price">{{$g->giay_gia}}</p>
								
								<div class="mask-custom">
									<div>
										<a href="{{route('details',['id'=>$g->giay_id])}}">Xem chi tiết</a>
									</div>
									<div>
										<a href="{{route('addcart',['id'=>$g->giay_id])}}">Add to cart</a>
									</div>
									<div>
										<a href="{{route('addcart',['id'=>$g->giay_id])}}">Buy now</a>
									</div>
								
								</div>
								

									
							</div>

										@if(isset($g->status))
										<div class="lastest">
											new
										</div>
								
										@endif
							@endif
							@endforeach
						</div>
						<!-- <button>add to cart</button>                 	                	 -->
					</div>

					{{--san pham moi nhat--}}			
				
					
			</div>
		</div>

		<!-- end main -->
	</div>
	</div>
	</div>
</section>
<!-- endmain -->

<div class="mb-5" style="margin-left: 50%">{!! $giay1->links() !!}</div>

@endsection
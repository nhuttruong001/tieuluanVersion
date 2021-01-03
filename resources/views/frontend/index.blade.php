@extends('frontend.layout.master')
@section('frontend_content')
<style>
.line-through {
       text-decoration: line-through;
    }
</style>


<!-- main -->
<section id="body">
	<div class="container">
		<div class="row">
			<div id="sidebar" class="col-md-3">
				<nav id="menu">
					<ul>
				
						<li class="menu-item"><b>danh mục sản phẩm</b></li>
					
						@foreach($LoaiGiay as $loai)
						@if($loai->loai_trangthai == 1)
					
						<li class="menu-item"><a href="{{route('category',['id'=>$loai->loai_id])}}" title="">{{$loai->loai_ten}}</a></li>
					
						@endif
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
						
				
							<div class="product-item hihi col-md-3 col-sm-6 col-xs-12 " style="overflow:hidden">
							@if(($g->km_id != 1))
										<div class="lastest">
											sale
										</div>
								
										@endif
								<a href="#"><img src="upload/giay/{{$g->giay_hinhanh}}" class="img-thumbnail" style="width:115px;height:199px"></a>
								<p><a href="#">{{$g->giay_ten}}</a></p>

								@if(($g->km_id != 1))
								@php	
									$giasaukm = $g->giay_gia - ($g->giay_gia * $g->KhuyenMai->km_phantram/100);
									
								@endphp
									<p class="price line-through">{{number_format($g->giay_gia,0,',','.')}} VNĐ</p>
									<p class="price">{{number_format($giasaukm,0,',','.')}} VNĐ</p>

								@else
									<p class="price">{{number_format($g->giay_gia,0,',','.')}} VNĐ</p>
								@endif
								
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
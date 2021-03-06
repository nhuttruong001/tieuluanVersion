@extends('frontend.layout.master')
@section('frontend_content')
@include('sweetalert::alert')
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
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center" >
							
									<img src="upload/giay/{{$details->giay_hinhanh}}" style="height:100%">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
								@if($details->km_id == 1)
									<p><span class="price" >{{number_format($details->giay_gia,0,',','.')}} VNĐ</span></p>
								@else
								<p><span class=" line-through" >{{number_format($details->giay_gia,0,',','.')}} VNĐ</span> <span class="price" >{{number_format(($details->giay_gia)-(($details->giay_gia)*($details->KhuyenMai->km_phantram/100)),0,',','.')}} VNĐ</span></p>
								@endif
						
									<p>Bảo hành: 1 đổi 1 trong 12 tháng</p> 
									<p>Phụ kiện: Vớ,bộ vệ sinh giày</p>
									<p>Tình trạng: mới 100%</p>
									<p>Hỗ trợ thanh toán : Paypal,...</p>
									<p>Còn hàng: Còn hàng</p>
							
									<p class="add-cart text-center"><a href="{{route('addcart',$details->giay_id)}}">Đặt hàng online</a></p>
								
									
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
								<form id="formData">
									@csrf
									<div class="form-group">
										<textarea required rows="5" id="cmformData" class="form-control" name="bl_noidung"></textarea>
										<input type="hidden" name="user_id"  value="{{isset($auth) ? $auth->user_id : null}}"  />
										<input type="hidden" name="giay_id" value="{{isset($details) ? $details->giay_id : null}}" />
									</div>
									<div class="form-group text-right">
										<button class="btn btn-default" type="button" id="saveBtn">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						
						<div id="blForm">
						<h3><i style='font-size:24px' class='far'>&#xf044;</i>&nbsp;Ý kiến khách hàng</h3><hr>
						<ul id="list-bl">
						@foreach($comment as $bl)
						@if($bl->bl_trangthai == 1)	
								<li class="com-title">
								<i style='font-size:24px' class='fas'>&#xf508;</i>&nbsp;{{$bl->User->user_hoten}}
									<br>
									<span>{{$bl->bl_created_at}}</span>	
								</li>
								<li class="com-details">
									{{$bl->bl_noidung}}
								</li>								
							@endif
						@endforeach
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
@section('script')

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//binhluan
$('#saveBtn').click(function(e){
	e.preventDefault();
	$.ajax({
		data: $('#formData').serialize(),
		url: "{{route('binhluan-xl')}}",
		type: "POST"
	}).done(function(data){
		if(data.type == 500){
			alert(data.message);
		}else{
			$('#formData').trigger("reset");
			$('#list-bl').append(data.data);
			alert(data.message);
		}
		

	}).error(function(e){
		console.log(e);
	});
});
</script>

@endsection
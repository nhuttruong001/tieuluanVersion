@extends('frontend.layout.master')
@section('frontend_content')
@include('sweetalert::alert')



  
  @if(Session::has('alert-3'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Xóa bình luận thành công');
      };
</script>
  @endsection
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
  @endif
  
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
									@if(auth())
									<p class="add-cart text-center"><a href="{{route('addcart',$details->giay_id)}}">Đặt hàng online</a></p>
									@else
									{{Alert::warning('Warning Title', 'Warning Message')}}
									@endif
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
								<form action="{{route('binhluan-xl')}}" method="POST">
									@csrf
									<div class="form-group">
										<!-- <label for="cm">Bình luận:</label> -->
										<textarea required rows="5" id="cm" class="form-control" name="bl_noidung"></textarea>
										<input type="hidden" name="user_id" value="{{isset($auth) ? $auth->user_id : null}}"  />
										<input type="hidden" name="giay_id" value="{{isset($details) ? $details->giay_id : null}}" />
									</div>
									<div class="form-group text-right">
										<button class="btn btn-default">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list" border: 1px solid gray;>
						@foreach($binhluan as $bl)
						@if($bl->bl_trangthai == 1)
							<ul>
								<li class="com-title">
									{{$bl->user_hoten}}
									<br>
									<span>2017-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									{{$bl->bl_noidung}}
								</li>
								<i class='fas fa-trash-alt' style="margin-left:800px"></i><a   title="Xóa" class="glyphicon glyphicon-trash" href="{{route('xoabinhluan',['id'=>$bl->bl_id])}}"  onclick="return confirm('Bạn có chắc muốn xóa không?');"></a>
							</ul>
							@endif
						@endforeach
						
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
    function timkiem(){
      document.getElementById('search').click();
    }
</script>
@endsection
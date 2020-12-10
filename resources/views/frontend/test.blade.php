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
						<li class="menu-item"><a href="#" title="">{{$loai->loai_ten}}</a></li>
					
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
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
						
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									<?php $id=0 ?>
									@foreach($cart as $key => $value)
									<tr>
										<?php $id++ ?>
										<td><img class="img-responsive" src="{{ asset('upload/giay/' . $value->attributes->avatar) }}"></td>
										<td>{{$value->name}}</td>
										
										<td>
											<div class="form-group">
											<input onclick="getqty('{{$key}}')" id="qty{{$key}}" class="qty"  min="1"  class="form-control" name="quantity" value="{{$value->quantity}}" type="number">
												

											</div>
										
										</td>
									
										
										<td>{{number_format($value->price,0,',','.')}} đ</td>

										<td><span class="price">{{number_format($value->quantity * $value->price,0,',','.')}} đ</span></td>
										<td><a href="{{route('destroycart',$value->id)}}">Xóa</a></td>
									
									</tr>
								
								@endforeach
						
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: 	{{number_format(\Cart::getSubTotal(),0,',','.')}} đ
										
											 <span class="total-price"></span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{route('trangchu')}}" class="my-btn btn">Mua tiếp</a>
										<!-- <a href="#" class="my-btn btn">Cập nhật</a> -->
										<a href="#" class="my-btn btn">Xóa giỏ hàng</a>
									</div>
								</div>
						          	                	
						</div>

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form>
								<!-- <div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" id="email" name="email">
								</div> -->
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" id="add" name="add">
								</div>


								  <form>
									<div class="form-group">
										<label class="col-sm-6 control-label col-lg-6" for="inputSuccess"><h4>Phương thức thanh toán</h4></label>
										<div class="col-lg-6">
									<div class="radio">
									  <label><input type="radio" name="optradio" checked>Thanh toán sau khi nhận hàng</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="optradio">Paypal</label>
									</div>
								</div>
							</div>
								  </form>

								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
								</div>
							</form>
						</div>
					</div>

					
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->
<script>

	// document.getElementById('qty').addEventListener('click', function(e){
	// 	var id = document.getElementById('qty').value;
	// 	console.log(id);
	// // 	document.getElementById('update-cart').addEventListener('click', function(e){
	// // 		e.preventDefault();
		
	// // 	console.log(id);
	// // })
		
	// })

	function getqty(id){

		var qty = document.getElementById('qty' + id).value; 	
		//qty = qty - qty + 1;	

		//console.log(id)
		console.log(qty)
		$.ajax({
			url: "{{route('updatecart')}}",
			data : {
				qty : qty,
				id : id
			},
			}).done(function(result) {
				console.log(result.mess)
				});
	}
</script>


@endsection


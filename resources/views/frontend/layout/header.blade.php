<!-- header -->


<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="{{route('trangchu')}}"><img src="{{asset('frontend/img/home/logo2.jpg')}}" style="border-radius:50%"></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>

			

				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
				<form action="{{route('timkiemgiay')}}" method="get">
					<input type="text" name="tu_khoa" id="searchFormInput" placeholder="Điền từ khóa...">
					<input type="submit" name="submit" value="Tìm Kiếm">
					</form>
				</div>


				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="">Giỏ hàng</a>
					<a href="#">{{Cart::getTotalQuantity()}}</a>

			
			
								    
				</div>
			</div>		
		</div>
	<!-- <a href="{{route('formlogin')}}"><button class="button" style="position:absolute;top:28px;right:90px;">Đăng nhập</button><a/>
	<a href="{{route('formsignup')}}"><button class="button" style="position:absolute;top:28px;right:10px;">Đăng ký</button><a/> -->




	<div class="dropdown" style="position:absolute;top:28px;right:30px;">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">

	<a href="" style="color:white"></a>
	@if (!isset($auth))
	<a href="" style="color:white">Đăng nhập</a>
	@else
    <a href="#" style="color:white; padding: 10px;">{{$auth->user_username}}</a>
	@endif
  </button> 
  <div class="dropdown-menu">

    <a class="dropdown-item" href="{{route('formlogin')}}">Đăng Nhập</a>
    <a class="dropdown-item" href="{{route('formsignup')}}">Đăng Ký</a>
	@if (isset($auth))
	<a class="dropdown-item" href="{{route('email')}}" title="Thông tin khách hàng">Thông Tin Cá Nhân</a>
	@else
	@endif
	@if (isset($auth) && $auth->user_quyen == 0)
	<a class="dropdown-item" href="{{route('admin')}}">Về Trang Admin</a>
	@else
	@endif
	@if (isset($auth))
    <a class="dropdown-item" href="{{route('formChange',['id'=>$auth->user_id])}}">Đổi Mật Khẩu</a>
	@else
	@endif
	@if (isset($auth))
	<a class="dropdown-item" href="{{route('logout')}}">Đăng Xuất</a>
	@else
	@endif
  </div>
</div>


	
	</header>
	
	<!-- /header -->
	<!-- endheader -->







                      
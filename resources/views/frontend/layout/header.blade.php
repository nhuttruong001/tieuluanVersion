<!-- header -->
<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="#"><img src="{{asset('frontend/img/home/logo2.jpg')}}" style="border-radius:50%"></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<input type="text" name="text" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="#">Giỏ hàng</a>
					<a href="#">6</a>

			
			
								    
				</div>
			</div>		
		</div>
	<!-- <a href="{{route('formlogin')}}"><button class="button" style="position:absolute;top:28px;right:90px;">Đăng nhập</button><a/>
	<a href="{{route('formsignup')}}"><button class="button" style="position:absolute;top:28px;right:10px;">Đăng ký</button><a/> -->




	<div class="dropdown" style="position:absolute;top:28px;right:10px;">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">

	<a href="" style="color:white"></a>
	@if (!isset($auth))
	<a href="" style="color:white">Đăng nhập</a>
	@else
    <li><a href="#">{{$auth->user_username}}</a>
	@endif
  </button> 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{route('formlogin')}}">Đăng nhập</a>
    <a class="dropdown-item" href="{{route('formsignup')}}">Đăng ký</a>
    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
	<a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
  </div>
</div>


	
	</header>
	
	<!-- /header -->
	<!-- endheader -->


                              
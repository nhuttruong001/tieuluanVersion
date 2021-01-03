<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Quản Lý Bán Giày</title>
    <base href="{{asset('')}}">

 

    <link rel="stylesheet" href="frontend/css/email.css">
    <link rel="stylesheet" href="frontend/css/complete.css">
    <link rel="stylesheet" href="frontend/css/details.css">
    <link rel="stylesheet" href="frontend/css/category.css">
    <link rel="stylesheet" href="frontend/css/search.css">
    <link rel="stylesheet" href="frontend/scss/_reboot.scss">


    <!-- Stylesheet -->
    <link rel="stylesheet" href="frontend/style.css">
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/home.css">
    <link rel="stylesheet" href="frontend/css/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="frontend/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    @include('frontend.layout.header')
    <!-- Header Area End -->

   @yield('frontend_content')

    <!-- Footer Area Start -->
     @include('frontend.layout.footer')
    <!-- Footer Area End -->




    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="frontend/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="frontend/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="frontend/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="frontend/js/default-assets/active.js"></script>


    @yield('script')
</body>

</html>

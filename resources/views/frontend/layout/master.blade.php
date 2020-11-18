<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Title -->
    <title>Quản Lý Bán Giày</title>
    <base href="{{asset('')}}">

 

    <link rel="stylesheet" href="frontend/css/email.css">
    <link rel="stylesheet" href="frontend/css/complete.css">
    <link rel="stylesheet" href="frontend/css/details.css">
    <link rel="stylesheet" href="frontend/css/category.css">
    <link rel="stylesheet" href="frontend/css/search.css">


    <!-- Stylesheet -->
    <link rel="stylesheet" href="frontend/style.css">
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="frontend/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

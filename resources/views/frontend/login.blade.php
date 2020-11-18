   <!-- form signup -->

<link rel="stylesheet" href="frontend/css/login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <!-- form signup -->

<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
         label.error {
        display: inline-block;
        color:red;
        width: 200px;
        }
     </style>
    <head>
        <title>Đăng nhập</title>
        
    </head>
    <body>
        <div class="to">
            <div class="form">
                <h2>Đăng nhập</h2>
                <i class="fab fa-app-store-ios"></i>
                <label >Username</label>
                <input type="text" name="kh_username">
                <label >Password</label>
                <input type="password" name="kh_password">

                <p id="message"></p>
					@if(session('error'))
					<div style="color:red; padding: 20px;" role="alert">
					<strong>{{session('error')}}</strong>
					</div>
				  	@endif
               
                <input id="submit" type="submit" name="submit" value="Đăng nhập">
            </div>                
        </div>
    </body>
</html>

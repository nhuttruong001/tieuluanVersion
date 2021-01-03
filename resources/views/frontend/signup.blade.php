<!DOCTYPE html>
<html lang="en">

    <meta name="csrf-token" content="{{ csrf_token() }}">




<style>
  label.error {
        display: inline-block;
        color:red;
        width: 200px;
    }

</style>

  <script>
 

	  function success(){
		  alert('Đăng ký thành công')
	  }
</script>


<head>
	<title>Đăng Ký</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{asset('')}}">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
			<form class="login100-form validate-form" id="formDemo1" method="post" action="{{route('signup')}}">
				@csrf
				<span class="login100-form-title p-b-33">
						ĐĂNG KÝ
					</span>

                 
					<div class="wrap-input100 ">
					<input class="input100" type="text"  required name="user_username" id="user_username" placeholder="Nhập tên đăng nhập.....">
					<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_username'))
                    <div style="color:red">{{ $errors->first('user_username')}}</div>
                    @endif


					<div class="wrap-input100 rs1 ">
						<input class="input100" type="password" name="password" id="password" required placeholder="Nhập mật khẩu.....">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('password'))
                    <div style="color:red">{{ $errors->first('password')}}</div>
                    @endif


                    <div class="wrap-input100 rs1">
						<input class="input100" type="text" name="user_hoten" id="user_hoten" placeholder="Nhập họ tên.....">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					
					@if($errors->has('user_hoten'))
                    	<div style="color:red">{{ $errors->first('user_hoten')}}</div>
                    @endif



                    <div class="wrap-input100 rs1 "> 
				
                        <input class="input100" type="date" name="user_ngaysinh" id="user_ngaysinh" title="Ngày sinh">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_ngaysinh'))
                    <div style="color:red">{{ $errors->first('user_ngaysinh')}}</div>
                    @endif


                    <div class="wrap-input100 rs1">
					
                        <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="1"> Nam
                          </label>
                          <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="0"> Nữ
                          </label>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_gioitinh'))
                    <div style="color:red">{{ $errors->first('user_gioitinh')}}</div>
                    @endif

                    <div class="wrap-input100 rs1 ">
						<input class="input100" type="text" name="user_diachi" id="user_diachi" required placeholder="Nhập địa chỉ.....">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_diachi'))
                    <div style="color:red">{{ $errors->first('user_diachi')}}</div>
                    @endif

					<div class="wrap-input100 rs1 ">
						<input class="input100" type="email" name="user_email" id="user_email" required placeholder="Nhập Email.....">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_email'))
                    <div style="color:red">{{ $errors->first('user_email')}}</div>
                    @endif

                     <div class="wrap-input100 rs1 ">
						<input class="input100" type="number" name="user_sdt" id="user_sdt" required placeholder="Nhập số điện thoại.....">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@if($errors->has('user_sdt'))
                    <div style="color:red">{{ $errors->first('user_sdt')}}</div>
                    @endif


				

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Đăng ký
						</button>
					</div>

					

					<div class="text-center">
					<a href="{{route('trangchu')}}" class="txt2 hov1">
							Trang chủ
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

    <script src="login/js/main.js"></script>

    

</body>

</html>

@section('script')
<script>
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formDemo1").validate({
        rules: {
            user_username: "required",
            password: "required",
            user_hoten: "required",
            user_ngaysinh: "required",
            user_gioitinh: "required",
            user_diachi: "required",
            user_email: {
              required: true,
              email: true,
			  unique: true
            },
			user_sdt: "required"
           
        },
        messages: {
			user_username: "Vui lòng nhập Username",
            password: "Vui lòng nhập password",
            user_hoten: "Vui lòng nhập Họ tên",
            user_ngaysinh: "Vui lòng nhập ngày sinh",
            user_gioitinh: "Vui lòng chọn giới tính",
            user_diachi: "Vui lòng nhập địa chỉ",
			user_email: {
              required: "Vui lòng nhập Email",
              email: "Email sai định dạng",
			  unique: "Email đã tồn tại"
            },
			user_sdt: "required"
        }
    });


    </script>

@endsection


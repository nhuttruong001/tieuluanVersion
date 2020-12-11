
@extends('frontend.layout.master')
@section('frontend_content')
<div id="xac-nhan">
						<h3 style=" text-align: center;">Xác nhận mua hàng</h3>
						<form>
						
							<div class="form-group">
								<label for="name"  style="margin-left:30%">Họ và tên:</label>
								<input required type="text" class="form-control" id="name" name="name"
                                style="width:40%;   display: block;margin : 0 auto;" >
							</div>
							<div class="form-group">
								<label for="phone"  style="margin-left:30%">Số điện thoại:</label>
								<input required type="number" class="form-control" id="phone" name="phone" 
                                style="width:40%;   display: block; margin : 0 auto;">
							</div>
							<div class="form-group">
								<label for="add"  style="margin-left:30%">Địa chỉ:</label>
								<input required type="text" class="form-control" id="add" name="add" 
                                style="width:40%;   display: block;margin : 0 auto;">
							</div>
                            <div class="form-group" >
									<label for="ngaysinh" style="margin-left:30%">Ngày sinh:</label>
									<input required type="date" class="form-control" id="ngaysinh" name="ngaysinh" 
                                    style="width:40%;   display: block; margin : 0 auto;">
								</div>
                          
								<a href=""><button type="submit" class="btn btn-warning" style="margin-left:63%">Thanh toán</button></a>
							<form>
                            <br><br>
                            <div style="margin-left:63%">
                          <a href="{{route('trangchu')}}" >Quay lại trang chủ</a>
                           
                            </div>
                           

@endsection
@section('script')
<script>
h3{
    text-align: center;
}
input[type="text"] {
             display: block;
             margin : 0 auto;
        }
</script>
@endsection
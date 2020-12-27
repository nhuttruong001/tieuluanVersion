@extends('admin.layout.master')
@section('admin_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
  label.error {
        display: inline-block;
        color:red;
        width: 200px;
    }

</style>
<div class="row">
  <div class="col-lg-12">

      <section class="panel">
          <header class="panel-heading">
              Thêm User
          </header>
          <div class="panel-body">
            <div class="form" >
            <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('User_XLThem')}}" novalidate="novalidate">
            @csrf
            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tên tài khoản</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_username"  name="user_username" type="text">

                        @if($errors->has('user_username'))
                        <div style="color:red">{{ $errors->first('user_username')}}</div>
                        @endif
                      </div>
                    </div>
             <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Mật khẩu</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_password"  name="user_password" type="password">

                        @if($errors->has('user_password'))
                        <div style="color:red">{{ $errors->first('user_password')}}</div>
                        @endif
                      </div>
                    </div>

                    <!-- {{-- Xác nhận mật khảu --}}
                      <div class="form-group ">
                          <label for="confirm_password" class="control-label col-lg-3">Xác nhận mật khẩu</label>
                          <div class="col-lg-6">
                              <input class="form-control " id="user_confirmpassword" name="user_confirmpassword" type="password">
                              @if($errors->has('user_confirmpassword'))
                              <div style="color:red">{{ $errors->first('user_confirmpassword')}}</div>
                              @endif
                          </div>
                      </div>
                      {{-- Xác nhận mật khẩu --}} -->

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Họ tên</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_hoten"  name="user_hoten" type="text">

                        @if($errors->has('user_hoten'))
                        <div style="color:red">{{ $errors->first('user_hoten')}}</div>
                        @endif
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Giới tính</label>
                      <div class="col-lg-6">
                          <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="1"> Nam
                          </label>
                          <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="0"> Nữ
                          </label>
                          @if($errors->has('user_gioitinh'))
                          <div style="color:red">{{ $errors->first('user_gioitinh')}}</div>
                          @endif
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Ngày sinh</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_ngaysinh"  name="user_ngaysinh" type="date">

                        @if($errors->has('user_ngaysinh'))
                        <div style="color:red">{{ $errors->first('user_ngaysinh')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Địa chỉ</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_diachi"  name="user_diachi" type="text">

                        @if($errors->has('user_diachi'))
                        <div style="color:red">{{ $errors->first('user_diachi')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Email</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_email"  name="user_email" type="text">

                        @if($errors->has('user_email'))
                        <div style="color:red">{{ $errors->first('user_email')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">SĐT</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="user_sdt"  name="user_sdt" type="number">

                        @if($errors->has('user_sdt'))
                        <div style="color:red">{{ $errors->first('user_sdt')}}</div>
                        @endif
                      </div>
                    </div>

                    {{-- Quyền --}}

                    <div class="form-group">
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Quyền</label>
                      <div class="col-lg-6">
                          <label class="radio-inline">
                              <input type="radio" id="user_quyen" name="user_quyen" value="1"> Bình Thường
                          </label>
                          <label class="radio-inline">
                              <input type="radio" id="user_quyen" name="user_quyen" value="0"> Admin
                          </label>
                          @if($errors->has('user_quyen'))
                          <div style="color:red">{{ $errors->first('user_quyen')}}</div>
                          @endif
                        </div>

                    </div>
                    {{-- Quyền --}}

                    <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('User_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
                          </div>
                      </div>
                </form>
        </section>
@endsection


@section('script')
<script>
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formDemo1").validate({
        rules: {
          user_username: {
                required: true,
                minlength: 8,
                maxlength: 50
            },
            user_password: {
              required: true,
              minlength: 5
            },
            // user_confirmpassword:{
            //   required: true,
            //   equalTo: "#user_password"
            // },
            user_hoten: "required",
            user_gioitinh: "required",
            user_ngaysinh: "required",
            user_diachi: "required",
            user_email: {
              required: true,
              email: true
            },
            user_sdt: {
              required: true,
              digits:true,
              minlength: 10,
              maxlength: 11
            },
            user_quyen: "required",
        messages: {
          user_username: {
                required: "Vui lòng nhập Username",
                minlength: "Username phải có ít nhất 8 ký tự",
                maxlength: "Username không được vượt quá 50 ký tự"
            },
            user_password: {
              required: "Vui lòng nhập mật khẩu",
              minlength: "Mật khẩu quá ngắn"
            },
            // user_confirmpassword:{
            //   required: "Vui lòng nhập lại mật khẩu",
            //   equalTo: "Mật khẩu không khớp"
            // },
            user_hoten: "Vui lòng nhập tên Nhân Viên",
            user_gioitinh: "Vui lòng chọn giới tính",
            user_ngaysinh: "Vui lòng nhập ngày sinh",
            user_diachi: "Vui lòng nhập địa chỉ",
            cdv_email: {
              required: "Vui lòng nhập Email",
              email: "Email sai định dạng"
            },
            user_sdt: {
              required: "Vui lòng nhập SĐT",
              digits: "SĐT không được âm",
              minlength: "SĐT phải có 10 hoặc 11 số",
              maxlength: "SĐT phải có 10 hoặc 11 số",
            },
            user_quyen: "Vui lòng chọn quyền",

        }
    });


    </script>

@endsection

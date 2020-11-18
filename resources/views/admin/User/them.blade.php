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
              Thêm Nhân Viên
          </header>
          <div class="panel-body">
            <div class="form" >
            <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('NhanVien_XLThem')}}" novalidate="novalidate">
            @csrf
            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tên tài khoản</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_username"  name="nv_username" type="text">

                        @if($errors->has('nv_username'))
                        <div style="color:red">{{ $errors->first('nv_username')}}</div>
                        @endif
                      </div>
                    </div>
             <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Mật khẩu</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_password"  name="nv_password" type="password">

                        @if($errors->has('nv_password'))
                        <div style="color:red">{{ $errors->first('nv_password')}}</div>
                        @endif
                      </div>
                    </div>

                    {{-- Xác nhận mật khảu --}}
                      <div class="form-group ">
                          <label for="confirm_password" class="control-label col-lg-3">Xác nhận mật khẩu</label>
                          <div class="col-lg-6">
                              <input class="form-control " id="nv_confirmpassword" name="nv_confirmpassword" type="password">
                              @if($errors->has('nv_confirmpassword'))
                              <div style="color:red">{{ $errors->first('nv_confirmpassword')}}</div>
                              @endif
                          </div>
                      </div>
                      {{-- Xác nhận mật khẩu --}}

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Họ tên</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_hoten"  name="nv_hoten" type="text">

                        @if($errors->has('nv_hoten'))
                        <div style="color:red">{{ $errors->first('nv_hoten')}}</div>
                        @endif
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Giới tính</label>
                      <div class="col-lg-6">
                          <label class="radio-inline">
                              <input type="radio" id="nv_gioitinh" name="nv_gioitinh" value="1"> Nam
                          </label>
                          <label class="radio-inline">
                              <input type="radio" id="nv_gioitinh" name="nv_gioitinh" value="0"> Nữ
                          </label>
                          @if($errors->has('nv_gioitinh'))
                          <div style="color:red">{{ $errors->first('nv_gioitinh')}}</div>
                          @endif
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Ngày sinh</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_ngaysinh"  name="nv_ngaysinh" type="date">

                        @if($errors->has('nv_ngaysinh'))
                        <div style="color:red">{{ $errors->first('nv_ngaysinh')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Địa chỉ</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_diachi"  name="nv_diachi" type="text">

                        @if($errors->has('nv_diachi'))
                        <div style="color:red">{{ $errors->first('nv_diachi')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">SĐT</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="nv_sdt"  name="nv_sdt" type="number">

                        @if($errors->has('nv_sdt'))
                        <div style="color:red">{{ $errors->first('nv_sdt')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('NhanVien_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
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
          nv_username: {
                required: true,
                minlength: 8,
                maxlength: 50
            },
            nv_password: {
              required: true,
              minlength: 5
            },
            nv_confirmpassword:{
              required: true,
              equalTo: "#nv_password"
            },
            nv_hoten: "required",
            nv_gioitinh: "required",
            nv_ngaysinh: "required",
            nv_diachi: "required",
            nv_sdt: {
              required: true,
              digits:true,
              minlength: 10,
              maxlength: 11
            },
        messages: {
          nv_username: {
                required: "Vui lòng nhập Username",
                minlength: "Username phải có ít nhất 8 ký tự",
                maxlength: "Username không được vượt quá 50 ký tự"
            },
            nv_password: {
              required: "Vui lòng nhập mật khẩu",
              minlength: "Mật khẩu quá ngắn"
            },
            nv_confirmpassword:{
              required: "Vui lòng nhập lại mật khẩu",
              equalTo: "Mật khẩu không khớp"
            },
            nv_hoten: "Vui lòng nhập tên Nhân Viên",
            nv_gioitinh: "Vui lòng chọn giới tính",
            nv_ngaysinh: "Vui lòng nhập ngày sinh",
            nv_diachi: "Vui lòng nhập địa chỉ",
            cdv_sdt: {
              required: "Vui lòng nhập SĐT",
              digits: "SĐT không được âm",
              minlength: "SĐT phải có 10 hoặc 11 số",
              maxlength: "SĐT phải có 10 hoặc 11 số"
            }
        }
    });


    </script>

@endsection

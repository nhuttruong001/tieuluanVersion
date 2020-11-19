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
          <header class="panel-heading"  id="user_id">
              Thông Tin User : {{$User->user_hoten}}
          </header>
          <div class="panel-body">

              <div class="form" >
              <form class="cmxform form-horizontal"method="post" action="{{route('User_XLSua',['id'=>$User->user_id])}}" enctype="multipart/form-data" id="formDemo1" novalidate="novalidate">
                @csrf

                {{-- username --}}
                
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Tên tài khoản</label>
                      <div class="col-lg-6">
                          <input class=" form-control"  value="{{$User->user_username}}" name="user_username" type="text" id="user_username">

                        @if($errors->has('user_username'))
                        <div style="color:red">{{ $errors->first('user_username')}}</div>
                        @endif
                      </div>
                    </div>
                  {{--username --}}

                  {{-- hoten--}}
                
                <div class="form-group " >
                  <label for="firstname" class="control-label col-lg-3"> Họ tên</label>
                  <div class="col-lg-6">
                      <input class=" form-control"  value="{{$User->user_hoten}}" name="user_hoten" type="text" id="user_hoten">

                    @if($errors->has('user_hoten'))
                    <div style="color:red">{{ $errors->first('user_hoten')}}</div>
                    @endif
                  </div>
                </div>

              {{--hoten--}}

                  <!-- {{-- password--}}
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Mật khẩu</label>
                      <div class="col-lg-6">

                      <input class=" form-control" id="user_password" value="{{$User->user_password}}" name="user_password" type="password" disabled="">
                      @if($errors->has('user_password'))
                          <div style="color:red">{{ $errors->first('user_password')}}</div>
                          @endif
                        </div>
                    </div>
                  {{-- password --}}

                  {{-- Xác nhận mật khẩu --}}
                      <div class="form-group ">
                          <label for="confirm_password" class="control-label col-lg-3">Xác nhận mật khẩu</label>
                          <div class="col-lg-6">
                              <input class="form-control " id="user_confirmpassword" name="user_confirmpassword" type="password" disabled="">
                              @if($errors->has('user_confirmpassword'))
                              <div style="color:red">{{ $errors->first('user_confirmpassword')}}</div>
                              @endif
                          </div>
                      </div>
                      {{-- Xác nhận mật khẩu --}}

 -->


                  {{-- Giới Tính --}}

                    <div class="form-group" >
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Giới tính</label>
                      <div class="col-lg-6">
                          <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="1" @if($User->user_gioitinh == 1)
                              checked
                             @endif> Nam
                          </label>
                          <label class="radio-inline">
                              <input type="radio" id="user_gioitinh" name="user_gioitinh" value="0"  @if($User->user_gioitinh == 0)
                              checked
                             @endif> Nữ
                          </label>
                          @if($errors->has('user_gioitinh'))
                          <div style="color:red">{{ $errors->first('user_gioitinh')}}</div>
                          @endif

                      </div>
                    </div>
                  {{-- Giới Tính --}}

                  {{-- Ngay sinh --}}
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Ngày sinh</label>
                      <div class="col-lg-6">
                      <input class=" form-control" id="user_ngaysinh" value="{{$User->user_ngaysinh}}" name="user_ngaysinh" type="date">
                          @if($errors->has('user_ngaysinh'))
                          <div style="color:red">{{ $errors->first('user_ngaysinh')}}</div>
                          @endif
                        </div>
                    </div>

                  {{-- Ngay sinh --}}

                

                  {{-- Địa Chỉ --}}
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Địa Chỉ</label>
                      <div class="col-lg-6">
                      <input class=" form-control" id="user_diachi" value="{{$User->user_diachi}}" name="user_diachi" type="text">
                          @if($errors->has('user_diachi'))
                          <div style="color:red">{{ $errors->first('user_diachi')}}</div>
                          @endif
                        </div>
                    </div>

                  {{-- Địa Chỉ --}}

                  {{-- Số điện thoại --}}
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">SĐT</label>
                      <div class="col-lg-6">
                      <input class=" form-control" id="user_sdt" value="{{$User->user_sdt}}" name="user_sdt" type="text">
                          @if($errors->has('user_sdt'))
                          <div style="color:red">{{ $errors->first('user_sdt')}}</div>
                          @endif
                      </div>
                    </div>
                  {{-- Số điện thoại --}}


                      <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit" onclick="return confirm('Bạn có chắc muốn cập nhật không?');">Cập nhật</button>
                          <a href="{{route('User_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked")){
                $(".password").removeAttr('disabled');
            }else{
                $(".password").attr('disabled','');
            }
        });
    });
    $("#formDemo1").validate({
        rules: {
            dv_id: "required",
            cv_id: "required",
            luser_id: "required",
            // mht_id: "required",
            cdv_ten: "required",
            cdv_ngaysinh: "required",
            cdv_gioitinh: "required",
            cdv_cmnd: "required",
            cdv_nguyenquan: "required",
            cdv_diachi: "required",
            cdv_sdt: "required",
            cdv_email: "required",
            cdv_dantoc: "required",
            cdv_trinhdo: "required",
            cdv_tongiao: "required",
            cdv_ngaythuviec: "required",
            cdv_ngayvaonganh: "required",
            // cdv_trangthai: "required",

            cdv_username: "required",
            cdv_password: "required",
            cdv_confirmpassword: "required",
            cdv_quyen: "required",
        },
        messages: {
            dv_id: "Vui lòng chọn đơn vị",
            cv_id: "Vui lòng chọn chức vụ",
            luser_id: "Vui lòng chọn loại nhân viên",
            // mht_id: "Vui lòng nhâp",
            cdv_ten: "Vui lòng nhập tên công đoàn viên",
            cdv_ngaysinh: "Vui lòng nhập ngày sinh",
            cdv_gioitinh: "Vui lòng chọn giới tính",
            cdv_cmnd: "Vui lòng nhập CMND",
            cdv_nguyenquan: "Vui lòng chọn nguyên quán",
            cdv_diachi: "Vui lòng nhập địa chỉ",
            cdv_sdt: "Vui lòng nhập SĐT",
            cdv_email: "Vui lòng nhập Email",
            cdv_dantoc: "Vui lòng nhập dân tộc",
            cdv_trinhdo: "Vui lòng nhập trình độ",
            cdv_tongiao: "Vui lòng nhập tôn giáo",
            cdv_ngaythuviec: "Vui lòng nhập ngày thử việc",
            cdv_ngayvaonganh: "Vui lòng nhập ngày vào nghành",
            // cdv_trangthai: "",

            cdv_username: "Vui lòng nhập username",
            cdv_password: "Vui lòng nhập password",
            cdv_confirmpassword: "Vui lòng nhập lại password",
            cdv_quyen: "Vui lòng chọn quyền",
        }
    });
</script>
@endsection

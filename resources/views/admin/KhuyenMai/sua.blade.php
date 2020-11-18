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
          <header class="panel-heading"  id="nv_id">
              Sửa Khuyến Mãi 
          </header>
          <div class="panel-body">

              <div class="form" >
              <form class="cmxform form-horizontal"method="post" action="{{route('KhuyenMai_XLSua',['id'=>$KhuyenMai->km_id])}}" enctype="multipart/form-data" id="formDemo1" novalidate="novalidate">
                @csrf

                {{-- ngaybd --}}
                
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Ngày bắt đầu</label>
                      <div class="col-lg-6">
                          <input class=" form-control"  value="{{$KhuyenMai->km_ngaybd}}" name="km_ngaybd" type="date" id="km_ngaybd">

                        @if($errors->has('km_ngaybd'))
                        <div style="color:red">{{ $errors->first('km_ngaybd')}}</div>
                        @endif
                      </div>
                    </div>
                  {{--ngaybd--}}

                  <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Ngày kết thúc</label>
                      <div class="col-lg-6">
                          <input class=" form-control"  value="{{$KhuyenMai->km_ngaykt}}" name="km_ngaykt" type="date" id="km_ngaykt">

                        @if($errors->has('km_ngaykt'))
                        <div style="color:red">{{ $errors->first('km_ngaykt')}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Phần trăm</label>
                      <div class="col-lg-6">
                          <input class=" form-control"  value="{{$KhuyenMai->km_phantram}}" name="km_phantram" type="number" id="km_phantram">

                        @if($errors->has('km_phantram'))
                        <div style="color:red">{{ $errors->first('km_phantram')}}</div>
                        @endif
                      </div>
                    </div>

    


                      <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit" onclick="return confirm('Bạn có chắc muốn cập nhật không?');">Cập nhật</button>
                          <a href="{{route('KhuyenMai_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
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
   
</script>
@endsection

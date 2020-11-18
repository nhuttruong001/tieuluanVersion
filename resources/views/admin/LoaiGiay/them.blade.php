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
              Thêm Loại Giày
          </header>
          <div class="panel-body">
            <div class="form" >
            <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('LoaiGiay_XLThem')}}" novalidate="novalidate">
            @csrf
            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tên loại giày</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="loai_ten"  name="loai_ten" type="text">

                        @if($errors->has('loai_ten'))
                        <div style="color:red">{{ $errors->first('loai_ten')}}</div>
                        @endif
                      </div>
                    </div>
            
                    <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('LoaiGiay_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
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
          
            loai_ten: "required",
          
            },
        messages: {
          
            loai_ten: "Vui lòng nhập tên loại giày",
           
        }
    });


    </script>

@endsection

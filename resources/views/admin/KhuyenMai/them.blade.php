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
              Thêm Khuyến mãi
          </header>
          <div class="panel-body">
            <div class="form" >
            <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('KhuyenMai_XLThem')}}" novalidate="novalidate">
            @csrf
            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Ngày bắt đầu</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="km_ngaybd"  name="km_ngaybd" type="date">

                        @if($errors->has('km_ngaybd'))
                        <div style="color:red">{{ $errors->first('km_ngaybd')}}</div>
                        @endif
                      </div>
                    </div>

             <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Ngày kết thúc</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="km_ngaykt"  name="km_ngaykt" type="date">

                        @if($errors->has('km_ngaykt'))
                        <div style="color:red">{{ $errors->first('km_ngaykt')}}</div>
                        @endif
                      </div>
                    </div>

            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Phần trăm</label>
                      <div class="col-lg-6">
                          <input class=" form-control" step="5" min="5" max="80" id="km_phantram"  name="km_phantram" type="number">

                        @if($errors->has('km_phantram'))
                        <div style="color:red">{{ $errors->first('km_phantram')}}</div>
                        @endif
                      </div>
                    </div>
            
                    <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('KhuyenMai_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
                          </div>
                      </div>
                </form>
        </section>
@endsection


@section('script')
<script>
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    // $("#formDemo1").validate({
    //     rules: {
          
    //         km_ngaybd: "required",
    //         km_ngaykt: "required",
    //         km_phantram: "required"
          

    //         },
    //     messages: {
          
    //         km_ngaybd: "Vui lòng chọn ngày bắt đầu",
    //         km_ngaykt: "Vui lòng chọn ngày kết thúc",
    //         km_phantram: "Vui lòng nhập phần trăm khuyến mãi"
           
    //     }
    // });


    </script>

@endsection

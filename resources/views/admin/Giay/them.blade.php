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
              Thêm Giày

          </header>
          <div class="panel-body">

              <div class="form" >

              <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('Giay_XLThem')}}" novalidate="novalidate">
                @csrf

                {{-- Laoi --}}
              <div class="form-group">
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Loại Giày</label>
                  <div class="col-lg-6">
                    <select required  class="form-control m-bot15"  name="loai_id" id="loai_id">
                      <option value="">Chọn loại giày...</option>
                      @foreach ($LoaiGiay as $loai)
                      @if ($loai->loai_trangthai == 1)
                      <option value='{{$loai->loai_id}}'>{{$loai->loai_ten}}</option>
                      @endif
                      @endforeach
                    </select>
                    @if($errors->has('loai_id'))
                    <div style="color:red">{{ $errors->first('loai_id')}}</div>
                    @endif
                  </div>
                </div>
                {{-- loai --}}


                {{-- km --}}
                <div class="form-group">
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Khuyến Mãi</label>
                  <div class="col-lg-6">
                    <select class="form-control m-bot15" name="km_id" id="km_id">
                      <option value="">Chọn khuyến mãi...</option>
                      @foreach ($KhuyenMai as $km)
                      @if ($km->km_trangthai==1)

                      <option value='{{$km->km_id}}'>{{$km->km_phantram}}</option>
                      @endif
                      @endforeach
                    </select>
                    @if($errors->has('km_id'))
                    <div style="color:red">{{ $errors->first('km_id')}}</div>
                    @endif
                  </div>
                </div>
                {{--km --}}

                {{-- ncc --}}
                <div class="form-group">
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Nhà Cung Cấp</label>
                  <div class="col-lg-6">
                    <select class="form-control m-bot15"  name="ncc_id" id="ncc_id">
                      <option value="">Chọn nhà cung cấp...</option>
                      @foreach ($NhaCungCap as $ncc)
                      @if ($ncc->ncc_trangthai==1)

                      <option value='{{$ncc->ncc_id}}'>{{$ncc->ncc_ten}}</option>
                      @endif
                      @endforeach
                    </select>
                    @if($errors->has('ncc_id'))
                    <div style="color:red">{{ $errors->first('ncc_id')}}</div>
                    @endif
                  </div>
                </div>
                {{-- ncc --}}



                {{-- giay ten --}}

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tên Giày</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="giay_ten"  name="giay_ten" type="text">

                        @if($errors->has('giay_ten'))
                        <div style="color:red">{{ $errors->first('giay_ten')}}</div>
                        @endif
                      </div>
                    </div>
                  {{-- giay ten --}}

                  {{-- Giay gia --}}
                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Giá</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="giay_gia"  name="giay_gia" type="number">
                          @if($errors->has('giay_gia'))
                          <div style="color:red">{{ $errors->first('giay_gia')}}</div>
                          @endif
                        </div>
                    </div>
                  {{-- giay gia --}}

                  {{-- ảnh đại diện --}}
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-3">Ảnh Đại Diện</label>
                    <div class="col-lg-6">
                        <input class="form-control " id="giay_hinhanh" name="giay_hinhanh" type="file" accept="image/*">

                        @if($errors->has('giay_hinhanh'))
                        <div style="color:red">{{ $errors->first('giay_hinhanh')}}</div>
                        @endif
                      </div>
                  </div>
                  {{-- ảnh đại diện --}}


                

                  {{-- mo ta --}}

                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Mô Tả</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="giay_mota"  name="giay_mota" type="text">
                          @if($errors->has('giay_mota'))
                          <div style="color:red">{{ $errors->first('giay_mota')}}</div>
                          @endif
                        </div>
                    </div>
                  {{-- mota --}}



                      <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('Giay_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
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
<script>
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formDemo1").validate({
        rules: {
            loai_id: "required",
            km_id: "required",
            ncc_id: "required",
            // mht_id: "required",
            giay_ten: "required",
            giay_gia: "required",
            giay_hinhanh: "required",
            giay_mota: "required"
           
        },
        messages: {
            loai_id: "Vui lòng chọn loại giày!",
            km_id: "Vui lòng chọn khuyến mãi",
            ncc_id: "Vui lòng chọn nhà cung cấp",
            // mht_id: "required",
            giay_ten: "Vui lòng nhập tên",
            giay_gia: "Vui lòng nhập giá",
            giay_hinhanh: "Vui lòng chọn hình ảnh",
            giay_mota: "Vui lòng nhập mô tả"
        }
    });


    </script>

@endsection

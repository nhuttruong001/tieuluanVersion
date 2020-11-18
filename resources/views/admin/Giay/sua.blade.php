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

              <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('Giay_XLSua',['id'=>$Giay->giay_id])}}" novalidate="novalidate">
                @csrf

                {{--loai --}}
              <div class="form-group">
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Loại Giày</label>
                  <div class="col-lg-6">
                    <select required  class="form-control m-bot15" value="{{$Giay->loaigiay->loai_ten}}" name="loai_id" id="loai_id" >
                      <option value="">Chọn loại giày...</option>
                      @foreach ($LoaiGiay as $loai)
                    <option
                       @if ($Giay->loai_id  == $loai->loai_id)
                        {{"selected"}}
                      @endif
                    value='{{ $loai->loai_id}}'>{{ $loai->loai_ten}}</option>
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
                    <option
                       @if ($Giay->km_id  == $km->km_id)
                        {{"selected"}}
                      @endif
                    value='{{ $km->km_id}}'>{{ $km->km_phantram}}</option>
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
                    <option
                       @if ($Giay->ncc_id  == $ncc->ncc_id)
                        {{"selected"}}
                      @endif
                    value='{{ $ncc->ncc_id}}'>{{ $ncc->ncc_ten}}</option>
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
                          <input class=" form-control" value="{{$Giay->giay_ten}}" id="giay_ten"  name="giay_ten" type="text">

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
                          <input class=" form-control" value="{{$Giay->giay_gia}}" id="giay_gia"  name="giay_gia" type="number">
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
                          <input class=" form-control" value="{{$Giay->giay_mota}}" id="giay_mota"  name="giay_mota" type="text">
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






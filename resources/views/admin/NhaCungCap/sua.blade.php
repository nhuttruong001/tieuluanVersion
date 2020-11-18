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
              Thông Tin Nhà Cung Cấp : {{$NhaCungCap->ncc_ten}}
          </header>
          <div class="panel-body">

              <div class="form" >
              <form class="cmxform form-horizontal"method="post" action="{{route('NhaCungCap_XLSua',['id'=>$NhaCungCap->ncc_id])}}" enctype="multipart/form-data" id="formDemo1" novalidate="novalidate">
                @csrf

                {{-- tenncc --}}
                
                    <div class="form-group " >
                      <label for="firstname" class="control-label col-lg-3">Tên nhà cung cấp</label>
                      <div class="col-lg-6">
                          <input class=" form-control"  value="{{$NhaCungCap->ncc_ten}}" name="ncc_ten" type="text" id="ncc_ten">

                        @if($errors->has('ncc_ten'))
                        <div style="color:red">{{ $errors->first('ncc_ten')}}</div>
                        @endif
                      </div>
                    </div>
                  {{--tenncc--}}

    


                      <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit" onclick="return confirm('Bạn có chắc muốn cập nhật không?');">Cập nhật</button>
                          <a href="{{route('NhaCungCap_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
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

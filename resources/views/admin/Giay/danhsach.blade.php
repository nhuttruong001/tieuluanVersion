@extends('admin.layout.master')
@section('admin_content')
<!--main content start-->

  @if(Session::has('alert-1'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Thêm thành công');
      };
</script>
  @endsection
  @endif
  @if(Session::has('alert-2'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Sửa thành công');
      };
</script>
  @endsection
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
  @endif
  @if(Session::has('alert-3'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Xóa thành công');
      };
</script>
  @endsection
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
  @endif

<div class="panel panel-default">
  {{-- <div id = demo> --}}
    <div class="panel-heading">
      Danh Sách Giày
    </div>
    @extends('admin.layout.partials.error-message')
    <div class="panel-body">
        <div class="position-left">
        <div class="form-group">
                <input type="text" class="form-control" id="tukhoa" name="tukhoa" style="width:500px;">
            </div>
        <form  id="content-form" class="form-inline" role="form" action="" method="get">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" title="Tìm" id="search"><i class=" glyphicon glyphicon-search" style="color: aliceblue"></i></button>
                  <a href="{{route('Giay_Them')}}"><button title="Thêm" type="button"  class="btn btn-primary"><i class="glyphicon glyphicon-plus" style="color: aliceblue"></i></button></a>
        </form>
      </div>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">STT</th>
            <th>Loại mã</th>
            <th>Nhà cung cấp mã</th>
            <th>Tên giày</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($Giay as $key => $giay)
            @if (($giay->giay_trangthai == 1) && ($giay->loaigiay->loai_trangthai == 1))
                <tr data-expanded="true">
                    <td>{{$key + 1}}</td>
                    <td>{{$giay->LoaiGiay->loai_ten}}</td>
                    <td>{{$giay->Nhacungcap->ncc_ten}}</td>
                    <td>{{$giay->giay_ten}}</td>
                    <td>{{$giay->giay_gia}}</td>
                    <td>{{$giay->giay_hinhanh}}</td>
                    <td>{{$giay->giay_mota}}</td>
                   
                   
                <!-- <td><a  title="Chi tiết" class="glyphicon glyphicon-eye-open" href="#"></a></td> -->
                <td>
                  <i class='fas fa-pencil-alt'></i><a  title="Sửa" class="glyphicon glyphicon-edit" href="{{route('Giay_Sua',['id'=>$giay->giay_id])}}"></a>
                  <i class='fas fa-trash-alt'></i><a   title="Xóa" class="glyphicon glyphicon-trash" href="{{route('Giay_Xoa',['id'=>$giay->giay_id])}}" onclick="return confirm('Bạn có chắc muốn xóa không?');"></a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
      <div class="panel-body">
          <div class="form-group">
            <center>{!! $Giay->links() !!}</center>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
    function timkiem(){
      document.getElementById('search').click();
    }
</script>
@endsection

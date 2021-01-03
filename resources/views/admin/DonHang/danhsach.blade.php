@extends('admin.layout.master')
@section('admin_content')
<!--main content start-->

  @if(Session::has('alert-4'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Cập nhật trạng thái thành công!');
      };
</script>
  @endsection
  @if(Session::has('alert-2'))
  @section('script')
  <script>
    window.onload =  function()
      {
      alert('Cập nhật thành công');
      };
</script>
  @endsection
  @endif
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
      Danh Sách Đơn Hàng
    </div>
    @extends('admin.layout.partials.error-message')
    <div class="panel-body">
        <div class="position-left">

      <form class="form-inline" role="form" action="" method="get">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" id="tukhoa" placeholder="từ khóa tìm kiếm" name="tukhoa" style="width: 550px;">
            </div>
            <button type="submit" class="btn btn-primary" title="Tìm kiếm" id="search"><i class=" glyphicon glyphicon-search" style="color: aliceblue"></i></button>
            <!-- <a href=""><button title="Thêm" type="button"  class="btn btn-primary"><i class="glyphicon glyphicon-plus" style="color: aliceblue"></i></button></a> -->
        </form>
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
            <th>Khách hàng</th>
            <!-- <th>Mua các sản phẩm</th>
            <th>Số lượng</th> -->
            <th>Ngày lập</th>
            <th>Trạng thái</th>
            <th>Hình thức thanh toán</th>
          </tr>
        </thead>
        
        <tbody>

            @foreach ($HoaDon as $key => $hd)
            @if (($hd->hd_trangthai == 1))
                <tr data-expanded="true">
                    <td>{{$key + 1}}</td>
        
                    <td>{{$hd->User->user_hoten}}</td>
                    <td>{{$hd->hd_ngaylap}}</td>
                    @if (($hd->hd_trangthaidh == 0))
                    <td><a href="{{route('xuly_trangthai',['id'=>$hd->hd_id])}}"> <button style="width:58%"> Đang xử lý</button> </a></td>
                    @else
                    <td><button style="width:58%">Đã hoàn thành</button></td>
                    @endif

                    @if (($hd->hd_hinhthuctt == 0))
                    <td> Sau khi nhận hàng</td>
                    @else
                    <td>Paypal</td>
                    @endif

                <td><a  title="Chi tiết" class="glyphicon glyphicon-eye-open" href="{{route('TrangThai_Sua',['id'=>$hd->hd_id])}}"></a></td>
                <td>
                  <!-- <i class='fas fa-pencil-alt'></i><a  title="Sửa" class="glyphicon glyphicon-edit" href=""></a> -->
                  <a   title="Xóa" class="glyphicon glyphicon-trash" href="{{route('DonHang_Xoa',['id'=>$hd->hd_id])}}" onclick="return confirm('Bạn có chắc muốn xóa không?');"></a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
      <div class="panel-body">
          <div class="form-group">
            <center>{!! $HoaDon->links() !!}</center>
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

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
      Danh Sách Nhân Viên
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
                  <a href=""><button title="Thêm" type="button"  class="btn btn-primary"><i class="glyphicon glyphicon-plus" style="color: aliceblue"></i></button></a>
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
            <th>Tài khoản</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Sđt</th>
            <th>Quyền</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($User as $key => $user)
            @if ($user->user_trangthai == 1)
                <tr data-expanded="true">
                    <td>{{$key + 1}}</td>
                    <td>{{$user->user_username}}</td>
                    <td>{{$user->user_hoten}}</td>
                    @if($user->user_gioitinh == 1 )
                    <td>Nam</td>
                    @if($user->user_gioitinh == 0)
                    <td>Nữ</td>
                    @endif
                    @endif
                    <td>{{$user->user_ngaysinh}}</td>
                    <td>{{$user->user_diachi}}</td>
                    <td>{{$user->user_sdt}}</td>
                    @if($user->user_quyen == 1 )
                    <td>Khách Hàng</td>
                  @else
                    <td>Admin</td>
                    @endif
                <!-- <td><a  title="Chi tiết" class="glyphicon glyphicon-eye-open" href="#"></a></td> -->
                <td>
                  <i class='fas fa-pencil-alt'></i><a  title="Sửa" class="glyphicon glyphicon-edit" href=""></a>
                  <i class='fas fa-trash-alt'></i><a   title="Xóa" class="glyphicon glyphicon-trash" href="" onclick="return confirm('Bạn có chắc muốn xóa không?');"></a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
      <div class="panel-body">
          <div class="form-group">
            <center>{!! $User->links() !!}</center>
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

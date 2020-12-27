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
      Danh Sách Nhà Cung Cấp
    </div>
    @extends('admin.layout.partials.error-message')
    <div class="panel-body">
        <div class="position-left">

      <form class="form-inline" role="form" action="{{route('NhaCungCap_Timkiem')}}" method="get">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" id="tukhoa" placeholder="từ khóa tìm kiếm" name="tukhoa" style="width: 550px;">
            </div>
            <button type="submit" class="btn btn-primary" title="Tìm kiếm" id="search"><i class=" glyphicon glyphicon-search" style="color: aliceblue"></i></button>
            <a href="{{route('NhaCungCap_Them')}}"><button title="Thêm" type="button"  class="btn btn-primary"><i class="glyphicon glyphicon-plus" style="color: aliceblue"></i></button></a>
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
            <th>Tên</th>
          
          </tr>
        </thead>
        
        <tbody>
            @foreach ($NhaCungCap as $key => $ncc)
            @if ($ncc->ncc_trangthai == 1)
                <tr data-expanded="true">
                    <td>{{$key + 1}}</td>
                    <td>{{$ncc->ncc_ten}}</td>
                   
                   
                   
                   
                <!-- <td><a  title="Chi tiết" class="glyphicon glyphicon-eye-open" href="#"></a></td> -->
                <td>
                 <a  title="Sửa" class="glyphicon glyphicon-edit" href="{{route('NhaCungCap_Sua',['id'=>$ncc->ncc_id])}}"></a>
                  <a   title="Xóa" class="glyphicon glyphicon-trash" href="{{route('NhaCungCap_Xoa',['id'=>$ncc->ncc_id])}}" onclick="return confirm('Bạn có chắc muốn xóa không?');"></a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
 
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

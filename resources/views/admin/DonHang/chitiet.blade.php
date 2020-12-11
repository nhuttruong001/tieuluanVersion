@extends('admin.layout.master')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
              Thông Tin 
          </header>
          <div class="panel-body">

              <div class="form" >
              <form class="cmxform form-horizontal" enctype="multipart/form-data" id="signupForm" method="post" action="" novalidate="novalidate">
                @csrf

               

                

                
                {{-- Họ tên --}}
                  @csrf
                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Họ Tên Khách Hàng</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="" value="" name="" type="text" disabled>

                        @if($errors->has(''))
                        <div style="color:red">{{ $errors->first('')}}</div>
                        @endif
                      </div>
                    </div>
                  {{-- Họ tên --}}

                  {{-- San pham--}}
                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Sanpham</label>
                      <div class="col-lg-6">
                      <input class=" form-control" id="" value="" name="" type="date" disabled>


                      @if($errors->has(''))
                          <div style="color:red">{{ $errors->first('')}}</div>
                          @endif
                        </div>
                    </div>
                  {{-- San pham --}}

                 

                
                  </form>
              </div>
          </div>
      </section>
  </div>
</div>
@endsection

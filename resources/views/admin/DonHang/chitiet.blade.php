@extends('admin.layout.master')
@section('admin_content')

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.line-through {
       text-decoration: line-through;
    }
</style>

<div class="row">
  <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Chi Tiết Đơn Hàng
          </header>
        

                  <div id="wrap-inner" style="margin-left:2%">
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							
							<p>
								<span class="info">Khách hàng: </span>
								{{$HoaDon->User->user_hoten}}
              </p>
              <p>
								<span class="info">Ngày sinh: </span>
                {{$HoaDon->User->user_ngaysinh}}
							</p>
							<p>
								<span class="info">Điện thoại: </span>
								{{$HoaDon->User->user_sdt}}
							</p>
							<p>
								<span class="info">Địa chỉ: </span>
                {{$HoaDon->User->user_diachi}}	</p>
							<p>
								<span class="info">Email: </span>
								{{$HoaDon->User->user_email}}
						
							</p>
						</div>						
						<div id="hoa-don" >
							<h3>Hóa đơn mua hàng</h3>	
										
							<table class="table-bordered table-responsive" id="customers" style="width:70%">
								<tr class="bold">
									<td width="20%">Tên sản phẩm</td>
									<td width="25%">Giá</td>
									<td width="15%">Số lượng</td>
									<td width="20%">Thành tiền</td>
									<td width="15%">Ngày mua</td>
                </tr>
                @foreach ($ChiTietHoaDon as $key => $cthd)
								<tr>
									<td>{{$cthd->Giay[0]->giay_ten}}</td>

								{{--km--}}
								<td>
									@if(($cthd->Giay[0]->km_id != 1))
								@php	
									$giasaukm = $cthd->Giay[0]->giay_gia - ($cthd->Giay[0]->giay_gia * $cthd->Giay[0]->KhuyenMai->km_phantram/100);
									
								@endphp
									<p class="price line-through">{{number_format($cthd->Giay[0]->giay_gia,0,',','.')}} VNĐ</p>
									<p class="price">{{number_format($giasaukm,0,',','.')}} VNĐ</p>

								@else
									<p class="price">{{number_format($cthd->Giay[0]->giay_gia,0,',','.')}} VNĐ</p>
								@endif
								</td>
								{{--km--}}

									
									<td>{{$cthd->soluong}}</td>
									@if(($cthd->Giay[0]->km_id != 1))
									<td class="price">{{number_format($giasaukm * $cthd->soluong,0,',','.')}} VNĐ</td>
									@else
									<td class="price">{{number_format($cthd->Giay[0]->giay_gia * $cthd->soluong,0,',','.')}} VNĐ</td>
									@endif
									<td>{{$cthd->HoaDon->hd_ngaylap}}</td>
								</tr>
								@if(($cthd->Giay[0]->km_id != 1))
								<?php $tong += $giasaukm * $cthd->soluong ; ?>
								@else
								<?php $tong += ($cthd->Giay[0]->giay_gia) * ($cthd->soluong) ; ?>
								@endif
									
           
				  @endforeach
				
								</tr>
							</table>
							<br>
							<td class="total-price"></td>
				  <td colspan="3"><b>Tổng tiền:</b> {{number_format($tong,0,',','.')}} VNĐ</td>
						</div>
					</div>					
            

           
                 

                  <a href="{{route('DonHang_DS')}}"><button class="btn btn-primary" type="button" style="margin-left:1235px;">Trở về</button></a>
                  </form>
                
              </div>
          </div>
      </section>
  </div>
</div>
@endsection

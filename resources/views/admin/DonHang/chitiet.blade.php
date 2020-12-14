@extends('admin.layout.master')
@section('admin_content')
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
                {{$HoaDon->User->user_diachi}}
							</p>
						</div>						
						<div id="hoa-don" >
							<h3>Hóa đơn mua hàng</h3>	
										
							<table class="table-bordered table-responsive" style="width:70%">
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
									<td class="price">{{$cthd->Giay[0]->giay_gia}} VNĐ</td>
									<td>{{$cthd->soluong}}</td>
									<td class="price">{{($cthd->Giay[0]->giay_gia) * ($cthd->soluong) }}VNĐ</td>
									<td>{{$cthd->HoaDon->hd_ngaylap}}</td>
								</tr>
	
									
           
				  @endforeach
				
								</tr>
							</table>
							<br>
							<td class="total-price"></td>
				  <td colspan="3">Tổng tiền: {{number_format(\Cart::getSubTotal(),0,',','.')}}VNĐ</td>
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

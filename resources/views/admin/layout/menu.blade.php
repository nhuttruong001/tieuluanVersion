        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a class="" href="index.html">
                        <i class="icon-sitemap"></i>
                        <span >User</span>
                    </a>
                        <ul class="sub">
                            <li><a href="{{route('User_DS')}}">Danh Sách User</a></li>
                    </ul>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span>Khuyến Mãi</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('KhuyenMai_DS')}}">Danh Sách Khuyến Mãi</a></li>
                       
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span>Nhà Cung Cấp</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('NhaCungCap_DS')}}">Danh Sách Nhà Cung Cấp</a></li>
                       
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-calendar-o"></i>
                        <span>Quản lý Loại Giày</span>
                    </a>
                    <ul class="sub">
                    <li><a href="{{route('LoaiGiay_DS')}}">Danh Sách Loại Giày</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-car"></i>
                        <span>Quản lý Giày</span>
                    </a>
                    <ul class="sub">
                    <li><a href="{{route('Giay_DS')}}">Danh Sách Giày</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- sidebar menu end-->

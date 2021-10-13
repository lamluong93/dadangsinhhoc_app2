<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="card-body py-4 px-3">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                        <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <a href="#" class="text-supersm"><i class="bi bi-person-circle"></i> Tài khoản</a>
                    </div>
                    <div class="ms-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-box-arrow-right"></i> Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-speedometer"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>
        
                <li class="sidebar-title">Đa dạng sinh học TP Hà Nội</li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Loài</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.danhmucloai') }}">Danh mục loài  </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Loài (Taxon - Phân loại học)</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Loài (Occurrence - Phát hiện loài)</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.danhluciucn') }}">Danh mục loài ưu tiên bảo vệ</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-egg-fill"></i>
                        <span>Gen</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.nhomnguongen') }}">Nhóm nguồn gen</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.loainguongen') }}">Loại nguồn gen</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.nguongen') }}">Gen</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.luutrunguongen') }}">Lưu trữ gen</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.trithuctruyenthong') }}">Tri thức truyền thống</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('dulieudadangsinhhoc.bodulieu') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Bộ dữ liệu</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('dulieudadangsinhhoc.hesinhthai') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Hệ sinh thái  </span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Khu bảo tồn</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.khubaoton') }}">Khu bảo tồn</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.otieuchuan') }}">Ô tiêu chuẩn</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudadangsinhhoc.cosobaotonnguongen') }}">Cơ sở bảo tồn</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Dữ liệu công tác bảo tồn</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('dadangsinhhochanoi.kinhphi') }}">Kinh phí</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dadangsinhhochanoi.hoptacquocte') }}">Hợp tác quốc tế</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dadangsinhhochanoi.mohinhsangkien') }}">Mô hình sáng kiến</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dadangsinhhochanoi.chuongtrinhdetaiduan') }}">Chương trình, đề tài, dự án kiểm soát SVNLXH</a>
                        </li>
                        <li class="submenu-item">
                            <li class="sidebar-item has-sub">
                                <a href="#" class='sidebar-link'>
                                    {{-- <i class="bi bi-hdd-rack-fill"></i> --}}
                                    <span>Áp lực lên ĐDSH</span>
                                </a>
                                <ul class="submenu">
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.sinhvatngoailaixamhai') }}">Sinh vật ngoại lai xâm hại</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.tangdansovungdem') }}">Tăng dân số vùng đệm</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.chuyenmucdichsudungdat') }}">Chuyển đổi mục đích sử dụng đất</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.khaithacquamucchophep') }}">Khai thác quá mức cho phép</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.onhiemmoitruong') }}">Ô nhiễm môi trường, cháy rừng, biến đổi khí hậu</a>
                                    </li>
                                    <li class="submenu-item">
                                        <li class="sidebar-item has-sub">
                                            <a href="#" class='sidebar-link'>
                                                {{-- <i class="bi bi-hdd-rack-fill"></i> --}}
                                                <span>Quan trắc môi trường</span>
                                            </a>
                                            <ul class="submenu">
                                                <li class="submenu-item">
                                                    <a href="{{ route('dadangsinhhochanoi.loaihinhquantrac') }}">Loại hình quan trắc</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a href="{{ route('dadangsinhhochanoi.thongsoquantrac') }}">Thông số quan trắc</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a href="{{ route('dadangsinhhochanoi.diemquantrac') }}">Điểm quan trắc</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a href="{{ route('dadangsinhhochanoi.ketquaquantrac') }}">Kết quả quan trắc</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.viphamxuphat') }}">Vi phạm xử phạt hành chính và hình sự</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.hoatdongdulich') }}">Hoạt động du lịch</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.chithi') }}">Danh mục chỉ thị</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.thongso') }}">Danh mục thông số</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('dadangsinhhochanoi.baocaoapluclenddsh') }}">Báo cáo áp lực lên ĐDSH</a>
                                    </li>
                                </ul>
                            </li>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Dữ liệu danh mục</li>
        
                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Địa giới hành chính</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('dulieudanhmuc.quanhuyen') }}">Thông tin quận, huyện, thị xã</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudanhmuc.xaphuong') }}">Thông tin xã, phường, thị trấn</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('dulieudanhmuc.tochuc') }}">Thông tin tổ chức</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('dulieudanhmuc.tudien') }}" class='sidebar-link'>
                        <i class="bi bi-bookmarks-fill"></i>
                        <span>Từ điển (Look up)</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('dulieudanhmuc.nguoidung') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Quản lý người dùng</span>
                    </a>
                </li>

                <li class="sidebar-title">Thống kê, báo cáo,...</li>
        
                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Mục 1</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="#">Mục con 1</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Mục con 2</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Mục con 3</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Mục 2</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="#">Mục con 1</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Mục con 2</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Mục con 3</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-sliders"></i>
                        <span>Cài đặt</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Site Metas -->

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('front/images/apple-touch-icon.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('front/style.css') }}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ asset('front/css/versions.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/vendor.css') }}">

<!-- Modernizer for Portfolio -->
<script src="{{ asset('front/js/modernizer.js') }}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal login-->
	{{-- @include('web.layout.modal-login') --}}

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('web.home') }}">
					<img src="{{ asset('front/images/logo-hosting.png') }}" alt="logo" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ route('web.home') }}">Trang chủ</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tra cứu</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="hosting.html">Bộ dữ liệu</a>
								<a class="dropdown-item" href="hosting.html">Cơ quan công bố</a>
								<a class="dropdown-item" href="{{ route('protectedarea') }}">Khu bảo tồn</a>
								<a class="dropdown-item" href="{{ route('search-species') }}">Loài</a>
								<a class="dropdown-item" href="hosting.html">Phân bố</a>
								<a class="dropdown-item" href="hosting.html">Phân loại học</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Công cụ</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="hosting.html">GBIF API</a>
								<a class="dropdown-item" href="hosting.html">NBDS API</a>
							</div>
						</li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Route::has('login'))
						@auth
						<li>
							<a href="{{ url('/dashboard') }}" class="hover-btn-new log"><span><i class="fa fa-lock" style="color: #15b848;"></i> &nbsp;{{ Auth::user()->name }}</span></a>
						</li>
						@else
						<li>
							<a class="hover-btn-new log" href="{{ route('login') }}" class="text-sm text-gray-700 underline"><span><i class="fa fa-lock" style="color: #d12c11;"></i> &nbsp;Đăng nhập</span></a>
						</li>
						@endauth
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="sidebar" class="active">
		<div class="sidebar-wrapper active">

			<div class="site-drawer__content fill-height col-md-3" style="padding: 0px;">
				<div class="site-drawer__header">
					<div  class="site-drawer__bar">
						<a  tooltip="Everything" class="site-drawer__bar__icon inherit">
							<i class="fa fa-angle-left"></i>
						</a> 
						<div class="site-drawer__bar__title">
							<a  href="" class="inherit">
								<span >Loài</span>
							</a>
						</div> 
						<a class="discreet inherit site-drawer__bar__icon" style="cursor: pointer;"><!---->
							<i class="fa fa-trash"></i>
						</a>

					</div>
				</div> 
				<div  class="site-drawer__transclude">
					<div class="site-drawer__section" style="padding-bottom: 0px;">
						<div class="search-bar search-bar filter-group">
							<div  class="search-bar__term" style="top: 50%; transform: translateY(-50%);">
								<input  type="text" autocomplete="off" placeholder="Tìm kiếm" class="fit-suggestions"> 
								<a  class="search-bar__search" style="cursor: pointer;">
									<span class="sr-only">Tìm kiếm</span>
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>
						<div  class="filter-group ng-isolate-scope">
							<div class="filter-group rtl-bootstrap" >
								<a  class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
									<span >Khu vực</span> 
									<span  class="pull-right ng-scope ">
										<i class="fa fa-angle-down"></i>
									</span>
								</h4>
							</a> 
							<div  class="filter-group__filter">
								<div  class="is-padded" style="display: none;">
									
								</div> 
								<div  class="filter-group__filter__search" style="">
									<input  type="text" placeholder="Tìm kiếm" class="fit-suggestions"> <!---->
								</div> 
								<div  class="is-padded overflow-hidden">
									<div  class="checkbox">
										<label >
											<input type="checkbox"> 
											<span class="filter-group__filter__name">
												<span title="Đông Bắc" class="filter-group__filter__name__title">Đông Bắc
												</span> <!---->
											</span>
										</label>
									</div>
									<div  class="checkbox">
										<label >
											<input  type="checkbox"> 
											<span  class="filter-group__filter__name">
												<span  title="Tây Bắc" class="filter-group__filter__name__title">Tây Bắc</span> <!---->
											</span>
										</label>
									</div>
									<div  class="checkbox">
										<label >
											<input type="checkbox"> 
											<span  class="filter-group__filter__name">
												<span  title="Đồng Bằng Sông Hồng" class="filter-group__filter__name__title">Đồng Bằng Sông Hồng</span> <!---->
											</span>
										</label>
									</div>
									<div  class="checkbox">
										<label >
											<input  type="checkbox"> 
											<span  class="filter-group__filter__name">
												<span  title="Bắc Trung Bộ" class="filter-group__filter__name__title">Bắc Trung Bộ</span> <!---->
											</span>
										</label>
									</div>
									<div  class="checkbox">
										<label >
											<input type="checkbox"> 
											<span  class="filter-group__filter__name">
												<span title="Nam Trung Bộ" class="filter-group__filter__name__title">Nam Trung Bộ</span> <!---->
											</span>
										</label>
									</div>
									

								</div> 
								<div  class="site-drawer__bar" style="display: none;">
									<a  class="site-drawer__bar__action" style="cursor: pointer;">
										<span >Bỏ chọn</span>
									</a>
								</div>
							</div>
							</div>

							<div  class="filter-group rtl-bootstrap" >
								<a  class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Bậc phân loại</span> 
										<span  class="pull-right ng-scope "><i class="fa fa-angle-down"></i></span>
									</h4>
								</a> 
								<div class="filter-group__filter filter-group__filter--collapsed">
									<div  class="is-padded" style="display: none;">

									</div>  
									<div class="site-drawer__bar" style="display: none;">
										<a  class="site-drawer__bar__action" style="cursor: pointer;">
											<span >Bỏ chọn</span>
										</a>
									</div>
								</div>
							</div> 
							<div class="filter-group rtl-bootstrap">
								<a  class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Trạng thái</span> 
										<span  class="pull-right ng-scope "><i class="fa fa-angle-down"></i></span>
									</h4>
								</a> 
								<div data-v-78c4e7e0="" class="filter-group__filter filter-group__filter--collapsed">
									<div class="is-padded" style="display: none;">

									</div>  
									<div class="site-drawer__bar" style="display: none;">
										<a  class="site-drawer__bar__action" style="cursor: pointer;">
											<span >Bỏ chọn</span>
										</a>
									</div>
								</div>
							</div> 
							<div class="filter-group rtl-bootstrap" >
								<a class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Loại</span> 
										<span class="pull-right ng-scope "><i class="fa fa-angle-down"></i></span>
									</h4>
								</a> 
								<div class="filter-group__filter filter-group__filter--collapsed">
									<div  class="is-padded" style="display: none;">

									</div>  
									<div class="site-drawer__bar" style="display: none;">
										<a  class="site-drawer__bar__action" style="cursor: pointer;">
											<span >Bỏ chọn</span>
										</a>
									</div>
								</div>
							</div> 
							<div  class="filter-group rtl-bootstrap" >
								<a  class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Khu Bảo tồn</span> 
										<span  class="pull-right ng-scope "><i class="fa fa-angle-down"></i></span>
									</h4>
								</a>
								<div  class="filter-group__filter filter-group__filter--collapsed">
									<div class="is-padded" style="display: none;">

									</div> 
									<div  class="filter-group__filter__search" style="display: none;">
										<input  type="text" placeholder="Tìm kiếm" class="fit-suggestions"> <!---->
									</div> <!----> 
									<div  class="site-drawer__bar" style="display: none;">
										<a  class="site-drawer__bar__action" style="cursor: pointer;">
											<span >Bỏ chọn</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div  class="wrapper-horizontal-stripes fill-height">
					<div class="horizontal-stripe--paddingless white-background search-header">
						<div  class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<nav  class="article-header__category article-header__category--deep" style="text-align: center;">
										<span data-v-664c55df="" class="article-header__category__upper ng-scope" style="width: unset;">
											Tìm kiếm thông tin loài
										</span> 
										<span data-v-664c55df="" class="article-header__category__lower">
											25.414 
											Kết quả
										</span>
									</nav>
								</div>
							</div>
						</div>
					</div> <!----> 
					<div  class="loading-container" style="display: none;">
						<div  style="position: relative; height: 65px; width: 65px;">
							<svg viewBox="25 25 50 50" class="circular">
								<circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" class="path">

								</circle>
							</svg>
						</div>
					</div> 
					<div  class="horizontal-stripe light-background fill-height" style="">
						<div  class="fill-height" style="display: none;">

						</div> 
						<div class="container--narrow" style="width: 100%;">
							<div class="row">
								<div  class="col-xs-12">
									<div class="card__stripe" style="">
										<div class="card__content clearfix">
											<div  style="width: 100%;">
												<div class="card m-b-05 searchCard rtl-supported rtl-bootstrap ng-scope">
													<div  class="card__stripe">
														<div class="card__content">
															<a class="uppercase-first inherit searchCard__type hoverBox ng-scope" style="cursor: pointer;">
																Bậc phân loại:
																Giới
															</a> 
															<h3  dir="auto" class="searchCard__headline">
																<a name="Plantae" class="ng-isolate-scope">
																	Plantae (Thực vật)
																</a>
															</h3>
														</div>
													</div> 
													<div class="card__stripe">
														<div class="card__content searchCard__content clearfix">
															<p  class="discreet classification-list ng-binding ng-scope">
																Cây phân loại:
																<span>
																	<span >Plantae (Thực vật) </span>
																</span> <!----> <!----> <!----> <!----> <!---->
															</p> 
															<ul class="list-chips">
																<li >
																	<a class="uppercase-first ng-scope" style="cursor: pointer;">
																		Trạng thái:
																		<span  style="text-transform: capitalize;">accepted
																		</span>
																	</a>
																</li> 
																<li >
																	<a  class="uppercase-first ng-scope" style="cursor: pointer;">
																		Giới
																	</a>
																</li> 
																<li >
																	<a >
																		<span  class="loaded">
																			9.474
																			<span  style="margin-left: 5px;">
																				Loài
																			</span>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div style="width: 100%;">
												<div  class="card m-b-05 searchCard rtl-supported rtl-bootstrap ng-scope">
													<div  class="card__stripe">
														<div  class="card__content">
															<a  class="uppercase-first inherit searchCard__type hoverBox ng-scope" style="cursor: pointer;">
																Bậc phân loại:
																Giới
															</a> 
															<h3 dir="auto" class="searchCard__headline">
																<a  name="Animalia" class="ng-isolate-scope">
																	Animalia (Động vật)
																</a>
															</h3>
														</div>
													</div> 
													<div class="card__stripe">
														<div class="card__content searchCard__content clearfix">
															<p  class="discreet classification-list ng-binding ng-scope">
																Cây phân loại:
																<span >
																	<span>Animalia (Động vật) </span>
																</span> <!----> <!----> <!----> <!----> <!---->
															</p> 
															<ul  class="list-chips">
																<li >
																	<a  class="uppercase-first ng-scope" style="cursor: pointer;">
																		Trạng thái:
																		<span  style="text-transform: capitalize;">accepted</span>
																	</a>
																</li> 
																<li >
																	<a  class="uppercase-first ng-scope" style="cursor: pointer;">
																		Giới
																	</a>
																</li> 
																<li >
																	<a >
																		<span  class="loaded">
																			7.945
																			<span style="margin-left: 5px;">
																				Loài
																			</span>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>


										</div> 
										<ul  class="pagination" style=""><!----> 
											<li class="disabled">
												<a  tabindex="-1">‹‹</a>
											</li> 
											<li  class="page-item active">
												<a tabindex="0">1</a>
											</li>
											<li class="page-item">
												<a  tabindex="0">2</a>
											</li>
											<li class="page-item disabled">
												<a tabindex="0" class="">…</a>
											</li>
											<li class="page-item">
												<a  tabindex="0">2541</a>
											</li>
											<li class="page-item"
											><a tabindex="0">2542</a>
										</li> 
										<li  class="">
											<a tabindex="0">››</a>
										</li> <!---->
									</ul>
								</div> 
								<div class="emptyInfo" style="display: none;">
									<h3 >
										Không có kết quả - hãy thử nới lỏng các bộ lọc của bạn
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>







	</div>
</div>







</div><!-- end section -->



@include('web.layout.footer')

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


<!-- ALL JS FILES -->
<script src="{{ asset('front/js/all.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/timeline.min.js') }}"></script>


</body>
</html>
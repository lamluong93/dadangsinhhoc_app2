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
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
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
					<img src="{{ asset('front/images/ico.png') }}" alt="logo" style="width:60px;" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{ route('web.home') }}">Trang chủ</a></li>
						<li class="nav-item dropdown">
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
						<a  href="{{ route('protectedarea') }}" tooltip="Everything" class=" site-drawer__bar__icon inherit">
							<i class="fa fa-angle-left"></i>
						</a> 
						<div class="site-drawer__bar__title">
							<a  href="" class="inherit">
								<span >Khu Bảo Tồn</span>
							</a>
						</div> 
						<a href="{{ route('protectedarea') }}" class="discreet inherit site-drawer__bar__icon" style="cursor: pointer;">
							<i class="fa fa-trash"></i>
						</a>
					</div>
				</div> 
				<div  class="site-drawer__transclude">
					<div class="site-drawer__section" style="padding-bottom: 0px;">
						<div class="search-bar search-bar filter-group">
							<div class="search-bar__term" style="top: 50%; transform: translateY(-50%);">
								<form action="{{ route('protectedarea-search') }}" method="post">
									@csrf
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Tìm kiếm tên khu bảo tồn" name="search">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit" style="font-size: 0; margin-left: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
												<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
											  </svg></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						{{-- <div  class="filter-group ng-isolate-scope">
							<div  class="filter-group rtl-bootstrap" >
								<a class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Khu vực</span> 
										<span  class="pull-right ng-scope "><i class="fa fa-angle-down"></i></span>
									</h4>
								</a> 
								<div class="filter-group__filter filter-group__filter--collapsed">
									<div class="is-padded" style="display: none;">
									</div> 
									<div  class="filter-group__filter__search" style="display: none;">
										<input type="text" placeholder="Tìm kiếm" class="fit-suggestions"> <!---->
									</div> <!----> 
									<div  class="site-drawer__bar" style="display: none;">
										<a  class="site-drawer__bar__action" style="cursor: pointer;">
											<span>Bỏ chọn</span>
										</a>
									</div>
								</div>
							</div> 

							<div  class="filter-group rtl-bootstrap" >
								<a  class="inherit" style="text-decoration: none; cursor: pointer;">
									<h4 >
										<span >Phân loại</span> 
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
										<span >Công nhận</span> 
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
										<span >Phân cấp quản lý</span> 
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

						</div> --}}
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div  class="wrapper-horizontal-stripes fill-height">
					<div class="horizontal-stripe--paddingless white-background search-header">
						<div  class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<nav class="article-header__category article-header__category--deep" style="text-align: center;">
										<span data-v-664c55df="" class="article-header__category__upper ng-scope" style="width: unset;">
											tìm kiếm thông tin Khu bảo tồn
										</span> 
										<span data-v-664c55df="" class="article-header__category__lower">
											{{ count($data) }} Kết quả
										</span>
									</nav>
								</div>
							</div>
						</div>
					</div>
					
					<div  class="horizontal-stripe light-background fill-height">
						<div class="container--narrow" style="width: 100%;">
							<div class="row">
								@if (count($data))
								<div class="col-xs-12">
									<div class="card__stripe">
										<div class="card__content clearfix">
											@foreach ($data as $item)
												<div style="width: 100%;">
													<div class="card m-b-05 searchCard rtl-supported rtl-bootstrap ng-scope">
														<div  class="card__stripe">
															<div class="card__content">
																<a class="uppercase-first inherit searchCard__type hoverBox ng-scope" style="background-color: #74b274; color: #ffffff;">
																	Cấp độ ĐDSH: {{ $item->mucdodadangsinhhoc }}
																</a> 
																<h3 dir="auto" class="searchCard__headline">
																	<a name="Plantae" class="ng-isolate-scope" style="color: #1976d2">
																		{{ $item->tentienganh }} ({{ $item->ten }})
																	</a>
																</h3>
															</div>
														</div> 
														<div class="card__stripe">
															<div class="card__content searchCard__content clearfix">
																<p class="discreet classification-list ng-binding ng-scope">
																	Phân cấp quản lý: {{ $item->phancap }}
																</p>
																<p class="discreet classification-list ng-binding ng-scope pt-2 pb-2">
																	{{ $item->mota }}
																</p>
																<ul class="list-chips">
																	<li >
																		<a class="uppercase-first ng-scope" style="cursor: pointer;">
																			Thành phố Hà Nội
																		</a>
																	</li>
																	<li>
																		<a>
																			<span class="loaded">
																				Phân loại: {{ $item->phanloai }}
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											@endforeach
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-center">
										<div class="d-flex flex-column">
											{{ $data->links() }}
										</div>
									</div>
								</div>
								@else
								<div class="emptyInfo">
									<h3 >
										Không có kết quả - hãy thử nới lỏng các bộ lọc của bạn
									</h3>
								</div>
								@endif
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
<script src="{{ asset('front/js/search.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/timeline.min.js') }}"></script>
</body>
</html>
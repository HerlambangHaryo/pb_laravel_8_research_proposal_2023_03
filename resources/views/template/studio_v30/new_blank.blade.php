<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>
		@yield('title')
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('/public/studio_v30') }}/assets/css/vendor.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/studio_v30') }}/assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<link rel="icon" type="image/x-icon" href="{{ asset('/public/') }}/app/app.ico">
	
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN mobile-toggler -->
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END mobile-toggler -->
			
			<!-- BEGIN brand -->
			<div class="brand">
				<div class="desktop-toggler">
					<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
						<span class="bar"></span>
						<span class="bar"></span>
					</button>
				</div>
				
				<a href="#" class="brand-logo">
					<img src="{{ asset('/public/studio_v30') }}/assets/img/logo.png" alt="" height="20" />
				</a>
			</div>
			<!-- END brand -->
			
			<!-- BEGIN menu -->
			<div class="menu">
				<form class="menu-search" method="POST" name="header_search_form" style="visibility: hidden;">
					<div class="menu-search-icon"><i class="fa fa-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control" placeholder="Search menu..." />
					</div>
				</form>
				<div class="menu-item dropdown">
					<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
						<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
						<div class="menu-label">3</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-notification">
						<h6 class="dropdown-header text-dark mb-1">Notifications</h6>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
								<div class="time">just now</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
							</div>
							<div class="dropdown-notification-info">
								<div class="title">3 new customer account is created</div>
								<div class="time">2 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<img src="{{ asset('/public/studio_v30') }}/assets/img/icon/android.svg" alt="" width="26" />
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Your android application has been approved</div>
								<div class="time">5 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="dropdown-notification-item">
							<div class="dropdown-notification-icon">
								<img src="{{ asset('/public/studio_v30') }}/assets/img/icon/paypal.svg" alt="" width="26" />
							</div>
							<div class="dropdown-notification-info">
								<div class="title">Paypal payment method has been enabled for your store</div>
								<div class="time">10 minutes ago</div>
							</div>
							<div class="dropdown-notification-arrow">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<div class="p-2 text-center mb-n1">
							<a href="#" class="text-dark text-opacity-50 text-decoration-none">See all</a>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown">
					<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="{{ asset('/public/studio_v30') }}/assets/img/user/user.jpg" alt="" class="ms-100 mh-100 rounded-circle" />
						</div>
						<div class="menu-text">
							<?php 
								//echo $user->name;
							?>
							No User
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right me-lg-3">
						<a class="dropdown-item d-flex align-items-center" href="#">
							Edit Profile 
							<i class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"></i>
						</a> 
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="<?php // route('logout.perform') ?>">
							Log Out 
							<i class="fa fa-toggle-off fa-fw ms-auto text-dark text-opacity-50"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END menu -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
        <x-studio_v30.sidebar-nav title="{!!$active_as!!}"/>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<x-studio_v30.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="{!!$view_file!!}" />
			 
            @yield('content')
		</div>
		<!-- END #content -->
		<!-- BEGIN btn-scroll-top -->
			@include('template.'.$template.'.partial.scroll-top-btn')  
		<!-- END btn-scroll-top -->
		<!-- BEGIN theme-panel --> 
			@include('template.'.$template.'.partial.theme-panel') 
		<!-- END theme-panel -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('/public/studio_v30') }}/assets/js/vendor.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
</body>
</html>

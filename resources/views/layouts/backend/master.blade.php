<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('pagetitle', 'Master Page Layout')</title>

	<!-- Global stylesheets -->
	{{--  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">  --}}
	<link href='http://fonts.googleapis.com/css?family=Battambang' rel='stylesheet' type='text/css'>
	<link href="{{asset('assets/backend/global_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('assets/backend/global_assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/backend/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/backend/global_assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/backend/global_assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/backend/global_assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/backend/global_assets/css/custom.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	@stack('css')
</head>

<body class="navbar-top-sm-xs">
	<!-- Main navbar -->
		@include('layouts.backend.includes.topheader')
	<!-- /main navbar -->
	<!-- Page content -->
	<div class="page-content">
		<!-- Main sidebar -->
		@include('layouts.backend.includes.left_sidebar')
		<!-- /main sidebar -->
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Page header -->
			@include('layouts.backend.includes.pageheader')
			<!-- /page header -->
			<!-- Content area -->
			<div class="content">
				<!-- Basic setup -->
				<div class="card">
					<div class="card-header bg-gray header-elements-inline" style="background-color: #26a69a;">
						<h6 class="card-title">@yield('formtitle', 'Form Title')</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
								<a class="list-icons-item" data-action="reload"></a>
								<a class="list-icons-item" data-action="remove"></a>
							</div>
						</div>
					</div>				
					@yield('main-content')
				</div>
	      <!-- /basic setup -->
			</div>
			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->
		</div>
		<!-- /content wrapper -->
	</div>
	<!-- /page content -->

<!-- Core JS files -->
	<script src="{{asset('assets/backend/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/inputs/inputmask.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/extensions/cookie.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/app.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/demo_pages/form_wizard.js')}}"></script>

<!-- Theme JS files -->
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
	<script src="{{asset('assets/backend/global_assets/js/custom.js')}}"></script>	
	@stack('js')
</body>
</html>

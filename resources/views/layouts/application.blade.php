<!DOCTYPE html>
<html class="loading" data-textdirection="ltr" lang="{{ app()->getLocale() }}">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<title>Pcnetwork - Mi cuenta</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
	rel="stylesheet">
	{!!Html::style("https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css")!!}
	<!-- BEGIN VENDOR CSS-->
	{!!Html::style("assetUserBackoffice/app-assets/css/vendors.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/selects/select2.min.css")!!}

	{{-- New register --}}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/toggle/switchery.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/extensions/sweetalert.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/extensions/toastr.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/extensions/toastr.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/switch.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/wizard.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/checkboxes-radios.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/loaders/loaders.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/icheck/icheck.css")!!}
	{{-- END --}}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/icheck/custom.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/weather-icons/climacons.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/fonts/meteocons/style.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/charts/morris.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/charts/chartist.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/charts/chartist-plugin-tooltip.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/bootstrap-extended.min.css")!!}
	<!-- END VENDOR CSS-->
	<!-- BEGIN MODERN CSS-->
	{!!Html::style("assetUserBackoffice/app-assets/vendors/css/tables/datatable/datatables.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/app.min.css")!!}
	<!-- END MODERN CSS-->
	<!-- BEGIN Page Level CSS-->
	{!!Html::style("assetUserBackoffice/app-assets/css/core/menu/menu-types/vertical-menu.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/core/colors/palette-gradient.min.css")!!}
	{{-- {!!Html::style("assetUserBackoffice/app-assets/fonts/simple-line-icons/style.min.css")!! --}}
	{!!Html::style("assetUserBackoffice/app-assets/css/pages/timeline.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/pages/dashboard-ecommerce.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/core/colors/palette-callout.min.css")!!}
	{!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/checkboxes-radios.min.css")!!}
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	{!!Html::style("assetUserBackoffice/assets/css/style.css")!!}
	{!!Html::style("FlipClock/flipclock.css")!!}
	<!-- END Custom CSS-->
	{!!Html::style("/css/jquerysctipttop.css")!!}
	{!!Html::style("/css/jquery-explr-1.4.css")!!}
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139842760-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-139842760-1');
	</script>
	@yield('custom-css')

	<style type="text/css">
		.bg-info {
			background-color: #538e3a !important;
		}
		.main-menu.menu-light .navigation>li.open>a {
			color: #545766;
			background: #f5f5f5;
			border-right: 4px solid #000000 !important;
		}
		#loading_web{
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: #ffffffa3;
			z-index: 99999;
			display: none;
		}
		#img_loading{
			max-width: 60px;
			z-index: 9999;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
		}

	</style>
	{!! NoCaptcha::renderJs() !!}
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

	<div id="loading_web">
		<img src="/images/preloader.gif" id="img_loading" alt="">
	</div>


	
	<!-- fixed-top-->
	@include('extends.header')
	@include('extends.menu')
	<div class="modern-content content">



		<div class="content-wrapper">
			@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
			@endif


			@if (session('error'))
			<div class="alert alert-error">
				{{ session('error') }}
			</div>
			@endif

			@if ($errors->any())
			<div class="alert alert-danger">
				<br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@yield('content')
		</div>
	</div>
	@include('extends.footer')
	@yield('custom-js')
</body>
</html>

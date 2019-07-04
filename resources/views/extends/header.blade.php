<style type="text/css" media="screen">
	.bg-info {
		background-color: #313235 !important;
	}
	.brand-logo-mini{
		width: 48px;
		display: none;
		margin-left: -7px;
	}
	.header-navbar .navbar-container ul.nav li a.dropdown-user-link .avatar {
		margin-right: .5rem;
		width: 36px;
		vertical-align: top;
	}
	.navbar-light .navbar-header .navbar-nav .nav-link, .navbar-semi-light .navbar-header .navbar-nav .nav-link {
		color: #fff !important;
	}
	.logoo{
		margin-top: 13px;
	}
</style>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
	<div class="navbar-wrapper">
		<div class="navbar-header" style="background: #fab700;">
			<ul class="nav navbar-nav flex-row">
				<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
				<li class="nav-item">
					<style>
						.brand-logo{
							width: 120px !important;
							margin-left: 10px;
						}
					</style>
					<a class="navbar-brand" href="/">
						<img class="brand-logo-mini logoo" alt="modern admin logo" src="/images/logo.png"> 
						<img class="brand-logo brand-text logoo" alt="modern admin logo" src="/images/logo.png">
					</a>
				</li>
				<li class="nav-item d-md-none">
					<a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
				</li>
			</ul>
		</div>
		<div class="navbar-container content">
			<div class="collapse navbar-collapse" id="navbar-mobile">
				<ul class="nav navbar-nav mr-auto float-left">
					<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
					{{-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li> --}}
				</ul>
				<ul class="nav navbar-nav float-right">
				{{-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
					<div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>									<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
						<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
						<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
					</div>
				</li> --}}
				<li class="dropdown dropdown-user nav-item">
					<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
						<span class="">Hola,
							<span class="user-name text-bold-700"> {{ Auth::user()->name }}</span>
							<i class="ft-chevron-down" style="margin-left: 2px;"></i>
						</span>
						<span class="avatar avatar-online">
							<img class="imgAvatar" src="/images/man.png" alt="avatar" style="margin-top: -8px;width: 34px;height: 34px;"><i></i></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="/dashboard/settings/profile"><i class="ft-user"></i>{{ __('Perfil') }}</a>
							<div class="dropdown-divider"></div>


							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							<i class="ft-power"></i>{{ __('Salir') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</nav>

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
	<div class="main-menu-content">

		<br><br>
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

			<li class="{{ Request::is( 'dashboard/home') ? 'active' : '' }} nav-item">
				<a href="/dashboard/home"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Inicio</span></a>
			</li>

		{{-- 	<li class="{{ Request::is( 'dashboard/payments/all') ? 'active' : '' }} {{ Request::is( 'dashboard/payments') ? 'active' : '' }} nav-item">
				<a href="/dashboard/payments/all"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.dash.settings">Mis Cuotas</span></a>
			</li>
			--}}

			<li class=" nav-item"><a href="/"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.dash.settings">Mis Cuotas</span></a>
				<ul class="menu-content">
					<li class="{{ Request::is( 'dashboard/payments') ? 'active' : '' }} nav-item">
						<a href="/dashboard/payments">
							<span class="menu-title" data-i18n="nav.dash.main">Pagar</span>
						</a>
					</li>

					<li class="nav-item {{ Request::is( 'dashboard/payments/all') ? 'active' : '' }}">
						<a href="/dashboard/payments/all">
							<span class="menu-title" data-i18n="nav.dash.settings">Historial</span>
						</a>
					</li>
				</ul>
			</li>


			<li class=" nav-item"><a href="/"><i class="la ft-users"></i><span class="menu-title" data-i18n="nav.dash.settings">Organización</span></a>
				<ul class="menu-content">
					<li class="{{ Request::is( 'dashboard/team/directs') ? 'active' : '' }} nav-item">
						<a href="/dashboard/team/directs"><i class="la la-group"></i><span class="menu-title" data-i18n="nav.dash.main">Clientes</span></a>
					</li>

					<li class="nav-item {{ Request::is( 'dashboard/team/unilevel') ? 'active' : '' }}">
						<a href="/dashboard/team/unilevel"><i class="la ft-users"></i><span class="menu-title" data-i18n="nav.dash.settings">Equipo Unilevel</span></a>
					</li>
				</ul>
			</li>

			<li class=" nav-item"><a href="/"><i class="la la-money"></i><span class="menu-title" data-i18n="nav.dash.settings">Comisiones de Venta</span></a>
				<ul class="menu-content">
					<li class="{{ Request::is( 'dashboard/transactions/history') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/transactions/history" data-i18n="nav.dash.ecommerce">Historial de Comisiones</a>
					</li>
					<li class="{{ Request::is( 'dashboard/transactions/earnings') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/transactions/earnings" data-i18n="nav.dash.ecommerce">Ganancias</a>
					</li>


					<li class="{{ Request::is( 'dashboard/withdrawal/history') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/withdrawal/history" data-i18n="nav.dash.ecommerce">Cobro de Comisiones</a>
					</li>
					<li class="{{ Request::is( 'dashboard/withdrawal/new') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/withdrawal/new" data-i18n="nav.dash.ecommerce">Nuevo Cobro</a>
					</li>
				</ul>
			</li>
			<li class=" nav-item"><a href="/"><i class="ft-shield"></i><span class="menu-title" data-i18n="nav.dash.settings">Legalidad</span></a>
				<ul class="menu-content">
					<li class="{{ Request::is( 'dashboard/legality/terms-and-conditions') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/legality/terms-and-conditions">Terminos y Condiciones</a>
					</li>
					<li class="{{ Request::is( 'dashboard/legality/promise-to-purchase') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/legality/promise-to-purchase">Promesa de Compra-Venta</a>
					</li>
				{{-- 	<li class="{{ Request::is( 'dashboard/legality/insurance') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/legality/insurance">Seguro Deudor</a>
				</li> --}}
				{{-- 	<li class="{{ Request::is( 'dashboard/legality/contract') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/legality/contract">Contrato</a>
				</li> --}}

			</ul>
		</li>
		<li class=" nav-item"><a href="/"><i class="la la-gear"></i><span class="menu-title" data-i18n="nav.dash.settings">Ajustes</span></a>
			<ul class="menu-content">
				<li class="{{ Request::is( 'dashboard/settings/promise-verification') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/settings/promise-verification">Verificar Promesa de Compra-Venta</a>
				</li>
				<li class="{{ Request::is( 'dashboard/settings/document-verification') ? 'active' : '' }} {{ Request::is( 'dashboard/settings/rut-verification') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/settings/document-verification">Verificar Documentación</a>
				</li>
				<li class="{{ Request::is( 'dashboard/settings/bank/account') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/settings/bank/account">Mi Cuenta Bancaria</a>
				</li>
				<li class="{{ Request::is( 'dashboard/settings/profile') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/settings/profile">Mi Perfil</a>
				</li>
				<li class="{{ Request::is( 'dashboard/password_reset') ? 'active' : '' }}"><a class="menu-item" href="/dashboard/password_reset" data-i18n="nav.dash.ecommerce">Cambiar contraseña</a>
				</li>

			</ul>
		</li>


		<li class=" nav-item">
			<a class="dropdown-item" href="{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form2').submit();">
			<i class="ft-power"></i>{{ __('Cerrar sesión') }}
		</a>

		<form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>

	</li>






</ul>
</div>
</div>

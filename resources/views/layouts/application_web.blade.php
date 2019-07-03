	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	@include('extends.website.head')
	<body>
		@include('extends.website.header')
		
		{{-- Content --}}
		@yield('content')
		{{-- Content Lotes --}}

		@include('extends.website.footer')
		@yield('custom-js')
	</body>

	</html>
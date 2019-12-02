<!DOCTYPE html>
<html>
	<head>
		@include('partials._head')
	</head>
	<body>
		@include('partials._navbar')

		<div class="container">
			@if(Request::is('/'))
				@include('partials._showcase')
			@endif
			@include('partials._messages')
			@yield('content')
		</div>

		@include('partials._footer')

		@include('partials._javascript')

		@yield('scripts')
	</body>
</html>
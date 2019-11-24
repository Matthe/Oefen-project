@include('partials._head');
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
</body>
</html>
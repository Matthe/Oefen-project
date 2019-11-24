@include('partials._head');
<body>
	@include('partials._navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('partials.showcase')
		@endif
		@include('partials.messages')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright 2019 &copy; Mijn site</p>
	</footer>
</body>
</html>
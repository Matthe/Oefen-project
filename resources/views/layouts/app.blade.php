<!DOCTYPE html>
<html>
<head>
	<title>Mijn site</title>
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
	@include('inc.navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-10 col-lg-10">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-2 col-lg-2">
				@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright 2019 &copy; Mijn site</p>
	</footer>
</body>
</html>
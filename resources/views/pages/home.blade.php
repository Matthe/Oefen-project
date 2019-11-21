@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Home</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<div class="post">
				<h3>Post Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat...</p>
				<a href="#" class="btn btn-primary">Read More</a>
			</div>

			<hr>

			<div class="post">
				<h3>Post Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat...</p>
				<a href="#" class="btn btn-primary">Read More</a>
			</div>

			<hr>

			<div class="post">
				<h3>Post Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat...</p>
				<a href="#" class="btn btn-primary">Read More</a>
			</div>

			<hr>
		</div>
		<div class="col-md-3 col-md-offset-1">
			@include('inc.sidebar')
		</div>
	</div>
	
@endsection

@section('sidebar')
	@parent
@endsection
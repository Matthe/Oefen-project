@extends('layouts.app')

@section('title', ' | Home')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Home</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
	</div>

	<div class="row">
		<div class="col-md-8">

			@foreach($posts as $post)


				<div class="post">
					<h3>{{ $post->title }}</h3>
					<p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>

				<hr>

			@endforeach

		</div>
		<div class="col-md-3 col-md-offset-1">
			@include('partials._sidebar')
		</div>
	</div>

	
	
@endsection
@extends('layouts.app')

@section('content')
	<div class="col-sm-10">
		<div class="row">
			<div class="col-sm-4">
				{{-- Profile image --}}
				<img src="/images/default.png" alt="Your Profile Image" class="profile-image rounded-circle p-1">
				{{-- Social media links --}}
				<p class="text-center social-media-links">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter-square"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</p>

			</div>
			<div class="col-sm-7">
				{{-- Username --}}
				<h3>
					{{ Auth::user()-> name}}
					<small class="text-muted">{{Auth::user()-> email}}</small>
				</h3>
				<hr>
				Most Recent Activity
			</div>
		</div>
	</div>
	
@endsection
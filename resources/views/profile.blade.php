@extends('layouts.app')

@section('content')
	<div class="col-sm-10">
		<div class="row">
			<div class="col-sm-4">
				{{-- Profile image --}}
				<div class="text-center">
					<img src="/images/default.png" alt="Your Profile Image" class="profile-image rounded-circle p-1">
				</div>
				{{-- Social media links --}}
				<p class="text-center social-media-links">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter-square"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</p>

			</div>
			<div class="col-sm-8">
				{{-- Username --}}
				<h3>
					{{ Auth::user()-> name}}
					<small class="text-muted">{{Auth::user()-> email}}</small>
				</h3>
				<hr>
				{{-- Voorbeeld profile --}}
				Profile information
				<div class="card">
					<img src="img.jpg" alt="John" style="width:100%">
					<h1>John Doe</h1>
					<p class="title">CEO & Founder, Example</p>
					<p>Harvard University</p>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<p><button>Contact</button></p>
				</div>
			</div>
		</div>
	</div>
	
@endsection
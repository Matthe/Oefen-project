@extends('layouts.app')

@section('content')
	<div class="col-sm-10">
		<p>Dit is het profiel</p>

		<div class="row">
			<div class="col-sm-3">
				{{-- Profile image --}}
				<img src="/images/default.png" alt="Your Profile Image" class="profile-image">
			</div>
			<div class="col-sm-9">
				{{-- Username --}}
			</div>
		</div>
	</div>
	
@endsection
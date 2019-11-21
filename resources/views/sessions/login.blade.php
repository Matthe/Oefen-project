@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Log in</h2>

		<form method="POST" action="/login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" id="password" name="password"></input>
			</div>

			<div class="form-group">
				<button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
			</div>
		</form>
	</div>
</div>

@endsection
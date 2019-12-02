@extends('layouts.app')

@section('title', ' | Create New Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('title', 'Title:')}}
				<!-- form-control is een bootstrap ding zodat de form er mooier uitziet & required is parsley validatie -->
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('body', 'Post Body:')}}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}
			{!! Form::close() !!}
		</div>		
	</div>

@endsection

@section('scripts')
	{!! Html::style('js/parsley.min.js') !!}
@endsection
@extends('layouts.app')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1> {{ $post->title }} </h1>

			<p class="lead"> {{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="card card-body">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('d M, Y H:i', strtotime($post->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('d M, Y H:i', strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-md-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="col-md-12">
					{{ Html::linkRoute('posts.index', 'See All Posts', [], ['class' => 'btn btn btn-outline-dark btn-block btn-h1-spacing']) }}
				</div>

			</div>
		</div>	
	</div>

	

@endsection
@extends('layouts.app')

@section('title', ' | Edit Blog Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
				{{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, ['class'=> 'form-control'] )}}

				{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
				{{ Form::textarea('body', null, ['class' => 'form-control'] )}}
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
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-md-6">
						{{ Form::submit('Save Edit', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection
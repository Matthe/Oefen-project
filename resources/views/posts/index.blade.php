@extends('layouts.app')

@section('title', ' | All Blog Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>

		<hr>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title}}</td>
							<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('d M, Y H:i', strtotime($post->created_at))}}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-info btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-info btn-sm">Edit</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!!  $posts->links()  !!}
			</div>
		</div>
	</div>

@endsection
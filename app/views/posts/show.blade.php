@extends('layouts.master')

@section('content')
	
	@foreach($posts as $post)
			<p>Post Created:	{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS, Y @ h:i A') }}} </p>
			<h2>
				<a href="{{{ action('PostsController@show', ($post->title)) }}}">{{{ $post->title }}}</a>
			</h2>
			<p class="blogBody">{{{ $post->body }}}</p>	
		@endforeach

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}

	
	<button type="submit" class="btn btn-danger">Delete Post</button>

{{ Form::close() }}

@stop
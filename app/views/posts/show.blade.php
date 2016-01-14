@extends('layouts.master')

@section('content')
	
	<p>Post Created At: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}

	
	<button type="submit" class="btn btn-danger">Delete Post</button>

{{ Form::close() }}

@stop
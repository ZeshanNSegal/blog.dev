@extends('layouts.master')

@section('content')

	

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}

	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}}</p>

	<button type="submit" class="btn btn-danger">Delete</button>

{{ Form::close() }}

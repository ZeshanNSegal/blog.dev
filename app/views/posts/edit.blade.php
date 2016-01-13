@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

{{ $errors->first('title', '<span class="help-block">:message</span>') }}

	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

  	{{ Form::label('body', 'Body') }}
	{{ Form::text('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

 	 <input name="user_id" type="hidden" value="1">

  <button type="submit" class="btn btn-primary">Submit</button>

{{ Form::close() }}

@stop
@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => 'PostsController@store')) }}

	{{ $errors->first('title', '<span class="help-block">:message</span>') }}

	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

  	{{ Form::label('body', 'Body') }}
	{{ Form::text('body') }}

 	 <input name="user_id" type="hidden" value="1">

  <button type="submit" class="btn btn-warning">Submit</button>

{{ Form::close() }}

@stop
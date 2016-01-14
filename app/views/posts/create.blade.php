@extends('layouts.master')

@section('content')

<hr>

<div class=('container-fluid createPost')>
	<div class=('row')>
		<div class=('col-md-12 createPost')>

			{{ Form::open(array('action' => 'PostsController@store')) }}

				{{ $errors->first('title', '<span class="help-block">:message</span>') }}

				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

			  	{{ Form::label('body', 'Body') }}
				{{ Form::text('body') }}

				{{ Form::file('image_upload', array('class' => 'name')) }}

			 	 <input name="user_id" type="hidden" value="1">

			  	<button type="submit" class="btn btn-warning">Submit</button>

			{{ Form::close() }}
			
		</div><!--end col-md-12-->
	</div><!-- end row -->
</div><!--end container-->

@stop
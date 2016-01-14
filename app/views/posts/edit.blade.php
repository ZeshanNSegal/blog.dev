@extends('layouts.master')

@section('content')

<hr>

<div class=('container-fluid')>
	<div class=('row')>
		<div class=('col-md-12 createPost')>
			{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

				{{ $errors->first('title', '<span class="help-block">:message</span>') }}

				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

				{{ $errors->first('body', '<span class="help-block">:message</span>') }}

			  	{{ Form::label('body', 'Body') }}
				{{ Form::text('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Enter blog title']) }}

			 	 <input name="user_id" type="hidden" value="1">

			  <button type="submit" class="btn btn-primary">Submit</button>

			{{ Form::close() }}
		</div><!--end col-md-12-->
	</div><!-- end row -->
</div><!--end container-->


@stop
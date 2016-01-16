@extends('layouts.master')

@section('content')

	@foreach($posts as $post)
	<div class="container">
		<h2 class="titleOfBlog"><a href="{{{ action('PostsController@show', ($post->slug)) }}}">{{{ $post->title }}}</a></h2>
		<p class="blogBody">{{{ $post->body }}}</p>
	</div>	
	@endforeach
	{{ $posts->links() }}
@stop
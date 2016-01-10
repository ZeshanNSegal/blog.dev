@extends('layouts.master')

@section('content')

<form method="POST" action="{{{ action('PostController@store') }}}">
  <fieldset class="form-group">
    <label for="blogTitle">Title</label>
    <input name="title" type="text" class="form-control" id="blogTitle" placeholder="Enter some stuff" value="{{{ Input::old('title') }}}">
  </fieldset>
  <fieldset class="form-group">
    <label for="blogTitle">Post Your Blog</label>
    <textarea rows="4" cols="50" name="blogPost" class="form-control" id="blogTitle" placeholder="Enter some stuff">{{{ Input::old('blogPost') }}}</textarea>
  </fieldset>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop
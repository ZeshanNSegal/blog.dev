@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="col-md-12 text-center">
		{{ Form::open(array('action' => 'HomeController@postLogin')) }}
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input  name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
		        <div class="checkbox">
		          <label>
		            <input type="checkbox" value="remember-me"> Remember me
		          </label>
		        </div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div><!--end class col-mmd-12-->
</div><!--end of container for login form-->

@stop
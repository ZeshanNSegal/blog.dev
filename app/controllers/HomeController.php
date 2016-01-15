<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showWelcome()
	{
		$posts = Post::orderBy('updated_at', 'desc')->take(3)->get();
		return View::make('hello')->with('posts', $posts);
	}

	// handleform 

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{	
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/');
	    } else {
    		// login failed, go back to the login screen
			Session::flash('errorMessage', 'Login Failed');
			return Redirect::back()->withInput();
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
	}

}
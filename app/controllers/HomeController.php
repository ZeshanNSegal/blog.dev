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

	public function showContact()
	{
		return View::make('contact');
	}

	public function emailSentPage() 
	{	
		return View::make('email-sent');
	}

	public function postContact()
	{
		$from = Input::get('from');
		$email = Input::get('email');
		$subject = Input::get('subject');
		$body = Input::get('body');

		$data = [
			'from' => $from,
			'email' => $email,
			'subject' => $subject,
			'body' => $body,
		];

		Mail::send('emails.contact', $data, function($message) use ($data)
		{	
			$message->from($data['email'], $data['from']);
			$message->to('zeshan.segal@gmail.com', 'Zeshan N. Segal')->subject($data['subject']);
		});

		Session::flash('successMessage', 'Your email has been sent! Thanks!');
		return Redirect::action('HomeController@emailSentPage');
	}
}
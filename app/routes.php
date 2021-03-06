<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('/posts', 'PostsController'); //RESTful API (crud)

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@getLogout');

Route::resource('tags', 'TagsController');

Route::get('/contact', 'HomeController@showContact');
Route::post('/contact', 'HomeController@postContact');

Route::get('/email-sent-successfully', 'HomeController@emailSentPage');

Route::get('orm-test', function ()
{
    $post1 = new Post();
	$post1->user_id = 1;
	$post1->title = 'Eloquent is awesome!';
	$post1->body  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->user_id = 1;
	$post2->title = 'Post number two';
	$post2->body  = 'The body for post number two.';
	$post2->save();
});

// Route::get('/session/{value}', function($value){

// 	Session::put('some-key');

// 	if(Session::has('some-key')) {
// 		echo Session::get('some-key');
// 	}
// })

// Route::get('/session', function(){
// 	return Session::all();
// });
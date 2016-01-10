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

Route::resource('/posts', 'PostController'); //RESTful API (crud)

Route::get('orm-test', function ()
{
    $post1 = new Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->body  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->title = 'Post number two';
	$post2->body  = 'The body for post number two.';
	$post2->save();
});

// Route::get('/test', function(){
// 	dd(Input:get('today'));
// });

// Route::get('/howdy/{name?}', function($name='Zee')
// {
//         return "Hello, $name!";
// });

// Route::resource('/posts, PostController');

// Route::get('/hello/{name}', function($name)
// {
// 	$data = ['name' => $name];
//     return View::make('my-first-view')->with($data);
// });

// Route::get('/rolldice/{guess}', function($guess)
// {	
// 	$rand = mt_rand(1,6);

// 	$data = ['rand' => $rand,
// 			'guess' => $guess,
// 			];

// 	return View::make('rolldice', $data);
// 	// return View::make('rolldice')->with($data); ----> This can be written either way... 
// });
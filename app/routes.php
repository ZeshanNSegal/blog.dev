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

// Route::get('/howdy/{name?}', function($name='Zee')
// {
//         return "Hello, $name!";
// });

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

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
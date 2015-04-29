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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('sayhello/{name}',function($name)
// {
// 	// return "hello, $name";
// 	return View::make('my-first-view');
// });

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array(
        	'name' => $name,
        	'stuff' => 'output some info'
        	);
        return View::make('my-first-view')->with($data);
    }
});


Route::get('resume' ,'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('/' ,'HomeController@showWelcome');

// Route::controller('about', 'AboutController');
Route::resource('post', 'PostsController');




Route::get('rolldice/{guess}',function($guess)
{
	$random = rand(1,6);
	$data = [
		'guess' => $guess,
		'random'=> $random
		];
	return View::make('roll-dice')->with($data);
});




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

Route::controller('about', 'AboutController');
Route::resource('post', 'PostsController');

// =============================================
/**
*
*   login routes
*/
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@logout');



Route::get('orm-test', function ()
{
    $query = Post::with('user');

    $search = 'noe';

    $query->where('title', 'like', '%' . $search . '%');
    $query->orWhere('body', 'like', '%' . $search . '%' )->get();
    
    $query->orWhereHas('user', function($q){

        $q->where('username', 'like', '%noe%');

    });

    $post = $query->orderBy('created_at', 'DESC')->paginate(10);
    dd($post);
});


Route::get('test404',function(){

    Log::info('This is some useful information.');
    Log::warning('Something could be going wrong.');
    Log::error('Something is really going wrong.');
    App::abort('404');

});


Route::get('rolldice/{guess}',function($guess)
{
	$random = rand(1,6);
	$data = [
		'guess' => $guess,
		'random'=> $random
		];
	return View::make('roll-dice')->with($data);
});




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

Route::get('/', function()
{
	return View::make('index');
});

// 登录与登出
Route::controller('auth', 'AuthController');

Route::controller('forum', 'ForumController');
Route::controller('comment', 'CommentController');



// Route::get('username/{name?}', function($name = 'John')
// {
//     return $name;
// });

// Route::get('address', 'AddressController@showAddress');

// Route::get('date', 'UserController@getOpt');
// Route::get('adduser', 'UserController@addUser');
// Route::get('selectuser', 'UserController@selectUser');




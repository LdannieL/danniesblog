<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function(){
	Route::resource("posts","AdminPostController");
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', array('as' => 'home', 'uses' => 'PostsController@index'));
Route::get('post/{id}', array('as' => 'post', 'uses' => 'PostsController@show'))->where('id', '[1-9][0-9]*');
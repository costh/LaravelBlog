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

Route::get('/',[
	'as' => 'home',
	'uses' => 'HomeController@index'
	]);

Route::get('/newpost','PostController@getView_newPost');

Route::get('/posts/{slug}',[
	'as' => 'post-show',
	'uses' => 'PostController@getShow'
	]);

Route::resource('posts', 'PostController');






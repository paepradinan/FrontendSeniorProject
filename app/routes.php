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
// 	return View::make('home/home');
// });


Route::get('/','PagesController@home');

Route::get('/testt','PagesController@testt');

Route::get('/master','PagesController@master');

Route::get('/stock','PagesController@stock');

Route::get('/company','PagesController@company');

Route::get('/financial','PagesController@financial');

Route::get('/news','PagesController@news');

Route::get('/login','PagesController@login');

Route::get('/signin','PagesController@signin');

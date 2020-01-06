<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'PageController@getHome');
	Route::get('/about', 'PageController@getAbout');
	Route::get('/contact', 'PageController@getContact');
	Route::get('/register', 'PageController@getRegister');
	Route::get('/profile', 'PageController@getProfile');

	Route::get('/messages', 'MessagesController@getMessages');
	Route::post('/contact/submit', 'MessagesController@submit');

	Route::get('/register', 'RegistrationController@create');
	Route::post('/register', 'RegistrationController@store');

	Route::get('/login', 'SessionController@create');
	Route::post('/login', 'SessionController@store');
	Route::get('/logout', 'SessionController@destroy');

	Route::resource('posts', 'PostController');
});
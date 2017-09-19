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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
 'middleware' => 'roles',
 'roles' => ['Admin']
], function() {

	Route::get('users', [
		'uses' => 'UsersController@index',
		'as' => 'users.index'
	]);

	Route::get('users/create', [
		'uses' => 'UsersController@create',
		'as' => 'users.create'
	]);

	Route::post('users/store', [
		'uses' => 'UsersController@store',
		'as' => 'users.store'
	]);

	Route::get('users/show/{user}', [
		'uses' => 'UsersController@show',
		'as' => 'users.show'
	]);

	Route::get('users/edit/{user}', [
		'uses' => 'UsersController@edit',
		'as' => 'users.edit'
	]);

	Route::put('users/{user}', [
		'uses' => 'UsersController@update',
		'as' => 'users.update'
	]);

	Route::delete('users/{user}', [
		'uses' => 'UsersController@destroy',
		'as' => 'users.delete'
	]);

	Route::get('messages', [
		'uses' => 'MessagesController@index',
		'as' => 'messages.index'
	]);

	Route::get('messages/create', [
		'uses' => 'MessagesController@create',
		'as' => 'messages.create'
	]);

	Route::post('messages/store', [
		'uses' => 'MessagesController@store',
		'as' => 'messages.store'
	]);

	Route::get('messages/edit/{message}', [
		'uses' => 'MessagesController@edit',
		'as' => 'messages.edit'
	]);

	Route::put('messages/{message}', [
		'uses' => 'MessagesController@update',
		'as' => 'messages.update'
	]);

	Route::delete('messages/{message}', [
		'uses' => 'MessagesController@destroy',
		'as' => 'messages.delete'
	]);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

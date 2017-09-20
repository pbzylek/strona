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

	Route::get('admin/users', [
		'uses' => 'UsersController@index',
		'as' => 'users.index'
	]);

	Route::get('admin/users/create', [
		'uses' => 'UsersController@create',
		'as' => 'users.create'
	]);

	Route::post('admin/users/store', [
		'uses' => 'UsersController@store',
		'as' => 'users.store'
	]);

	Route::get('admin/users/show/{user}', [
		'uses' => 'UsersController@show',
		'as' => 'users.show'
	]);

	Route::get('admin/users/edit/{user}', [
		'uses' => 'UsersController@edit',
		'as' => 'users.edit'
	]);

	Route::put('admin/users/{user}', [
		'uses' => 'UsersController@update',
		'as' => 'users.update'
	]);

	Route::delete('admin/users/{user}', [
		'uses' => 'UsersController@destroy',
		'as' => 'users.delete'
	]);

	Route::get('admin/messages', [
		'uses' => 'MessagesController@index',
		'as' => 'messages.index'
	]);

	Route::get('admin/messages/create', [
		'uses' => 'MessagesController@create',
		'as' => 'messages.create'
	]);

	Route::post('admin/messages/store', [
		'uses' => 'MessagesController@store',
		'as' => 'messages.store'
	]);

	Route::get('admin/messages/edit/{message}', [
		'uses' => 'MessagesController@edit',
		'as' => 'messages.edit'
	]);

	Route::put('admin/messages/{message}', [
		'uses' => 'MessagesController@update',
		'as' => 'messages.update'
	]);

	Route::delete('admin/messages/{message}', [
		'uses' => 'MessagesController@destroy',
		'as' => 'messages.delete'
	]);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

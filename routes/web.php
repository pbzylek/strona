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
		'as' => 'admin.users.index'
	]);

	Route::get('admin/users/create', [
		'uses' => 'UsersController@create',
		'as' => 'admin.users.create'
	]);

	Route::post('admin/users/store', [
		'uses' => 'UsersController@store',
		'as' => 'admin.users.store'
	]);

	Route::get('admin/users/show/{user}', [
		'uses' => 'UsersController@show',
		'as' => 'admin.users.show'
	]);

	Route::get('admin/users/edit/{user}', [
		'uses' => 'UsersController@edit',
		'as' => 'admin.users.edit'
	]);

	Route::put('admin/users/{user}', [
		'uses' => 'UsersController@update',
		'as' => 'admin.users.update'
	]);

	Route::delete('admin/users/{user}', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.delete'
	]);

	Route::get('admin/messages', [
		'uses' => 'MessagesController@index',
		'as' => 'admin.messages.index'
	]);

	Route::get('admin/messages/create', [
		'uses' => 'MessagesController@create',
		'as' => 'admin.messages.create'
	]);

	Route::post('admin/messages/store', [
		'uses' => 'MessagesController@store',
		'as' => 'admin.messages.store'
	]);

	Route::get('admin/messages/edit/{message}', [
		'uses' => 'MessagesController@edit',
		'as' => 'admin.messages.edit'
	]);

	Route::put('admin/messages/{message}', [
		'uses' => 'MessagesController@update',
		'as' => 'admin.messages.update'
	]);

	Route::delete('admin/messages/{message}', [
		'uses' => 'MessagesController@destroy',
		'as' => 'admin.messages.delete'
	]);

});

Route::get('messages', [
		'uses' => 'UserMessageController@index',
		'as' => 'messages.index'
]);

Route::get('messages/create', [
		'uses' => 'UserMessageController@create',
		'as' => 'messages.create'
]);

	Route::post('messages/store', [
		'uses' => 'UserMessageController@store',
		'as' => 'messages.store'
]);

Route::get('messages/show/{message}', [
	'uses' => 'UserMessageController@show',
	'as' => 'messages.show'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

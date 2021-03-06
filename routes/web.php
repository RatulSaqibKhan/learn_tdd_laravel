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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{id}', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');
Route::get('users/{id}/delete', 'UserController@delete');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/create','TaskController@create');
Route::post('/tasks/create','TaskController@store');
Route::get('/tasks/{task}','TaskController@show');
Route::get('/tasks/{task}/edit','TaskController@edit');
Route::put('/tasks/{task}','TaskController@update');
Route::delete('/tasks/{task}','TaskController@destroy');
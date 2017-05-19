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
})->name('welcome');

Route::get('/users', 'UserController@list')->name('users');

Route::get('/users/{id}', 'UserController@show')->name('userShow');

Route::get('/requests/{id}', 'RequestPrintController@show')->name('requestShow');

Route::get('/requests', 'RequestPrintController@list')->name('requests');

Auth::routes();

Route::get('/home', function(){
	return view('home');
})->name('home');
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

Route::get('/home', function(){
	return view('home');
})->name('home');

Auth::routes();

Route::get('/users', 'UserController@list')->name('users');

Route::get('/users/{id}', 'UserController@show')->name('userShow');

Route::get('/requests/{id}', 'RequestPrintController@show')->name('requestShow');

Route::get('/requests', 'RequestPrintController@list')->name('requests');

Route::get('/printers', 'PrinterController@list')->name('printers');

Route::get('/printers/add', 'PrinterController@create')->name('addPrinter');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('confirmEmail/{id}', 'Auth\RegisterController@confirmEmail');
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
/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/waiting', function(){return view('waiting');})->name('waiting');

Auth::routes();

Route::post('createComment', ['as' => 'createComment', 'uses' => 'CommentController@addComment']);

Route::get('/users', 'UserController@list')->name('users');

Route::get('/departments', 'DepartmentController@list')->name('departments');

Route::get('/users/{id}', 'UserController@show')->name('userShow');

Route::get('/requests/create', 'RequestPrintController@create')->name('addRequest');

Route::get('/myRequests/{id}/delete', 'RequestPrintController@delete')->name('deleteRequest');

Route::get('/myRequests/{id}/update', 'RequestPrintController@update')->name('updateRequest');

Route::post('/myRequests/{id}/update', 'RequestPrintController@store')->name('storeRequest');

Route::post('completeRequest/{id}', ['as' => 'completeRequest', 'uses' => 'RequestPrintController@complete']);

Route::get('blockcomment/{id}/{commentId}', ['as' => 'blockComment', 'uses' => 'CommentController@block']);

Route::get('myRequests/{id}/rating', ['as' => 'rating', 'uses' => 'RequestPrintController@rating']);

Route::post('blockedComments/{id}/unblock', ['as' => 'unblockComment', 'uses' => 'CommentController@unblock']);

Route::post('/adminPremissions/{id}/remove', ['as' => 'removeAdmin', 'uses' => 'UserController@removeAdmin']);

Route::post('/adminPremissions/{id}/give', ['as' => 'giveAdmin', 'uses' => 'UserController@giveAdmin']);

Route::post('/users/{id}/block', ['as' => 'blockUser', 'uses' => 'UserController@block']);

Route::post('/users/{id}/unblock', ['as' => 'unblockUser', 'uses' => 'UserController@unblock']);

Route::post('/users/{id}/unblock', ['as' => 'unblockUserList', 'uses' => 'UserController@unblockList']);

Route::post('refuseRequest/{id}', ['as' => 'refuseRequest', 'uses' => 'RequestPrintController@refuse']);

Route::post('/requests/create', 'RequestPrintController@add')->name('createRequest');

Route::get('/requests/{id}', 'RequestPrintController@show')->name('requestShow');

Route::get('/myRequests', 'RequestPrintController@myRequests')->name('myRequests');

Route::get('/requests', 'RequestPrintController@list')->name('requests');

Route::get('/blockedComments', 'CommentController@listBlock')->name('showBlocked');

Route::get('/blockedUsers', 'UserController@listBlock')->name('blockedUsers');

Route::get('/adminPremissions', 'UserController@listAdmin')->name('listAdmin');

Route::get('/printers', 'PrinterController@list')->name('printers');

Route::get('/printers/addPrinter', 'PrinterController@create')->name('addPrinter');

Route::post('/printers/create', 'PrinterController@add')->name('createPrinter');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('confirmEmail/{id}', 'Auth\RegisterController@confirmEmail');
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontController@index');
Route::get('/films', 'FrontController@films');
Route::get('/contact', 'FrontController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('category')->group(function(){
	Route::get('save', 'CategoryController@index');
	Route::post('save', 'CategoryController@save');
	Route::get('all', 'CategoryController@all');
	Route::get('edit/{id}', 'CategoryController@edit');
	Route::post('edit/', 'CategoryController@update');
	Route::get('delete/{id}', 'CategoryController@delete');
});

/*
	email available checking
*/
Route::get('/email_available', 'EmailAvailable@index');
Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check');

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


/*
    film route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'films'], function(){
    Route::get('/all', 'FilmController@index');
    Route::get('/create', 'FilmController@create');
    Route::post('/store', 'FilmController@store');
    Route::get('/{id}/edit', 'FilmController@edit');
    Route::post('/update/{id}', 'FilmController@update');
    Route::get('/delete/{id}', 'FilmController@delete');
});

/*
	email available checking
*/
Route::get('/email_available', 'EmailAvailable@index');
Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check');

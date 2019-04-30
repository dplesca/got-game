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

Auth::routes();

Route::get('/home', function(){
    return redirect('/');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/make-your-picks', 'HomeController@form');
Route::post('/submit', 'HomeController@submit');
Route::get('/rankings', 'HomeController@rankings');

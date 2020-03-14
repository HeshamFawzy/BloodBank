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

Route::get('/donate', 'HomeController@donate')->name('user.donate');

Route::post('/donate_p', 'HomeController@donatep')->name('user.donate_p');

Route::get('/donor', 'HomeController@donor')->name('user.donor');









Route::get('/admin', 'AdminController@index')->name('admin');

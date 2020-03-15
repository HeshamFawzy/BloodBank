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

Route::post('/donor_p/{id}', 'HomeController@donorp')->name('user.donor_p');

Route::get('/bank', 'HomeController@bank')->name('user.bank');

Route::post('/bank_p/{id}', 'HomeController@bankp')->name('user.bank_p');





Route::get('/requests', 'AdminController@requests')->name('admin.requests');

Route::post('/search/{email}', 'AdminController@search')->name('admin.search');
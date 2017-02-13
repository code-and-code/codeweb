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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'free','namespace' => 'Free','as' => 'free.'], function () {

    Route::get('/create',    'BankSlipController@create')->name('create');
    Route::post('/generate', 'BankSlipController@generate')->name('generate');
});

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


Auth::routes(

    [

     Route::get('/', 'studentController@home'),
     Route::get('/add', 'studentController@index'),
     Route::post('/add/student', 'studentController@create'),
     Route::get('/search', 'studentController@search'),
     Route::get('/payfee', 'feeController@index'),
     Route::post('/paid/finished', 'feeController@payFee'),
     Route::get('/payments', 'feeController@searchPayment'),
     Route::get('/payments/results', 'feeController@getPayment')

    ]
);
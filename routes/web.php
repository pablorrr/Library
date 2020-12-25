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

Route::get('/', 'BookController@index')->name('book');


Route::get('/borrowed', 'BorrowedController@index')->name('borrowed');


Route::get('/borrower', 'BorrowerController@index')->name('borrower');


Route::get('/turned', 'TurnedController@index')->name('turned');


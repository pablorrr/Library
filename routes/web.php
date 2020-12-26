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

Route::group([
    'prefix' => 'borrowed',
    'as' => 'borrowed.',
], function () {
    Route::get('/', 'BorrowedController@index')->name('borrowed');
});

Route::group([
    'prefix' => 'borrower',
    'as' => 'borrower.',
], function () {
    Route::get('/', 'BorrowerController@index')->name('borrower');
});

Route::group([
    'prefix' => 'turned',
    'as' => 'turned.',
], function () {
    Route::get('/', 'TurnedController@index')->name('turned');
});


/**
 *  ADMIN ROUTE
 */

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', 'AdminController@index')->name('admin');
});


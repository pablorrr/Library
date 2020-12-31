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

Route::get('/', 'BookController@index')->name('book');
Route::get('/home', 'HomeController@index')->name('home');

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

    'middleware' => ['auth', 'check.admin.role'],
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/book', 'Admin\AdminBookController@index')->name('adminbook');
    Route::get('/borrower', 'Admin\AdminBorrowerController@index')->name('adminborrower');
    Route::get('/borrowed', 'Admin\AdminBorrowedController@index')->name('adminborrowed');
    Route::get('/turned', 'Admin\AdminTurnedController@index')->name('adminturned');
});




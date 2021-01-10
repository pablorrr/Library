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
    Route::get('/users', 'Admin\AdminUserController@index')->name('adminuser');
    Route::get('/borrowed', 'Admin\AdminBorrowedController@index')->name('adminborrowed');

});




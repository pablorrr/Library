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
Route::get('/book', 'BookController@index')->name('book');

/**
 *  BOOK CRUD ROUTES
 */


Route::get('book/{book}', 'BookController@show');


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
    Route::get('/book/create', 'Admin\AdminBookController@create')->name('adminbookcreate');
    Route::post('/book', 'Admin\AdminBookController@store')->name('adminbookstore');
    Route::put('/book/{book}', 'Admin\AdminBookController@update')->name('adminbookupdate');
    Route::get('/{book}/destroy', 'Admin\AdminBookController@destroy')->name('destroy');
    Route::get('/users', 'Admin\AdminUserController@index')->name('adminuser');
    Route::get('/borrowed', 'Admin\AdminBorrowedController@index')->name('adminborrowed');

});




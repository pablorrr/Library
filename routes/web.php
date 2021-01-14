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
Route::get('/book-rent/{book}', 'BookController@rent')->name('book.rent');

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
    //index
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/book', 'Admin\AdminBookController@index')->name('book');
    Route::get('/users', 'Admin\AdminUserController@index')->name('user');
    Route::get('/borrowed', 'Admin\AdminBorrowedController@index')->name('borrowed');
    //show method
    Route::get('/book/{book}', 'Admin\AdminBookController@show')->name('book.show');
    Route::get('/user/borrowed-table/{user}', 'Admin\AdminBorrowedController@showUser')->name('user.borrowed.table.show');
    Route::get('/book/borrowed-table/{book}', 'Admin\AdminBorrowedController@showBook')->name('book.borrowed.table.show');
    Route::get('/user/{user}', 'Admin\AdminUserController@showUser')->name('user.show');
    //edit
    Route::get('/book-edit/{book}', 'Admin\AdminBookController@edit')->name('book.edit');
    //book CRUD
    Route::get('/create-book', 'Admin\AdminBookController@create')->name('book.create');
    Route::post('/book', 'Admin\AdminBookController@store')->name('book.store');
    Route::put('/book/{book}', 'Admin\AdminBookController@update')->name('book.update');
    Route::get('/{book}/destroy', 'Admin\AdminBookController@destroy')->name('book.destroy');
    Route::get('/settings', 'Admin\AdminSettingsController@index')->name('user.settings');
    Route::put('/settings', 'Admin\AdminSettingsController@update')->name('user.update');


});




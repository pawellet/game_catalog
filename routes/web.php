<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Books\BookController@dashboard')->name('dashboard');




Route::prefix('books')->name('books.')->namespace('App\Http\Controllers\Books')->group(function () {

    Route::get('/', 'BookController@list')->name('list');


    Route::get('/bestsellers', 'BookController@bestsellers')->name('bestsellers');

    Route::get('/show/{id}', 'BookController@show')->whereNumber('id')->name('show');

    Route::get('/promotions', 'BookController@promotion')->name('promotions');
});



Route::prefix('authors')->name('authors.')->namespace('App\Http\Controllers\Authors')->group(function () {

    Route::get('/', 'AuthorController@list')->name('list');
});


Route::prefix('eloquent')->name('eloquent.')->namespace('App\Http\Controllers\Eloquent')->group(function () {

    Route::get('/', 'EloquentController@list')->name('list');


    Route::get('/bestsellers', 'EloquentController@bestsellers')->name('bestsellers');

    Route::get('/show/{id}', 'EloquentController@show')->whereNumber('id')->name('show');

    Route::get('/promotions', 'EloquentController@promotions')->name('promotions');

    Route::get('/authors', 'EloquentController@authors')->name('authors');
});

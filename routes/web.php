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


Auth::routes();

Route::get('/', 'BookController@index') -> name('book.index');

Route::get('/api/books/all', 'BookapiController@getAllBook') -> name('book.api.all');

Route::get('/api/books/idis', 'BookapiController@getIdBook') -> name('book.api.id');

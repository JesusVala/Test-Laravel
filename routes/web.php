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

Route::resource('books', 'BookController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'BookController@index')->name('books.index');

Route::get('/', function () {
    if(Auth::check()) {
        return redirect()->route('books.index');
    }

    return view('welcome');
});

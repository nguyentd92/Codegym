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
Route::get('/', function() { return view('index');});

Route::prefix('blog')->group(function() {

    Route::get('/', function () { return view('blog.index'); })->name('blog.index');

    Route::get('add', 'BlogController@add')->name('blog.add');

    Route::put('add', 'BlogController@store')->name('blog.store');

    Route::get('list', 'BlogController@list')->name('blog.list');

    Route::get('modify', 'BlogController@modify')->name('blog.modify');

    Route::get('show/{id}', 'BlogController@showById')->name('blog.show');

    Route::get('edit/{id?}', 'BlogController@edit')->name('blog.edit');

    Route::put('edit/{id?}', 'BlogController@update')->name('blog.update');

    Route::get('delete/{id}', 'BlogController@delete')->name('blog.delete');

    Route::delete('delete', 'BlogController@destroy')->name('blog.destroy');
});

Route::prefix('login')->group(function() {

    Route::get('/', 'LoginController@loginForm')->name('login.form');

    Route::post('/post', 'LoginController@loginPost')->name('login.post');

});




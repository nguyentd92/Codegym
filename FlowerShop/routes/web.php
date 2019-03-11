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

Route::get('/', function() {
    return redirect()->route('index');
});

Route::get('index', 'ShopController@index')->name('index');

Route::get('cart', 'ShopController@showCart')->name('cart');

Route::get('index/{id}', 'ShopController@showProduct')->name('show');

Route::get('receipt/{id}', 'ShopController@receipt')->name('receipt');

Route::put('cart', 'ShopController@buy')->name('buy');

Route::prefix('admin')->group(function(){

    Route::get('/', 'AdminController@home')->name('admin.home');

    Route::get('create', 'AdminController@create')->name('admin.create');

    Route::put('create', 'AdminController@store')->name('admin.store');

    Route::get('modify', 'AdminController@modify')->name('admin.modify');

    Route::get('edit/{id}', 'AdminController@edit')->name('admin.edit');

    Route::put('edit/{id}', 'AdminController@update')->name('admin.update');

    Route::get('destroy/{id}', 'AdminController@destroy')->name('admin.destroy');
});

Route::prefix('manager')->group(function(){

    Route::get('orderList', 'ManagerController@orderList')->name('manager.orderlist');
});

Route::prefix('Order')->group(function(){

});

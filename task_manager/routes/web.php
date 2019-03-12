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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('customers')->group(function () {

    Route::get('/', 'CustomerController@index')->name('getCustomers');
  
    Route::get('create', 'CustomerController@create')->name('customers.create');
  
    Route::post('store', 'CustomerController@store')->name('customers.store');
  
    Route::get('{id}/show', 'CustomerController@show');
  
    Route::get('{id}/edit', 'CustomerController@edit');

    Route::post('{key}/edit', 'CustomerController@update');
  
    Route::delete('/', 'CustomerController@delete' );
  });

  Route::group(['prefix'=>'tasks','middleware'=>'auth'], function() {

      Route::get('/', 'TasksController@index')->name('tasks.index');

      Route::get('create', 'TasksController@create')->name('tasks.create');

      Route::put('store', 'TasksController@store')->name('tasks.store');

      Route::get('modify', 'TasksController@modify')->name('tasks.modify');

      Route::get('{taskId}', 'TasksController@show')->name('tasks.show');

      Route::get('{taskId}/edit', 'TasksController@edit')->name('tasks.edit');

      Route::put('{taskId}/update','TasksController@update')->name('tasks.update');

      Route::delete('{taskId}/destroy', 'TasksController@destroy')->name('tasks.destroy');
      
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

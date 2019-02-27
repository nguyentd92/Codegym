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
  
    Route::post('/', 'CustomerController@delete' );
  });

  Route::prefix('tasks')->group(function() {
      
      Route::get('/', 'TasksController@index')->name('tasks.index');

      Route::get('create', 'TasksController@create')->name('tasks.create');

      Route::post('store', 'TasksController@store')->name('tasks.store');

      Route::get('tasks/{taskId}', 'TasksController@show');

      Route::get('tasks/{taskId}/edit', 'TasksController@edit');

      Route::put('tasks/{taskId}','TasksController@update');

      Route::delete('tasks/{photo}', 'TasksController@destroy');
      
  });

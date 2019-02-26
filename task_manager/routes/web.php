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


Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');
  
    Route::get('create', 'CustomerController@create');
  
    Route::post('store', 'CustomerController@store');
  
    Route::get('{id}/show', 'CustomerController@show');
  
    Route::get('{id}/edit', 'CustomerController@edit');
  
    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });
  
    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
  });

  Route::prefix('tasks')->group(function() {
      
      Route::get('index', 'TaskController@index');

      Route::get('create', 'TasksController@create');

      Route::post('tasks', 'TasksController@store');

      Route::get('tasks/{taskId}', 'TasksController@show');

      Route::get('tasks/{taskId}/edit', 'TasksController@edit');

      Route::put('tasks/{taskId}','TasksController@update');

      Route::delete('tasks/{photo}', 'TasksController@destroy');
      
  });

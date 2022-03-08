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
//Route::get('/todo','TodoController@display');
Route::post('/add_data', 'TodoController@save');

Route::get('/', 'TodoController@index');

Route::resource('todo', 'TodoController');

Route::post('/deletetitle', 'DeleteController@destroyTitle')->name('deletetitle');


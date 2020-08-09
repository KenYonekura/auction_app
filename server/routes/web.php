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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('items', 'ItemController');
 // リソースを使用しない場合
 // Route::get('/items','ItemController@index');
 // Route::get('/items/create', 'ItemController@new');
 // Route::post('/items','ItemController@store');
 // Route::get('/items/{id}','ItemController@show');
 // Route::get('/items/{id}/edit','ItemController@show');
 // Route::get('/items/{id}/edit','ItemController@edit');
 // Route::patch('/items/{id}','ItemController@update');
 // Route::delete('/items/{id}','ItemController@destroy');
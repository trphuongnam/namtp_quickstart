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

Route::get('/', 'App\Http\Controllers\TaskController@index')->name("index");

Route::post('/create', 'App\Http\Controllers\TaskController@add');

Route::get('del/{id}', 'App\Http\Controllers\TaskController@del')->where("id", "[0-9]+");

Route::get("/task", "App\Http\Controllers\TaskController@all");
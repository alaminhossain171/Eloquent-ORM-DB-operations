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

Route::get('/','studentController@showData');
Route::get('/count','studentController@countData');
Route::get('/update','studentController@upDateName');
Route::get('/insert','studentController@insertData');
Route::get('/show','examMarksController@showData');
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
/**Home*/
Route::get('home','BasicController@home');
/**About*/
Route::get('about','BasicController@about');
/**Service*/
Route::get('service','BasicController@service');
/**Portfolio*/
Route::get('portfolio','BasicController@portfolio');
/**Contact*/
Route::get('contact','BasicController@contact');
/**login*/
Route::get('login','BasicController@login');
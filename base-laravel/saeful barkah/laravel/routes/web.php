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


Route::get('/','HomeController@home');
Route::get('/about','AboutController@about');
Route::get('/service','ServiceController@service');
Route::get('/portfolio','PortfolioController@portfolio');
Route::get('/contact','ContactController@contact');

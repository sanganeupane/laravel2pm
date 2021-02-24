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
Route::get('/home',"ApplicationController@home")->name('home');
Route::get('/about',"ApplicationController@about")->name('about');
Route::get('/contact',"ApplicationController@contact")->name('contact');
Route::post('/contact',"ApplicationController@contactAction")->name('contactAction');

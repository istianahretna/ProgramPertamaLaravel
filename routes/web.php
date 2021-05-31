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

Route::get('/signup', 'AuthController@getSignup')-> name('signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignup')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');;
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/home', function(){ return view('home'); })->middleware('auth')->name('home');
Route::get('/logout', 'AuthController@Logout')->middleware('auth')->name('logout');
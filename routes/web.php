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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/homemaster', 'HomeController@master');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('signup');
});

Route::get('/home2', function () {
    return view('home2');
});
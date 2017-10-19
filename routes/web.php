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
    return view('/mybio2/index');
});

Route::get('/about', function () {
    return view('/mybio2/about');
});

Route::get('/skills', function () {
    return view('/mybio2/skills');
});

Route::get('/portfolio', function () {
    return view('/mybio2/portfolio');
});

Route::get('/coming_soon', function () {
    return view('/mybio2/coming_soon');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

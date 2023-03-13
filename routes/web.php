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
Route::get('/remmitance', function () {
    return view('remitance');
});
Route::get('/services', function () {
    return view('onlineservice');
});
Route::get('/cards', function () {
    return view('card');
});
Route::get('/vacancy', function () {
    return view('vacancy');
});

Route::get('/cotumerloans', function () {
    return view('costumerloans');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

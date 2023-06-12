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
Route::get('/deposits', function () {
    return view('deposites');
});
Route::get('/term', function () {
    return view('termdeposits');
});
Route::get('/show', function () {
    return view('searchShow');
});
Route::get('/savings', function () {
    return view('savingaccounts');
});
Route::get('/payroll', function () {
    return view('payrollservices');
});
Route::get('/onlineservices', function () {
    return view('onlineservices');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/mortgate', function () {
    return view('mortgateloan');
});
Route::get('/loans', function () {
    return view('loans');
});
Route::get('/loanscalc', function () {
    return view('loanscalculator');
});
Route::get('/donish', function () {
    return view('loanproductdonish');
});
Route::get('/knowladge', function () {
    return view('knowladgebase');
});
Route::get('/housingdeposit', function () {
    return view('housingdeposit');
});
Route::get('/filiali', function () {
    return view('filiali');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/expresscredit', function () {
    return view('expresscredit');
});
Route::get('/diyordeposit', function () {
    return view('diyordeposit');
});
Route::get('/depositeasy', function () {
    return view('depositeasy');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/compliance', function () {
    return view('compliance');
});
Route::get('/childdeposit', function () {
    return view('childdeposit');
});
Route::get('/businessloan', function () {
    return view('businessloan');
});
Route::get('/bankomati', function () {
    return view('bankomati');
});
Route::get('/bankfinstatement', function () {
    return view('bankfinstatement');
});
Route::get('/auto', function () {
    return view('autoloan');
});
Route::get('/agrecultureloan', function () {
    return view('agrecultureloan');
});
Route::get('/abouts', function () {
    return view('abouts');
});
Route::get('/aboutplaceholders', function () {
    return view('aboutplaceholders');
});
Route::get('/costumerloans', function () {
    return view('costumerloans');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::apiResource('sliders' , 'SLiderController');
Route::apiResource('remitance' , 'RemitanceController');
Route::apiResource('products' , 'ProductsController');


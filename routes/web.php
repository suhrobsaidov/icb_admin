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
    return view('welcome2');


});



// Route::get('/wel', function () {
//     return view('welcome2');


// });
Route::get('/bankloans', function () {
    return view('bankloans');
});
Route::get('/businessloans', function () {
    return view('businessloan');
});
Route::get('/remmitance', function () {
    return view('remitance');
});
Route::get('/onlineservice', function () {
    return view('onlineservice');
});
Route::get('/card', function () {
    return view('card');
});
Route::get('/vacancy', function () {
    return view('vacancy');
});
Route::get('/deposits', function () {
    return view('deposites');
});
Route::get('/termdeposits', function () {
    return view('termdeposits');
});
Route::get('/show', function () {
    return view('searchShow');
});
Route::get('/savingaccounts', function () {
    return view('savingaccounts');
});
Route::get('/payroll', function () {
    return view('payrollservices');
});

Route::get('/news', function () {
    return view('news');
});
Route::get('/mortgateloan', function () {
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
Route::get('/depositcalc', function () {
    return view('depositcalc');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/expresscredit', function () {
    return view('expresscredit');
});
Route::get('/diyor', function () {
    return view('diyordeposit');
});
Route::get('/easydeposit', function () {
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
Route::get('/autoloan', function () {
    return view('autoloan');
});
Route::get('/agricultureloan', function () {
    return view('agrecultureloan');
});
Route::get('/abouts', function () {
    return view('abouts');
});
Route::get('/aboutplaceholders', function () {
    return view('aboutplaceholders');
});
Route::get('/cost0merloans', function () {
    return view('costumerloans');
});
Route::get('/consumerloans', function () {
    return view('consumerloans');
});
Route::get('/finantialstatement', function () {
    return view('finstatement');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::apiResource('sliders' , 'SLiderController');
Route::apiResource('remitance' , 'RemitanceController');
Route::apiResource('products' , 'ProductsController');

//for admin
Route::get('/admin/header', [App\Http\Controllers\HeaderController::class, 'index'])->name('header');
Route::post('/admin/header', [App\Http\Controllers\HeaderController::class, 'store']);
Route::get('/edit-header/{id}', [App\Http\Controllers\HeaderController::class, 'edit'])->name('edit-header');
Route::put('/update-header/{id}', [App\Http\Controllers\HeaderController::class, 'update'])->name('update-header');
Route::delete('/delete-header/{id}' , [App\Http\Controllers\HeaderController::class, 'destroy'])->name('delete-header');

Route::get('/admin/card', [App\Http\Controllers\CardController::class, 'index'])->name('card');
Route::post('/save-card', [App\Http\Controllers\CardController::class, 'store'])->name('save-card');
Route::get('/edit-card/{id}', [App\Http\Controllers\CardController::class, 'edit'])->name('edit-card');
Route::put('/update-card/{id}', [App\Http\Controllers\CardController::class, 'update'])->name('update-card');
Route::delete('/delete-card/{id}' , [App\Http\Controllers\CardController::class, 'destroy'])->name('delete-card');

Route::get('/admin/bankService', [App\Http\Controllers\BankServiceController::class, 'index'])->name('bankService');
Route::post('/save-bankService', [App\Http\Controllers\BankServiceController::class, 'store'])->name('save-bankService');
Route::get('/edit-bankService/{id}', [App\Http\Controllers\BankServiceController::class, 'edit'])->name('edit-bankService');
Route::put('/update-bankService/{id}', [App\Http\Controllers\BankServiceController::class, 'update'])->name('update-bankService');
Route::delete('/delete-bankService/{id}' , [App\Http\Controllers\BankServiceController::class, 'destroy'])->name('delete-bankService');

Route::get('/admin/fAQ', [App\Http\Controllers\FAQController::class, 'index'])->name('fAQ');
Route::post('/save-fAQ', [App\Http\Controllers\FAQController::class, 'store'])->name('save-fAQ');
Route::get('/edit-fAQ/{id}', [App\Http\Controllers\FAQController::class, 'edit'])->name('edit-fAQ');
Route::put('/update-fAQ/{id}', [App\Http\Controllers\FAQController::class, 'update'])->name('update-fAQ');
Route::delete('/delete-fAQ/{id}' , [App\Http\Controllers\FAQController::class, 'destroy'])->name('delete-fAQ');

Route::get('admin/bankProducts', [App\Http\Controllers\BankProductsController::class, 'index'])->name('bankProducts');
Route::post('/save-bankProducts', [App\Http\Controllers\BankProductsController::class, 'store'])->name('save-bankProducts');
Route::get('/edit-bankProducts/{id}', [App\Http\Controllers\BankProductsController::class, 'edit'])->name('edit-bankProducts');
Route::put('/update-bankProducts/{id}', [App\Http\Controllers\BankProductsController::class, 'update'])->name('update-bankProducts');
Route::delete('/delete-bankProducts/{id}' , [App\Http\Controllers\BankProductsController::class, 'destroy'])->name('delete-bankProducts');

Route::get('/admin/currentOffers', [App\Http\Controllers\CurrentOffersController::class, 'index'])->name('currentOffers');
Route::post('/save-currentOffers', [App\Http\Controllers\CurrentOffersController::class, 'store'])->name('save-currentOffers');
Route::get('/edit-currentOffers/{id}', [App\Http\Controllers\CurrentOffersController::class, 'edit'])->name('edit-currentOffers');
Route::put('/update-currentOffers/{id}', [App\Http\Controllers\CurrentOffersController::class, 'update'])->name('update-currentOffers');
Route::delete('/delete-currentOffers/{id}' , [App\Http\Controllers\CurrentOffersController::class, 'destroy'])->name('delete-currentOffers');

Route::get('/admin/depositCards', [App\Http\Controllers\DepositCardsController::class, 'index'])->name('depositCards');
Route::post('/save-depositCards', [App\Http\Controllers\DepositCardsController::class, 'store'])->name('save-depositCards');
Route::get('/edit-depositCards/{id}', [App\Http\Controllers\DepositCardsController::class, 'edit'])->name('edit-depositCards');
Route::put('/update-depositCards/{id}', [App\Http\Controllers\DepositCardsController::class, 'update'])->name('update-depositCards');
Route::delete('/delete-depositCards/{id}' , [App\Http\Controllers\DepositCardsController::class, 'destroy'])->name('delete-depositCards');

Route::get('/admin/bankLoans', [App\Http\Controllers\BankLoansController::class, 'index'])->name('bankLoans');
Route::post('/save-bankLoans', [App\Http\Controllers\BankLoansController::class, 'store'])->name('save-bankLoans');
Route::get('/edit-bankLoans/{id}', [App\Http\Controllers\BankLoansController::class, 'edit'])->name('edit-bankLoans');
Route::put('/update-bankLoans/{id}', [App\Http\Controllers\BankLoansController::class, 'update'])->name('update-bankLoans');
Route::delete('/delete-bankLoans/{id}' , [App\Http\Controllers\BankLoansController::class, 'destroy'])->name('delete-bankLoans');

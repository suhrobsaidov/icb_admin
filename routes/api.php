<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//for admin
Route::get('/admin/header', [App\Http\Controllers\HeaderController::class, 'index'])->name('header');
Route::post('admin/header', [App\Http\Controllers\HeaderController::class, 'store']);
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

Route::get('/admin/remittances', [App\Http\Controllers\RemittancesController::class, 'index'])->name('remittances');
Route::post('admin/save-remittances', [App\Http\Controllers\RemittancesController::class, 'store'])->name('save-remittances');
Route::get('/edit-remittances/{id}', [App\Http\Controllers\RemittancesController::class, 'edit'])->name('edit-remittances');
Route::put('/update-remittances/{id}', [App\Http\Controllers\RemittancesController::class, 'update'])->name('update-remittances');
Route::delete('/delete-remittances/{id}' , [App\Http\Controllers\RemittancesController::class, 'destroy'])->name('delete-remittances');

Route::get('/admin/knowledgeBase', [App\Http\Controllers\KnowledgeBaseController::class, 'index'])->name('knowledgeBase');
Route::post('admin/save-knowledgeBase', [App\Http\Controllers\KnowledgeBaseController::class, 'store'])->name('save-knowledgeBase');
Route::get('/edit-knowledgeBase/{id}', [App\Http\Controllers\KnowledgeBaseController::class, 'edit'])->name('edit-knowledgeBase');
Route::put('/update-knowledgeBase/{id}', [App\Http\Controllers\KnowledgeBaseController::class, 'update'])->name('update-knowledgeBase');
Route::delete('/delete-knowledgeBase/{id}' , [App\Http\Controllers\KnowledgeBaseController::class, 'destroy'])->name('delete-knowledgeBase');

Route::get('/admin/onlineServices', [App\Http\Controllers\OnlineServicesController::class, 'index'])->name('onlineServices');
Route::post('save-onlineServices', [App\Http\Controllers\OnlineServicesController::class, 'store'])->name('save-onlineServices');
Route::get('/edit-onlineServices/{id}', [App\Http\Controllers\OnlineServicesController::class, 'edit'])->name('edit-onlineServices');
Route::put('/update-onlineServices/{id}', [App\Http\Controllers\OnlineServicesController::class, 'update'])->name('update-onlineServices');
Route::delete('/delete-onlineServices/{id}' , [App\Http\Controllers\OnlineServicesController::class, 'destroy'])->name('delete-onlineServices');

Route::get('loansCalculatorForm', [App\Http\Controllers\LoansCalculatorFormController::class, 'index']);
Route::post('save_loansCalculatorForm', [App\Http\Controllers\LoansCalculatorFormController::class, 'store']);

Route::get('depositCalculatorForm', [App\Http\Controllers\DepositCalculatorFormController::class, 'index']);
Route::post('save-depositCalculatorForm', [App\Http\Controllers\DepositCalculatorFormController::class, 'store']);

Route::get('payrollServicesForm', [App\Http\Controllers\PayrollServicesFormController::class, 'index']);
Route::post('save-payrollServicesForm', [App\Http\Controllers\PayrollServicesFormController::class, 'store']);


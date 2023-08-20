<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/','HomePageController@index');
Route::get('bankloans' ,'view\BankloansController@index');
Route::get('remmitance' , 'view\RemmitanceController@index');
Route::get('onlineservice' , 'view\OnlineserviceController@index');
Route::get('card' , 'view\CardController@index');
Route::get('deposits' , 'view\DepositController@index');
Route::get('vacancy' , 'view\VacancyController@index');
Route::get('termdeposits' , 'view\TermdepositsController@index');
Route::get('savingaccounts' , 'view\SavingaccController@index');
Route::get('payroll' , 'view\PayrollController@index');
Route::get('news' , 'view\NewsController@index');
Route::get('mortgateloan' , 'view\MortgateController@index');
Route::get('easydeposit' , 'view\EasydepositController@index');
Route::get('diyor' , 'view\DiyorController@index');
Route::get('expresscredit' , 'view\ExpresscreditController@index');
Route::get('faq' , 'view\FaqController@index');
Route::get('depositcalc' , 'view\DepositcalcController@index');
Route::get('filiali' , 'view\BranchController@index');
Route::get('housingdeposit' , 'view\HousingController@index');
Route::get('knowladge' , 'view\KnowladgeController@index');
Route::get('donish' , 'view\DonishController@index');
Route::get('loanscalc' , 'view\LoanscalcController@index');
Route::get('loans' , 'view\LoansController@index');
Route::get('contacts' , 'view\ContactsController@index');
Route::get('compliance' , 'view\ComplianceController@index');
Route::get('childdeposit' , 'view\ChilddepController@index');
Route::get('businessloan' , 'view\BusinessloanController@index');
Route::get('bankomati' , 'view\BankomatiController@index');
Route::get('bankfinstatement' , 'view\FinstateController@index');
Route::get('autoloan' , 'view\AutoloanController@index');
Route::get('agricultureloan' , 'view\AgricultureController@index');
Route::get('abouts' , 'view\AboutsController@index');
Route::get('aboutplaceholders' , 'view\PlaceholdersController@index');
Route::get('costomerloans' , 'view\CustomerloansController@index');
Route::get('consumerloans' , 'view\ConsumersLoansController@index');
Route::get('finantialstatement' , 'view\FinantialstatementController@index');





Route::get('getusers', 'API\UserController@index');
Route::get('getheader', 'API\HeaderController@index');
Route::get('getbankproducts', 'API\BankProductsController@index');
Route::get('getcards', 'API\CardsController@index');
Route::get('getcurrentoffers', 'API\CurrentOffersController@index');
Route::get('getcalculators', 'API\CalculatorsController@index');
Route::get('getbankservices', 'API\BankServicesController@index');
Route::get('getdepositcards', 'API\DepositCardsController@index');
Route::get('getbankloans', 'API\BankLoansController@index');
Route::get('getbankcards', 'API\BankCardsController@index');
Route::get('getremittancescards', 'API\RemittancesCardsController@index');
Route::get('getloanscalculatorform', 'API\LoansCalculatorFormController@index');
Route::get('getdepositcalculatorform', 'API\DepositCalculatorFormController@index');
Route::get('getonlineservices', 'API\OnlineServicesController@index');
Route::get('getnews', 'API\NewsController@index');
Route::get('getfeedback', 'API\FeedbackController@index');
Route::get('getwork', 'API\WorkController@index');



Route::get('/show', function () {
    return view('searchShow');
});
Auth::routes();
Route::get('users' , 'UsersController@index');
Route::get('mainPage' , 'MainpageController@index');
Route::get('bankproducts','BankproductsController@index');
Route::get('deposit','DepositsController@index');
Route::get('header','HeaderController@index');
Route::get('carts','CardController@index');
Route::get('currentoffers','CurrentOffersController@index');
Route::get('calculators','CalculatorsController@index');
Route::get('bankservices','BankServicesController@index');
Route::get('depositcards','DepositscardsController@index');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');
//Route::get('','');


Route::get('/home', 'HomeController@index')->name('home');
Route::apiResource('sliders' , 'SLiderController');
Route::apiResource('remitance' , 'RemitanceController');
Route::apiResource('products' , 'ProductsController');



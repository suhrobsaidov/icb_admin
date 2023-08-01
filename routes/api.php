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


Route::post('admin/header', [App\Http\Controllers\HeaderController::class, 'store']);
Route::get('/edit-header/{id}', [App\Http\Controllers\HeaderController::class, 'edit'])->name('edit-header');
Route::put('/update-header/{id}', [App\Http\Controllers\HeaderController::class, 'update'])->name('update-header');
Route::delete('/delete-header/{id}' , [App\Http\Controllers\HeaderController::class, 'destroy'])->name('delete-header');



<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PretController;


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
// Route::resources('/pret','PretController::class');
Route::get('/pret',[\App\Http\Controllers\PretController::class,'index']);
Route::get('/pret/new',[\App\Http\Controllers\PretController::class,'create']);
Route::post('/pret/add',[\App\Http\Controllers\PretController::class,'store']);
Route::get('/pret/{id}',[\App\Http\Controllers\PretController::class,'show']);
Route::get('/pret/edit/{id}',[\App\Http\Controllers\PretController::class,'edit']);
Route::post('/pret/update/{id}',[\App\Http\Controllers\PretController::class,'update']);
Route::get('/pret/delete/{id}',[\App\Http\Controllers\PretController::class,'destroy']);

Route::get('/client',[\App\Http\Controllers\ClientController::class,'index']);
Route::get('/client/new',[\App\Http\Controllers\ClientController::class,'create']);
Route::post('/client/add',[\App\Http\Controllers\ClientController::class,'store']);
Route::get('/client/{id}',[\App\Http\Controllers\ClientController::class,'show']);
Route::get('/client/delete/{id}',[\App\Http\Controllers\ClientController::class,'delete']);

Route::get('/responsable',[\App\Http\Controllers\ResponsableController::class,'index']);
Route::get('/responsable/new',[\App\Http\Controllers\ResponsableController::class,'create']);
Route::post('/responsable/add',[\App\Http\Controllers\ResponsableController::class,'store']);
Route::get('/responsable/{id}',[\App\Http\Controllers\ResponsableController::class,'show']);
Route::get('/responsable/delete/{id}',[\App\Http\Controllers\ResponsableController::class,'delete']);

Route::get('/mode_payement',[\App\Http\Controllers\ModePayementController::class,'index']);
Route::get('/mode_payement/{id}',[\App\Http\Controllers\ModePayementController::class,'show']);
Route::get('/mode_payement/new',[\App\Http\Controllers\ModePayementController::class,'create']);
Route::get('/mode_payement/add',[\App\Http\Controllers\ModePayementController::class,'store']);
Route::get('/mode_payement/delete/{id}',[\App\Http\Controllers\ModePayementController::class,'delete']);

Route::get('/RepayementFrequency',[\App\Http\Controllers\RepayementFrequencyController::class,'index']);
Route::get('/RepayementFrequency/{id}',[\App\Http\Controllers\RepayementFrequencyController::class,'show']);
Route::get('/RepayementFrequency/new',[\App\Http\Controllers\RepayementFrequencyController::class,'create']);
Route::get('/RepayementFrequency/add',[\App\Http\Controllers\RepayementFrequencyController::class,'store']);
Route::get('/RepayementFrequency/delete/{id}',[\App\Http\Controllers\RepayementFrequencyController::class,'delete']);

Route::get('/Repayement',[\App\Http\Controllers\RepayementController::class,'index']);
Route::get('/Repayement/{id}',[\App\Http\Controllers\RepayementController::class,'show']);
Route::get('/Repayement/new',[\App\Http\Controllers\RepayementController::class,'create']);
Route::get('/Repayement/add',[\App\Http\Controllers\RepayementController::class,'store']);
Route::get('/Repayement/delete/{id}',[\App\Http\Controllers\RepayementController::class,'delete']);
<?php

use App\Http\Controllers\PretController;
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
// Route::resources('/pret','PretController::class');
Route::get('/pret',[PretController::class,'index']);
Route::get('/pret/new',[PretController::class,'create']);
Route::post('/pret/add',[PretController::class,'store']);
Route::get('/pret/{id}',[PretController::class,'show']);
Route::get('/pret/edit/{id}',[PretController::class,'edit']);
Route::post('/pret/update/{id}',[PretController::class,'update']);
Route::get('/pret/delete/{id}',[PretController::class,'destroy']);

Route::get('/client',[ClientController::class,'index']);
Route::get('/client/{id}',[ClientController::class,'show']);
Route::get('/client/new',[ClientController::class,'create']);
Route::get('/client/add',[ClientController::class,'store']);
Route::get('/client/delete/{id}',[ClientController::class,'delete']);

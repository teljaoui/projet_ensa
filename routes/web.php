<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FactShowController;
use App\Http\Controllers\SalleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [SalleController::class , 'home'])->name("home");

Route::prefix('/admin')->group(function(){
    Route::get('/prof' , [SalleController::class , 'profview'])->name("profliste");
});





Route::get('/login' , [AuthController::class , 'login']);

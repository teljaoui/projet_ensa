<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InerfaceController;
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

Route::get('/', [ InerfaceController::class, 'home'])->name("home");
Route::get('/salles' , [InerfaceController::class , 'salles'])->name("salles");
Route::get('/salle', [InerfaceController::class , 'salle'])->name("salle");

Route::prefix('/admin')->group(function () {
    Route::get('/', [ AdminController::class, 'homeadmin'])->name("admin");

    Route::prefix('/prof')->group(function () {
        Route::get('/', [ AdminController::class, 'profview'])->name("profliste");
        Route::get('/add' , [ AdminController::class , 'profadd' ])->name('profadd');
        Route::get('/update' , [ AdminController::class , 'profup'])->name('profup');
    });
});

Route::get('/login', [AuthController::class, 'login']);

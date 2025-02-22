<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactShowController;
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

Route::get('/', [FactShowController::class , 'home'])->name("home");

Route::prefix('/clients')->group(function(){
    Route::get('/' , [FactShowController::class , 'allclient'])->name("clients");
    Route::get('/ajouter' , [FactShowController::class , 'addclient'])->name("ajouterclient");
    Route::get('/update' , [FactShowController::class , 'updateClient'])->name('modifiéclient');
    Route::get('/detail' , [FactShowController::class , 'detailclient'])->name('detailclient');
});

Route::prefix('/produits')->group(function(){
    Route::get('/' , [FactShowController::class , 'allproducts'])->name("produits");
    Route::get('/ajouter' , [FactShowController::class , 'addproduct'])->name("ajouterproduit");
    Route::get('/update' , [FactShowController::class , 'updateproduct'])->name("modifiéproduit");
    Route::get('/detail' , [FactShowController::class , 'detailproduit'])->name('detailproduit');
});

Route::prefix('/devis')->group(function(){
    Route::get('/' , [FactShowController::class , 'alldevis'])->name('devis');
    Route::get('/ajouter' , [FactShowController::class , 'adddevis'])->name("ajouterdevis");
    Route::get('/update' , [FactShowController::class , 'updatedevis'])->name("modifiédevis");
    Route::get('/detail' , [FactShowController::class , 'detaildevis'])->name('detaildevis');
});


Route::prefix('/factures')->group(function(){
    Route::get('/' , [FactShowController::class , 'allfacture'])->name('factures');
    Route::get('/ajouter' , [FactShowController::class , 'addfacture'])->name("ajouterfacture");
    Route::get('/update' , [FactShowController::class , 'updatefacture'])->name("modifiéfacture");
    Route::get('/detail' , [FactShowController::class , 'detailfacture'])->name('detailfacture');
});


Route::prefix('/admin')->group( function(){
    Route::get('/' , [AdminController::class , 'compte'])->name('compte');
});

Route::get('/login' , [AdminController::class , 'login'])->name('login');
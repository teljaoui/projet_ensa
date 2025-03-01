<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InerfaceController;
use App\Http\Controllers\ServerController;
use App\Http\Middleware\LoginAdminMiddleware;
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

Route::get('/', [InerfaceController::class, 'home'])->name("home");
Route::get('/salles', [InerfaceController::class, 'salles'])->name("salles");
Route::get('/salle', [InerfaceController::class, 'salle'])->name("salle");

Route::prefix('/admin')->middleware(LoginAdminMiddleware::class)->group(function () {
    Route::get('/', [AdminController::class, 'homeadmin'])->name("admin");

    Route::prefix('/prof')->group(function () {
        Route::get('/', [AdminController::class, 'profview'])->name("profliste");
        Route::get('/add', [AdminController::class, 'profadd'])->name('profadd');
        Route::get('/update/{id}', [AdminController::class, 'profup'])->name('profup');
    });
    Route::prefix('/salles')->group(function () {
        Route::get('/', [AdminController::class, 'salles'])->name("salles");
        Route::get('/add', [AdminController::class, 'salleadd'])->name("salleadd");
        Route::get('/update/{id}', [AdminController::class, 'salleup'])->name("salleup");
    });
    Route::prefix('horaire')->group(function () {
        Route::get('/', [AdminController::class, 'horaires'])->name("horaires");
        Route::get('/add', [AdminController::class, 'horaireadd'])->name("horaireadd");
    });
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

/*Admin auth */
Route::get('/admin/login', [AdminController::class, 'login_admin'])->name("login_admin");
Route::post('/loginpost', [AdminController::class, 'loginpost'])->name('loginpost');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout_admin');
/*Admin auth ends */

/*prof server */
Route::post('/addprofpost', [ServerController::class, 'addprofpost'])->name('addprofpost');
Route::post('/upprofpost', [ServerController::class, 'upprofpost'])->name('upprofpost');
Route::get('/deleteprof/{id}', [ServerController::class, 'deleteprof'])->name('deleteprof');

/*prof server  ends*/

/*salles server */

Route::post('/addsallepost', [ServerController::class, 'addsallepost'])->name('addsallepost');
Route::post('/upsallepost', [ServerController::class, 'upsallepost'])->name('upsallepost');
Route::get('/deletesalle/{id}', [ServerController::class, 'deletesalle'])->name('deletesalle');

/*salles server  ends*/

/*time */
Route::post('addtimepost', [ServerController::class, 'addtimepost'])->name('addtimepost');
Route::get('/deletetime/{id}', [ServerController::class, 'deletetime'])->name('deletetime');
/*tims ends*/
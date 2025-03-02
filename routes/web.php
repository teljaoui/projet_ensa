<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InerfaceController;
use App\Http\Controllers\ServerController;
use App\Http\Middleware\LoginAdminMiddleware;
use App\Http\Middleware\LoginProfMiddleware;
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


Route::get('/', [InerfaceController::class, 'home'])->name("home")->middleware(LoginProfMiddleware::class);
Route::get('/salles', [InerfaceController::class, 'salles'])->name("salles_interface")->middleware(LoginProfMiddleware::class);
Route::get('/salle/{id}', [InerfaceController::class, 'salle'])->name("salle")->middleware(LoginProfMiddleware::class);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginprofpost', [AuthController::class, 'loginprofpost'])->name('loginprofpost');

/*booking */

Route::post('/select_date' , [InerfaceController::class  , 'select_date'])->name('select_date');
Route::post('/booking_post' , [InerfaceController::class , 'booking_post'])->name('booking_post');
Route::get('/delete_booking/{id}', [InerfaceController::class , 'delete_booking'])->name('delete_booking');
Route::get('/back_date' , [InerfaceController::class , 'back_date'])->name('back_date');

/*booking ends*/


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
    Route::prefix('/horaire')->group(function () {
        Route::get('/', [AdminController::class, 'horaires'])->name("horaires");
        Route::get('/add', [AdminController::class, 'horaireadd'])->name("horaireadd");
    });

    Route::get('/password', [AdminController::class, 'password'])->name("admin_password");

});


/*Admin auth */
Route::get('/admin/login', [AdminController::class, 'login_admin'])->name("login_admin");
Route::post('/loginpost', [AdminController::class, 'loginpost'])->name('loginpost');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout_admin');
Route::post('/passwordpost', [AdminController::class, 'passwordpost'])->name("passwordpost");

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
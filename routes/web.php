<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputServiceController;

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

// Example Routes
// Dari Template =======================================================
// Route::view('/', 'landing');
// Route::match(['get', 'post'], '/home', function () {
//     return view('layouts.mitra-main');
// });
// Route::view('/pages/slick', 'pages.slick');
// Route::view('/pages/datatables', 'pages.datatables');
// Route::view('/pages/blank', 'pages.blank');
// Dari Template =======================================================

Route::namespace('App\Http\Controllers')->group(function () {

    //Login
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::middleware(['auth'])->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        // Admin
        Route::get('/dashboard', function () {
            return view('pages.dashboard');
        });

        Route::get('/example', function () {
            return view('pages.dashboard');
        });

        Route::get('/rekapitulasi', function () {
            return view('pages.rekapitulasi');
        });

        // Route::get('/input-service', [InputServiceController::class, 'index'])->name('input-service');
        // Route::post('/customer-store', 'InputServiceController@store')->name('customer.store');

        Route::get('/dashboard', function () {
            return view('pages.dashboard');
        });

        // Route datamaster
        Route::resource('/datamaster-kategori', KategoriController::class);
        Route::resource('/datamaster-user', UserController::class);
        Route::resource('/datamaster-barang', BarangController::class);

        // Insert Data Customer
        Route::resource('/input-service', InputServiceController::class);
    });
});

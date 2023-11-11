<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputServiceController;
use App\Http\Controllers\RekapitulasiController;

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

        // Route datamaster
        Route::resource('/datamaster-kategori', KategoriController::class);
        
        Route::resource('/datamaster-user', UserController::class);

        Route::resource('/rekapitulasi', RekapitulasiController::class);

        // Data Service
        Route::resource('/input-service', InputServiceController::class);     
        Route::get('/input-service/{id}/detail', [InputServiceController::class, 'detail'])->name('input-service.detail');   
        Route::put('/input-service/{id}/fix', [InputServiceController::class, 'fix'])->name('input-service.fix');
        Route::put('/input-service/{id}/batal', [InputServiceController::class, 'batal'])->name('input-service.batal');
        Route::put('/input-service/{id}/proses', [InputServiceController::class, 'proses'])->name('input-service.proses');
        Route::put('/input-service/{id}/selesai', [InputServiceController::class, 'selesai'])->name('input-service.selesai');
    });
});
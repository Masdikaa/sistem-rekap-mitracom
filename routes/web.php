<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



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
Route::view('/', 'landing');
Route::match(['get', 'post'], '/home', function () {
    return view('layouts.mitra-main');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
// Dari Template =======================================================


Route::get('/example', function () {
    return view('pages.dashboard');
});
Route::get('/rekapitulasi', function () {
    return view('pages.rekapitulasi');
});
Route::get('/input-service', function () {
    return view('pages.input-service');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


Route::namespace('App\Http\Controllers')->group(function () {
    // Define routes that use controllers within the 'App\Http\Controllers' namespace

    Route::get('/datamaster/user', 'UserController@index');
    Route::get('/datamaster/kategori', 'KategoriController@index');
    Route::get('/datamaster/barang', 'BarangController@index');
   




});

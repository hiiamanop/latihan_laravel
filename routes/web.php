<?php

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
// routing default itu menggunakan tanda /
Route::get('/', function () {
    return view('landing-page');
});

Route::get('/landing-page', function () {
    return view('landing-page');
});

Route::get('/driver/index', function () {
    return view('driver.index');
});

Route::get('/pelanggan/index', function () {
    return view('pelanggan.index');
});

Route::get('/transaksi/index', function () {
    return view('transaksi.index');
});

Route::get('/add-driver', function () {
    return view('driver.add');
});

/* 
route register menggunakan cara biasa
Route::get('/register', function () {
     return view('form.register');
 });
*/

// routing menggunakan controller
route::get('register', [App\Http\Controllers\FromController::class, 'register']);
route::post('register-post', [App\Http\Controllers\FromController::class, 'postData']);

// form luas
route::get('luas-persegi-panjang', [App\Http\Controllers\FromController::class, 'formLuas']);
route::post('luas-persegi-panjang', [App\Http\Controllers\FromController::class, 'hitungLuas']);

// form nilai
route::get('nilai', [App\Http\Controllers\FromController::class, 'formNilai']);
route::post('nilai', [App\Http\Controllers\FromController::class, 'tampilNilai']);
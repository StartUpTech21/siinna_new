<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesinAntreanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TVInformasiController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/', [MesinAntreanController::class, 'mesin']);
Route::get('mesin_antrean', [MesinAntreanController::class, 'mesin']);
Route::post('mesin_antrean', [MesinAntreanController::class, 'post']);
Route::get('mesin_antrean/{id}', [MesinAntreanController::class, 'print']);

Route::get('tv_informasi', [TVInformasiController::class, 'tv']);

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [AdminController::class, 'beranda']);
    Route::get('beranda', [AdminController::class, 'beranda']);
    Route::resource('user',UserController::class);
    Route::resource('pelayanan',PelayananController::class);
});

Route::prefix('cs')->middleware('cs')->group(function(){
    Route::get('/', [CsController::class, 'beranda']);
    Route::get('antrean', [AntreanController::class, 'index']);
    Route::get('nomor_antrean_cs', [AntreanController::class, 'nomor_antrean_cs']);
    Route::get('end_nomor_antrean_cs', [AntreanController::class, 'end_nomor_antrean_cs']);
    Route::put('antrean/{id}', [AntreanController::class, 'nextNomorAntrean']);
    Route::get('beranda', [CsController::class, 'beranda']);
});

Route::prefix('teller')->middleware('teller')->group(function(){
    Route::get('/', [TellerController::class, 'beranda']);
    Route::get('antrean', [AntreanController::class, 'index']);
    Route::get('nomor_antrean_teller', [AntreanController::class, 'nomor_antrean_teller']);
    Route::get('end_nomor_antrean_teller', [AntreanController::class, 'end_nomor_antrean_teller']);
    Route::put('antrean/{id}', [AntreanController::class, 'nextNomorAntrean']);
    Route::get('beranda', [TellerController::class, 'beranda']);
});

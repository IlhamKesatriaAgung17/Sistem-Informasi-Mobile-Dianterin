<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegencyController;

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('index');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::get('kota',KotaController::class, 'kota'])->name('kota');
Route::prefix('dashboard')->group(function () {
    Route::resource('kantor', App\Http\Controllers\KantorController::class);
    Route::resource('paket', App\Http\Controllers\PaketController::class);
});
Route::post('getkota',[App\Http\Controllers\KantorController::class, 'getkota'])->name('getkota');
Route::post('getkecamatan',[App\Http\Controllers\KantorController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('getdesa',[App\Http\Controllers\KantorController::class, 'getdesa'])->name('getdesa');


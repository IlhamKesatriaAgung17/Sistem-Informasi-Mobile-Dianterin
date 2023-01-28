<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\DashboardController;


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
Route::get('/tentang', [App\Http\Controllers\LandingController::class, 'tentang'])->name('tentang');
Route::get('/hubungi-kami', [App\Http\Controllers\LandingController::class, 'kontak'])->name('hubungi-kami');

Route::get('/ongkos-kirim',[OngkirController::class, 'index'])->name('cek-ongkir');
Route::get('getCity/ajax/{id}',[OngkirController::class, 'ajax']);

Auth::routes([
    'register' => true
]);

// Route::get('kota',KotaController::class, 'kota'])->name('kota');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('kantor', App\Http\Controllers\KantorController::class);
    Route::resource('paket', App\Http\Controllers\PaketController::class);
});

Route::post('getkota',[App\Http\Controllers\KantorController::class, 'getkota'])->name('getkota');
Route::post('getkecamatan',[App\Http\Controllers\KantorController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('getdesa',[App\Http\Controllers\KantorController::class, 'getdesa'])->name('getdesa');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\MahasiswaAktif;
use App\Http\Livewire\MahasiswaTidakAktif;
use App\Http\Livewire\SemuaMahasiswa;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// <--------------------[AUTH MIDDLEWARE]------------------------>
Route::middleware(['auth:admin'])->group(function () {

    // <--------------------[DASHBOARD]------------------------>
    Route::get('/dashboard', Dashboard::class);

    // <--------------------[SEMUA MAHASISWA]------------------------>
    Route::get('/semua_mahasiswa', SemuaMahasiswa::class);

    // <--------------------[MAHASISWA AKTIF]------------------------>
    Route::get('/mahasiswa_aktif', MahasiswaAktif::class);

    // <--------------------[MAHASISWA TIDAK AKTIF]------------------------>
    Route::get('/mahasiswa_tidak_aktif', MahasiswaTidakAktif::class);

    // <--------------------[LOG OUT]------------------------>
    Route::get('/logout', [AuthController::class, 'logout']);
});

// <--------------------[GUEST MIDDLEWARE]------------------------>
Route::middleware(['guest:admin'])->group(function () {

    // <--------------------[AUTH CONTROLLER]------------------------>
    Route::controller(AuthController::class)->group(function () {

        // <--------------------[LOGIN]------------------------>
        Route::get('/auth', 'index')->name('auth');

        // <--------------------[PROSES LOGIN]------------------------>
        Route::post('/proses_login', 'proses_login');

        // <--------------------[REGISTRASI]------------------------>
        Route::get('/registrasi', 'registrasi');

        // <--------------------[PROSES REGISTRASI]------------------------>
        Route::post('/proses_registrasi', 'proses_registrasi');

        // <--------------------[LUPA PASSWORD]------------------------>
        Route::get('/lupa_password', 'lupaPassword');

        // <--------------------[PROSES LUPA PASSWORD]------------------------>
        Route::post('/proses_lupa_password', 'proses_lupa_password');
    });
});

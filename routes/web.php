<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('./frontend.index',[
        'title'=> 'Beranda',
    ]);

});

Route::get('/blog-single', function () {
    return view('./frontend.blog-single',[
        'title'=> 'Home',
    ]);

});

Route::get('/portfolio-details', function () {
    return view('./frontend.portfolio-details',[
        'title'=> 'Portofolio',
    ]);

});

Route::get('/pendaftaran', function () {
    return view('./frontend.pendaftaran',[
        'title'=> 'Pendaftaran',
    ]);

});

// ->middleware('auth');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin-dashboard', [DashboardController::class,'index'])->middleware('auth');
// Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
Route::get('/admin-anggota', [AnggotaController::class,'index'])->middleware('auth');

Route::get('/admin-jadwal', [DashboardController::class,'jadwal'])->middleware('auth');
Route::get('/admin-pengelolaankonten', [DashboardController::class,'pengelolaankonten'])->middleware('auth');
Route::get('/admin-kontakpendaftaran', [DashboardController::class,'kontakpendaftaran'])->middleware('auth');
Route::get('/admin-laporan', [DashboardController::class,'laporan'])->middleware('auth');
Route::get('/admin-pengaturan', [DashboardController::class,'pengaturan'])->middleware('auth');
Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
Route::get('/admin-detail', [DashboardController::class,'detail'])->middleware('auth');
// Route::get('/admin-edit', [DashboardController::class,'edit'])->middleware('auth');


// Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

Route::resource('/admin-anggota', AnggotaController::class)->middleware('auth');
Route::resource('/admin-edit', AnggotaController::class)->middleware('auth');



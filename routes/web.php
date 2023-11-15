<?php

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
Route::get('/daftaranggota', function () {
    return view('dashboard.daftaranggota',[
        'title'=> 'Daftar Anggota',
    ]);

});

// ->middleware('auth');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
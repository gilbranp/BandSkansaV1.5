<?php

use App\Models\Anggota;
use App\Models\Prestasi;
use App\Models\Pengaturan;
use App\Models\BlogPengelolaan;
use App\Models\PengelolaanKonten;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\CalonAnggotaController;
use App\Http\Controllers\GaleriDetailController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\BlogPengelolaanController;
use App\Http\Controllers\PengelolaanAdminController;
use App\Http\Controllers\PengelolaanKontenController;
use App\Http\Controllers\KontakPendafataranController;

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

Route::post('/send-reply', [EmailController::class, 'sendReply']);

Route::get('/', function () {
    $prestasi = Prestasi::find(1);
    $pengelolaans = PengelolaanKonten::orderBy('created_at', 'DESC')->get();
    $blogpengelolaans = BlogPengelolaan::orderBy('created_at', 'DESC')->get();
    $pengaturans = Pengaturan::find(1);
    // @dd($pengaturans);
    return view('./frontend.index',[
      'pengelolaans' => $pengelolaans,
      'prestasi' => $prestasi,
      'pengaturan' => $pengaturans,
      'blogpengelolaans' => $blogpengelolaans,
        'title'=> 'Beranda'
    ]);

});

Route::get('/blog-single', function () {
    return view('./frontend.blog-single',[
        'title'=> 'Home',
    ]);

});
Route::get('/blog-single', function () {
    return view('./frontend.blog-single',[
        'title'=> 'Home',
    ]);

});
Route::get('/kalender-latihan', function () {
    return view('./frontend.kalender-latihan',[
        'title'=> 'Kalender Latihan',
    ]);

});

// Route::get('/portfolio-details', function () {
//     $pengelolaan = PengelolaanKonten::orderBy('created_at', 'DESC')->get();
//     return view('./frontend.portfolio-details',[
//         'pengelolaan' => $pengelolaan,
//         'title'=> 'Portofolio',
//     ]);

// });

Route::get('/pendaftaran', function () {
    return view('./frontend.pendaftaran',[
        'title'=> 'Pendaftaran',
    ]);

});

Route::get('/profil-anggotaa', function () {
    $anggotas = Anggota::orderBy('created_at', 'DESC')->get();
    return view('./frontend.profil-anggota',[
        'anggota' => $anggotas,
        'title'=> 'Profil-Anggota',
        
    ]);

});



Route::post('/#contact', [ContactController::class, 'submit']);



// ->middleware('auth');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('superadmin');
Route::post('/register', [RegisterController::class, 'store'])->middleware('superadmin');

Route::get('/admin-dashboard', [DashboardController::class,'index'])->middleware('auth');
// Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
// Route::get('/admin-anggota', [AnggotaController::class,'index'])->middleware('auth');

Route::get('/admin-jadwal', [DashboardController::class,'jadwal'])->middleware('auth');
// Route::get('/admin-pengelolaankonten', [PengelolaanKontenController::class,'index'])->middleware('auth');
Route::get('/admin-kontakpendaftaran', [DashboardController::class,'kontakpendaftaran'])->middleware('auth');
Route::get('/admin-laporan', [DashboardController::class,'laporan'])->middleware('superadmin');
// Route::get('/admin-pengaturan', [DashboardController::class,'pengaturan'])->middleware('auth');
Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
// Route::get('/admin-detail', [DashboardController::class,'detail'])->middleware('auth');
// Route::get('/admin-detailgaleri', [PengelolaanKonten::class,'show'])->middleware('auth');
// Route::get('/admin-edit', [DashboardController::class,'edit'])->middleware('auth');


// Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

Route::resource('/admin-pengelolaankonten',PengelolaanKontenController::class)->middleware('auth');
Route::resource('/admin-anggota', AnggotaController::class)->middleware('auth');
// Route::resource('/admin-edit', AnggotaController::class)->middleware('auth');
Route::resource('/admin-kontakpendafataran', KontakPendafataranController::class)->middleware('auth');
Route::resource('/galeridetail',GaleriDetailController::class);
Route::resource('/admin-pengaturan',PengaturanController::class);
Route::resource('/admin-blogpengelolaan',BlogPengelolaanController::class)->middleware('auth');
// Route::resource('/admin-categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/admin-pengelolaanadmin', PengelolaanAdminController::class)->middleware('superadmin');
Route::resource('/admin-calonanggota',CalonAnggotaController::class);


// PRESENSI ROUTE
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index')->middleware('auth');
Route::post('/presensi', [PresensiController::class, 'store'])->name('presensi.store')->middleware('auth');
Route::get('/presensi/filter', [PresensiController::class, 'filter'])->name('presensi.filter')->middleware('auth');
Route::get('/presensi/print', [PresensiController::class, 'print'])->name('presensi.print')->middleware('auth');

Route::resource('/admin-prestasi',PrestasiController::class)->middleware('auth');




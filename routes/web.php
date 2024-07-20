<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendampingController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LaporanPasienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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


///////////////////////
// Login & Register //
/////////////////////
Auth::routes();
Route::get('/reset-password', [UserController::class, 'edit2'])->name('auth.reset-password');
Route::post('/reset-passwordd', [UserController::class, 'resetpassword']);

///////////////////
// LANDING PAGE //
//////////////////

Route::post('/landing/tambah-bukti-donasi', [LandingController::class, 'store'])->name('landing.store');

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::get('/landing/about', [LandingController::class, 'indexabout'])->name('landing.about');
Route::get('/landing/pendaftaran', [LandingController::class, 'reservasi'])->name('landing.reservasi');
Route::get('/landing/kontak', [LandingController::class, 'kontak'])->name('landing.kontak');
Route::get('/landing/donatur', [LandingController::class, 'donasi'])->name('landing.donasii');

######################################################################################################################################################################
//////////////////
//    ADMIN    //
////////////////
Route::middleware(['auth','isadmin'])->group(function () {

############
// Donasi //
############
Route::resource('/donasi', \App\Http\Controllers\DonasiController::class);

####################
// laporan pasien //
####################
Route::get('/laporan', [LaporanPasienController::class, 'index'])->name('laporanpasien.index');// Menampilkan semua data pasien
Route::post('/export-laporanpasien',[LaporanPasienController::class, 'exportexcel']);
Route::post('/laporan-pdf',[LaporanPasienController::class, 'exportpdf']);
Route::get('/laporan/{id}', [LaporanPasienController::class, 'show'])->name('laporanpasien.show');// Menampilkan semua data pasien
Route::post('/laporan/import_excel', [LaporanPasienController::class, 'import_excel'])->name('laporanpasien.import_excel');// Menampilkan semua data pasien

###########
// Kamar //
###########
Route::resource('/kamar', \App\Http\Controllers\KamarController::class);

############
// Pasien //
############
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');// Menampilkan semua data pasien
Route::get('/pasien/create', [PasienController::class,'create'])->name('pasien.create');// Menampilkan formulir untuk membuat pasien baru
Route::post('/pasien', [PasienController::class,'store'])->name('pasien.store');// Menyimpan data pasien yang baru dibuat
Route::get('/pasien/{id}', [PasienController::class,'show'])->name('pasien.show');// Menampilkan detail pasien
Route::get('/pasien/{pasien}/edit', [PasienController::class,'edit'])->name('pasien.edit');// Menampilkan formulir untuk mengedit pasien
Route::put('/pasien/{pasien}', [PasienController::class,'update'])->name('pasien.update');// Menyimpan perubahan pada pasien yang diedit
Route::delete('/pasien/{pasien}', [PasienController::class,'destroy'])->name('pasien.destroy');// Menghapus pasien

#############
// Profile //
#############
Route::get('/profile',[UserController::class,'index'])->name('user.index');
Route::get('/profile/{id}',[UserController::class,'show'])->name('user.show');
Route::get('/profile/{user}/id',[UserController::class,'edit'])->name('user.edit');

###############
// Reservasi //
###############
Route::put('/reservasi/{reservasi}', [ReservasiController::class, 'setDiterima'])->name('reservasi.setDiterima');
Route::get('/ditolak/reservasi/{id}', [ReservasiController::class, 'ditolak'])->name('reservasi.ditolak');
Route::get('/show/reservasi/{id}', [ReservasiController::class, 'show'])->name('reservasi.show');// Route untuk menampilkan data reservasi

################
// Pendamping //
################
Route::resource('/pendamping',  \App\Http\Controllers\PendampingController::class);

####################
// Laporan Pasien //
####################
Route::resource('/laporanpasien',  \App\Http\Controllers\LaporanPasienController::class);

################
// Pengaturan //
################
// Route::middleware(['auth','isadmin_pengunjung'])->group(function () {
    // });
});
Route::get('/pengaturan-profile', [UserController::class, 'index1'])->name('pengaturan.index');
Route::post('/pengaturan-ubah', [UserController::class, 'resetpassword']);

######################################################################################################################################################################

/////////////////
// PENGUNJUNG //
///////////////
Route::middleware(['auth','isadmin_pengunjung'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');// Menampilkan semua data reservasi
    Route::get('/create/reservasi/', [ReservasiController::class, 'create'])->name('reservasi.create');// Route untuk menampilkan form tambah reservasi
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');// Route untuk menyimpan data reservasi yang baru
});
Route::resource('/',  \App\Http\Controllers\LandingController::class);
Route::get('/landing', [KamarController::class, 'getRoomStatusCount'])->name('kamar.getRoomStatusCount');

////////////////////
// Reset Password //
////////////////////
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);

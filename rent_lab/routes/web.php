<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\BorrowHistoryController;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\Admin\InventarisAdmin;
use App\Http\Controllers\Admin\InventarisAdminController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\LogoutAdminController;
use App\Http\Controllers\Admin\PeminjamanAdminController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\Admin\RegistrasiAdminController;
use App\Http\Controllers\Admin\RiwayatAdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\FormUserController;
use App\Http\Controllers\User\FormUserDosenController;
use App\Http\Controllers\User\FormUserMhsController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home_user', [HomeUserController::class, 'index'])->name('home_user');
Route::get('/form_user_dosen', [FormUserDosenController::class, 'index'])->name('form_user_dosen');
Route::get('/form_user_mhs', [FormUserMhsController::class, 'index'])->name('form_user_mhs');

Route::post('/form_user_mhs', [FormUserMhsController::class, 'store'])->name('user_form_mhs.store');
Route::post('/form_user_dosen', [FormUserDosenController::class, 'store'])->name('user_form_dosen.store');

// Route::get('/admin_riwayat', [RiwayatAdminController::class, 'index'])->name('admin_riwayat');
Route::get('/landing_page', [LandingPageController::class, 'index'])->name('landing_page');
Route::get('/admin_login', [LoginAdminController::class, 'index'])->name('admin_login');
Route::get('/admin_logout', [LogoutAdminController::class, 'index'])->name('admin_logout');
Route::get('/admin_registrasi', [RegistrasiAdminController::class, 'index'])->name('admin_registrasi');


Route::get('/admin_login', [LoginAdminController::class, 'showLoginForm'])->name('admin_login');
Route::post('/admin_login', [LoginAdminController::class, 'login'])->name('admin_login.submit');
Route::post('/admin_logout', [LoginAdminController::class, 'logout'])->name('admin_logout');

Route::get('/admin_registrasi', [RegistrasiAdminController::class, 'showRegistrationForm'])->name('admin_registrasi');
Route::post('/admin_registrasi', [RegistrasiAdminController::class, 'register'])->name('admin_registrasi.submit');

Route::middleware('auth:admin')->group(function () {
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');
    Route::get('/admin_inventaris', [InventarisAdminController::class, 'index'])->name('admin_inventaris');
    Route::post('/admin_inventaris', [InventarisAdminController::class, 'store'])->name('admin_inventaris.store');
    Route::get('/admin_inventaris/edit/{id}', [InventarisAdminController::class, 'edit'])->name('admin_inventaris.edit');
    Route::put('/admin_inventaris/update/{id}', [InventarisAdminController::class, 'update'])->name('admin_inventaris.update');
    Route::delete('/admin_inventaris/{id}', [InventarisAdminController::class, 'destroy'])->name('admin_inventaris.destroy');
    Route::get('/admin_peminjaman', [PeminjamanAdminController::class, 'index'])->name('admin_peminjaman');
    Route::post('/admin_peminjaman/approve/{id}', [PeminjamanAdminController::class, 'approve'])->name('admin_peminjaman.approve');
    Route::post('/admin_peminjaman/reject/{id}', [PeminjamanAdminController::class, 'reject'])->name('admin_peminjaman.reject');
    Route::post('/admin_peminjaman/updateReturnDate/{id}', [PeminjamanAdminController::class, 'updateReturnDate'])->name('admin_peminjaman.updateReturnDate');
    Route::get('/admin_riwayat', [RiwayatAdminController::class, 'index'])->name('admin_riwayat');
    Route::get('/profil_admin', [ProfilAdminController::class, 'index'])->name('profil_admin');
});

require __DIR__.'/auth.php';

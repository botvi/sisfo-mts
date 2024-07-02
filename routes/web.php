<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    KategoriController,
    BeritaController,
    GambarKegiatanController,
    LoginController,
    PendaftaraAdminController,
    RegisterController,
    VideoKegiatanController,
    WebsiteController,
    PendaftaranController
};
use App\Models\VideoKegiatan;

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


// AUTH
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');
// AUTH



// ADMIN routes
Route::group(['middleware' => ['role:admin']], function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategoris.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategoris.create');
Route::post('/kategori-store', [KategoriController::class, 'store'])->name('kategoris.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategoris.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategoris.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategoris.destroy');

Route::get('/berita', [BeritaController::class, 'index'])->name('beritas.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('beritas.create');
Route::post('/berita-store', [BeritaController::class, 'store'])->name('beritas.store');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('beritas.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('beritas.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('beritas.destroy');

Route::get('/fotokegiatan', [GambarKegiatanController::class, 'index'])->name('gambars.index');
Route::get('/fotokegiatan/create', [GambarKegiatanController::class, 'create'])->name('gambars.create');
Route::post('/fotokegiatan-store', [GambarKegiatanController::class, 'store'])->name('gambars.store');
Route::get('/fotokegiatan/{id}/edit', [GambarKegiatanController::class, 'edit'])->name('gambars.edit');
Route::put('/fotokegiatan/{id}', [GambarKegiatanController::class, 'update'])->name('gambars.update');
Route::delete('/fotokegiatan/{id}', [GambarKegiatanController::class, 'destroy'])->name('gambars.destroy');

Route::get('/videokegiatan', [VideoKegiatanController::class, 'index'])->name('videos.index');
Route::get('/videokegiatan/create', [VideoKegiatanController::class, 'create'])->name('videos.create');
Route::post('/videokegiatan-store', [VideoKegiatanController::class, 'store'])->name('videos.store');
Route::get('/videokegiatan/{id}/edit', [VideoKegiatanController::class, 'edit'])->name('videos.edit');
Route::put('/videokegiatan/{id}', [VideoKegiatanController::class, 'update'])->name('videos.update');
Route::delete('/videokegiatan/{id}', [VideoKegiatanController::class, 'destroy'])->name('videos.destroy');

Route::get('pendaftaransiswa/{id}/download-pdf', [PendaftaraAdminController::class, 'downloadPdf'])->name('pendaftaransiswa.downloadPdf');
Route::get('/pendaftaransiswa', [PendaftaraAdminController::class, 'index'])->name('pendaftaransiswa.index');
Route::get('/pendaftaransiswa/{id}', [PendaftaraAdminController::class, 'show'])->name('pendaftaransiswa.show');
Route::post('/pendaftaransiswa/{id}/update-status', [PendaftaraAdminController::class, 'updateStatus'])->name('pendaftaransiswa.updateStatus');
});
// ADMIN routes

// WEB routes

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/berita/{title}', [WebsiteController::class, 'showBerita'])->name('berita.show');


Route::get('/galeryfoto', [WebsiteController::class, 'fotokegiatan']);
Route::get('/galeryvideo', [WebsiteController::class, 'videokegiatan']);


Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::group(['middleware' => ['role:admin,user']], function () {
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::put('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
});

// WEB routes
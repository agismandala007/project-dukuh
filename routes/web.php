<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DemografisController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth', 'verified')->name('admin');

//Stuktur Anggota
Route::get('/anggota', [AnggotaController::class, 'anggota'])->name('anggota');
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::prefix('/admin/anggota')->middleware('auth', 'verified')->group(function() {
    Route::get('/', [AnggotaController::class, 'admin'])->name('admin.anggota');
    Route::get('/create', [AnggotaController::class, 'create'])->name('admin.anggota.input');
    Route::post('/create', [AnggotaController::class, 'store'])->name('admin.anggota.store');
    Route::get('/update/{id}', [AnggotaController::class, 'edit'])->name('admin.anggota.edit');
    Route::post('/update/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update');
    Route::delete('/delete/{id}', [AnggotaController::class, 'delete'])->name('admin.anggota.delete');
});


// Agenda
Route::get('/agenda', [AgendaController::class, 'agenda'])->name('agenda');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');
Route::prefix('/admin/agenda')->middleware('auth', 'verified')->group(function() {
    Route::get('/', [AgendaController::class, 'admin'])->name('admin.agenda');
    Route::get('/create', [AgendaController::class, 'create'])->name('admin.agenda.input');
    Route::post('/create', [AgendaController::class, 'store'])->name('admin.agenda.store');
    Route::get('/update/{id}', [AgendaController::class, 'edit'])->name('admin.agenda.edit');
    Route::post('/update/{id}', [AgendaController::class, 'update'])->name('admin.agenda.update');
    Route::delete('/delete/{id}', [AgendaController::class, 'delete'])->name('admin.agenda.delete');
});

//Galeri
Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
Route::prefix('/admin/galeri')->middleware('auth', 'verified')->group(function() {
    Route::get('/', [GaleriController::class, 'admin'])->name('admin.galeri');
    Route::get('/create', [GaleriController::class, 'create'])->name('admin.galeri.input');
    Route::post('/create', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/update/{id}', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::post('/update/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/delete/{id}', [GaleriController::class, 'delete'])->name('admin.galeri.delete');
});

// Demografis
Route::get('/demografis', [DemografisController::class, 'demografis'])->name('demografis');
Route::prefix('/admin/demografis')->middleware('auth', 'verified')->group(function() {
    Route::get('/', [DemografisController::class, 'admin'])->name('admin.demografis');
    Route::get('/create', [DemografisController::class, 'create'])->name('admin.demografis.input');
    Route::post('/create', [DemografisController::class, 'store'])->name('admin.demografis.store');
    Route::get('/update/{id}', [DemografisController::class, 'edit'])->name('admin.demografis.edit');
    Route::post('/update/{id}', [DemografisController::class, 'update'])->name('admin.demografis.update');
    Route::delete('/delete/{id}', [DemografisController::class, 'delete'])->name('admin.demografis.delete');
});

// Berita
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::prefix('/admin/berita')->middleware('auth', 'verified')->group(function() {
    Route::get('/', [BeritaController::class, 'admin'])->name('admin.berita');
    Route::get('/create', [BeritaController::class, 'create'])->name('admin.berita.input');
    Route::post('/create', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/update/{id}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::post('/update/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/delete/{id}', [BeritaController::class, 'delete'])->name('admin.berita.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

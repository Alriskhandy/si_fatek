<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Check Slug
Route::get('/berita/checkSlug', [BeritaController::class, 'checkSlug']);

// DASHBOARD
Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::prefix('/profil')->group(function () {

        // BERITA
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('tambah-berita');
        Route::post('/berita/tambah', [BeritaController::class, 'store'])->name('store-berita');
        Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('detail-berita');
        Route::get('/berita/{slug}/edit', [BeritaController::class, 'edit'])->name('edit-berita');
        Route::put('/berita/{slug}', [BeritaController::class, 'update'])->name('update-berita');
        Route::delete('/berita/{slug}', [BeritaController::class, 'destroy'])->name('delete-berita');

        // SEJARAH SINGKAT
        Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
        Route::get('/sejarah/edit', [ProfilController::class, 'editSejarah'])->name('edit-sejarah');
        Route::put('/sejarah', [ProfilController::class, 'updateSejarah'])->name('update-sejarah');

        // VISI, MISI & SASARAN
        Route::get('/visi-misi', [ProfilController::class, 'visimisi'])->name('visi-misi');
        Route::get('/visi-misi/edit', [ProfilController::class, 'editVisiMisi'])->name('edit-visi-misi');
        Route::put('/visi-misi', [ProfilController::class, 'updateVisiMisi'])->name('update-visi-misi');
    });

    Route::get('/kelola-pengguna', [KelolaUserController::class, 'show'])->middleware(['IsAdmin'])->name('kelola-pengguna');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

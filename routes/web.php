<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\KerjasamaDNController;
use App\Http\Controllers\KerjasamaLNController;
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

        // STRUKTUR ORGANISASI
        Route::get('/struktur-organisasi', [ProfilController::class, 'struktur'])->name('struktur');
        Route::get('/struktur-organisasi/edit', [ProfilController::class, 'editStruktur'])->name('edit-struktur');
        Route::put('/struktur-organisasi', [ProfilController::class, 'updateStruktur'])->name('update-struktur');

        // MANAJEMEN
        Route::get('/manajemen', [ProfilController::class, 'manajemen'])->name('manajemen');
        Route::get('/manajemen/edit', [ProfilController::class, 'editManajemen'])->name('edit-manajemen');
        Route::put('/manajemen', [ProfilController::class, 'updateManajemen'])->name('update-manajemen');

        // MASTER PLAN
        Route::get('/master-plan', [ProfilController::class, 'masterPlan'])->name('master-plan');
        Route::put('/master-plan', [ProfilController::class, 'updateMasterPlan'])->name('update-master-plan');
        Route::put('/clear-master-plan', [ProfilController::class, 'clearMasterPlan'])->name('clear-master-plan');
    });

    Route::prefix('/kemitraan')->group(function () {

        // KERJASAMA DALAM NEGERI
        Route::get('/kerjasama-dalam-negeri', [KerjasamaDNController::class, 'index'])->name('kerjasama-dalam-negeri');
        Route::post('/kerjasama-dalam-negeri', [KerjasamaDNController::class, 'store'])->name('store-kerjasama-dn');
        Route::delete('/kerjasama-dalam-negeri/{id}', [KerjasamaDNController::class, 'destroy'])->name('delete-kerjasama-dn');
        Route::put('/kerjasama-dalam-negeri/{id}', [KerjasamaDNController::class, 'update'])->name('update-kerjasama-dn');

        // KERJASAMA LUAR NEGERI
        Route::get('/kerjasama-luar-negeri', [KerjasamaLNController::class, 'index'])->name('kerjasama-luar-negeri');
        Route::post('/kerjasama-luar-negeri', [KerjasamaLNController::class, 'store'])->name('store-kerjasama-ln');
        Route::delete('/kerjasama-luar-negeri/{id}', [KerjasamaLNController::class, 'destroy'])->name('delete-kerjasama-ln');
        Route::put('/kerjasama-luar-negeri/{id}', [KerjasamaLNController::class, 'update'])->name('update-kerjasama-ln');
    });

    Route::get('/kelola-pengguna', [KelolaUserController::class, 'show'])->middleware(['IsAdmin'])->name('kelola-pengguna');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

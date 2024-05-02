<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::get('/dashboard/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/dashboard/berita/tambah', [BeritaController::class, 'create'])->name('tambah-berita');
    Route::post('/dashboard/berita/tambah', [BeritaController::class, 'store'])->name('store-berita');
    Route::get('/dashboard/berita/{slug}', [BeritaController::class, 'show'])->name('detail-berita');
    Route::get('/dashboard/berita/{slug}/edit', [BeritaController::class, 'edit'])->name('edit-berita');
    Route::put('/dashboard/berita/{slug}', [BeritaController::class, 'update'])->name('update-berita');
    Route::delete('/dashboard/berita/{slug}', [BeritaController::class, 'destroy'])->name('berita.delete');
});
// Check Slug
Route::get('/berita/checkSlug', [BeritaController::class, 'checkSlug']);


Route::get('/dashboard/kelola-pengguna', [KelolaUserController::class, 'show'])->middleware(['auth', 'IsAdmin'])->name('kelola-pengguna');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

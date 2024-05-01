<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.index');
});

// Dashboard Pages
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/kelola-pengguna', function () {
    return view('dashboard.pages.kelola-pengguna');
})->middleware(['auth', 'verified'])->name('kelola-pengguna');

// Auth Page
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Blog Pages
Route::get('/berita', function () {
    return view('blog.pages.profile.Berita');
});
Route::get('/manajemen', function () {
    return view('blog.pages.profile.Manajemen');
});
Route::get('/master-plan', function () {
    return view('blog.pages.profile.Master-Plan');
});
Route::get('/mediatek', function () {
    return view('blog.pages.profile.Mediatek');
});
Route::get('/peta-fakultas', function () {
    return view('blog.pages.profile.Peta-Fakultas');
});
Route::get('/sejarah-singkat', function () {
    return view('blog.pages.profile.Sejarah-Singkat');
});
Route::get('/struktur-organisasi', function () {
    return view('blog.pages.profile.Struktur-Organisasi');
});
Route::get('/visi-misi-dan-sasaran', function () {
    return view('blog.pages.profile.Visi-Misi-Sasaran');
});


Route::fallback(function () {
    return view('blog.notfound');
});
Route::get('/understructure', function () {
    return view('blog.understructure');
});

require __DIR__ . '/auth.php';

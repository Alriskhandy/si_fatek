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



// Profile Pages
Route::get('/sambutan-dekan', function () {
    return view('blog.pages.profile.Sambutan-Dekan');
});
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

// Akreditasi Pages
Route::get('/akreditasi', function () {
    return view('blog.pages.akademik.Akreditasi');
});
Route::get('/departemen', function () {
    return view('blog.pages.akademik.Departemen');
});
Route::get('/kalender-akademik', function () {
    return view('blog.pages.akademik.Kalender-Akademik');
});
Route::get('/program-doktor', function () {
    return view('blog.pages.akademik.Program-Doktor');
});
Route::get('/program-magister', function () {
    return view('blog.pages.akademik.Program-Magister');
});
Route::get('/program-profesi', function () {
    return view('blog.pages.akademik.Program-Profesi');
});

// Sumber Daya Pages
Route::get('/guru-besar', function () {
    return view('blog.pages.sumber_daya.Guru-Besar');
});
Route::get('/perpustakaan', function () {
    return view('blog.pages.sumber_daya.Perpustakaan');
});
Route::get('/sarana-prasarana', function () {
    return view('blog.pages.sumber_daya.Sarana-Prasarana');
});
Route::get('/tenaga-kependidikan', function () {
    return view('blog.pages.sumber_daya.Tenaga-Kependidikan');
});

// Kemahasiswaan Pages
Route::get('/alumni', function () {
    return view('blog.pages.kemahasiswaan.Alumni');
});
Route::get('/aturan-kemahasiswaan', function () {
    return view('blog.pages.kemahasiswaan.Aturan-Kemahasiswaan');
});
Route::get('/mahasiswa-inbound-outbound', function () {
    return view('blog.pages.kemahasiswaan.MHS-Inbound-Outbound');
});
Route::get('/pengembangan-karakter-mahasiswa', function () {
    return view('blog.pages.kemahasiswaan.Pengembangan-Karakter-MHS');
});
Route::get('/pengumuman', function () {
    return view('blog.pages.kemahasiswaan.Pengumuman');
});
Route::get('/peningkatan-prestasi-mahasiswa', function () {
    return view('blog.pages.kemahasiswaan.Peningkatan-Prestasi-MHS');
});

//  Riset & Inovasi Pages
Route::get('/daftar-penelitian-lbe', function () {
    return view('blog.pages.riset_inovasi.Daftar-Penelitian-LBE');
});
Route::get('/hasil-inovasi', function () {
    return view('blog.pages.riset_inovasi.Hasil-Inovasi');
});
Route::get('/hak-kekayaan-intelektual', function () {
    return view('blog.pages.riset_inovasi.Hak-Kekayaan-Intelektual');
});

// Kemitraan Pages
Route::get('/kerjasama-dalam-negeri', function () {
    return view('blog.pages.kemitraan.Kerjasama-Dalam-Negeri');
});
Route::get('/kerjasama-luar-negeri', function () {
    return view('blog.pages.kemitraan.Kerjasama-Luar-Negeri');
});


// detail dll
Route::get('/judul-berita', function () {
    return view('blog.components.detail-berita');
});

Route::fallback(function () {
    return view('blog.notfound');
});
Route::get('/understructure', function () {
    return view('blog.understructure');
});

require __DIR__ . '/auth.php';

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Akreditasi;
use App\Models\Berita;
use App\Models\GuruBesar;
use App\Models\TenagaPendidik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $guru = GuruBesar::all()->count();
        if ($guru == null) {
            $guru = 0;
        }

        $pendidik = TenagaPendidik::all()->count();
        if ($pendidik == null) {
            $pendidik = 0;
        }

        $berita = Berita::all()->count();
        if ($berita == null) {
            $berita = 0;
        }

        $akreditasi = Akreditasi::all()->count();
        if ($akreditasi == null) {
            $akreditasi = 0;
        }

        return view('dashboard.index')->with(compact('guru', 'pendidik', 'berita', 'akreditasi'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //
    }

    public function sejarah()
    {
        $data = Profil::findOrFail(1);
        return view('blog.pages.profile.Sejarah-Singkat')->with(compact('data'));
    }
    public function visiMisi()
    {
        $data = Profil::findOrFail(2);
        return view('blog.pages.profile.Visi-Misi-Sasaran')->with(compact('data'));
    }
    public function struktur()
    {
        $data = Profil::findOrFail(3);
        return view('blog.pages.profile.Struktur-Organisasi')->with(compact('data'));
    }
    public function manajemen()
    {
        $data = Profil::findOrFail(4);
        return view('blog.pages.profile.Manajemen')->with(compact('data'));
    }
    public function masterPlan()
    {
        $data = Profil::findOrFail(5);
        return view('blog.pages.profile.Master-Plan')->with(compact('data'));
    }
}

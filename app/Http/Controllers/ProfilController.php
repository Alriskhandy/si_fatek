<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function sejarah(): View
    {
        $data = Profil::findOrFail(1);

        return view('dashboard.profil.sejarah.main-sejarah')->with(compact('data'));
    }

    public function editSejarah(): View
    {
        $data = Profil::findOrFail(1);

        return view('dashboard.profil.sejarah.edit-sejarah')->with(compact('data'));
    }

    public function updateSejarah(Request $request)
    {
        $data = Profil::findOrFail(1);

        $validatedData = $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'body' => 'required',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                if ($data->image_path) {
                    Storage::delete('public/' . $data->image_path);
                }

                $uniqueFileName = $request->file('image_path')->hashName();
                $request->file('image_path')->storeAs('public/ProfilImage', $uniqueFileName);
                $validatedData['image_path'] = 'profilimage/' . $uniqueFileName;
            }

            // Update artikel
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('sejarah')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('sejarah')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function visimisi(): View
    {
        $data = Profil::findOrFail(2);

        return view('dashboard.profil.visi-misi.main-visi')->with(compact('data'));
    }

    public function editVisiMisi(): View
    {
        $data = Profil::findOrFail(2);

        return view('dashboard.profil.visi-misi.edit-visi')->with(compact('data'));
    }

    public function updateVisiMisi(Request $request)
    {
        $data = Profil::findOrFail(2);

        $validatedData = $request->validate([
            'body' => 'required',
        ]);

        try {
            // Update artikel
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('visi-misi')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('visi-misi')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function struktur(): View
    {
        $data = Profil::findOrFail(3);

        return view('dashboard.profil.struktur-organisasi.main-struktur')->with(compact('data'));
    }

    public function editStruktur(): View
    {
        $data = Profil::findOrFail(3);

        return view('dashboard.profil.struktur-organisasi.edit-struktur')->with(compact('data'));
    }

    public function updateStruktur(Request $request)
    {
        $data = Profil::findOrFail(3);

        $validatedData = $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                if ($data->image_path) {
                    Storage::delete('public/' . $data->image_path);
                }

                $uniqueFileName = $request->file('image_path')->hashName();
                $request->file('image_path')->storeAs('public/ProfilImage', $uniqueFileName);
                $validatedData['image_path'] = 'profilimage/' . $uniqueFileName;
            }

            // Update artikel
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('struktur')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('struktur')->with('status', 'error')->with('message', $e->getMessage());
        }
    }
}

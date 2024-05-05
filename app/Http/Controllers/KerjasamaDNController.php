<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\KerjasamaDN;

class KerjasamaDNController extends Controller
{
    public function index(): View
    {
        $data = KerjasamaDN::all();

        return view('dashboard.kemitraan.kerjasama-dn.main')->with('data', $data);
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData =  $request->validate([
            'departemen' => 'required|max:255',
            'ketua_tim' => 'required|max:255',
            'kerjasama' => 'required|max:255',
            'mitra' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'range' => 'nullable',
        ]);

        try {
            // Buat data kerjasama baru
            KerjasamaDN::create($validatedData);
            // Berikan pesan sukses jika berhasil
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'created-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $k = KerjasamaDN::findOrFail($id);
            $k->delete();

            // Berikan pesan sukses jika berhasil
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'deleted-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = KerjasamaDN::findOrFail($id);

        // Validasi input dari form
        $validatedData =  $request->validate([
            'departemen' => 'required|max:255',
            'ketua_tim' => 'required|max:255',
            'kerjasama' => 'required|max:255',
            'mitra' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'range' => 'nullable',
        ]);

        try {
            // Update
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('kerjasama-dalam-negeri')->with('status', 'error')->with('message', $e->getMessage());
        }
    }
}

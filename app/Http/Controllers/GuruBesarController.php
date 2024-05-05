<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GuruBesar;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GuruBesarController extends Controller
{
    public function index(): View
    {
        $data = GuruBesar::all();

        return view('dashboard.sumber-daya.guru-besar.main-guru-besar')->with('data', $data);
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validasi input dari form
        $validatedData =  $request->validate([
            'nama' => 'required|max:255',
            'departemen' => 'required|max:255',
            'nip' => 'required|max:255',
            'golongan' => 'required|max:255',
        ]);

        try {
            // Buat data kerjasama baru
            GuruBesar::create($validatedData);
            // Berikan pesan sukses jika berhasil
            return redirect()->route('guru-besar')->with('status', 'created-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('guru-besar')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = GuruBesar::findOrFail($id);
            $data->delete();

            // Berikan pesan sukses jika berhasil
            return redirect()->route('guru-besar')->with('status', 'deleted-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('guru-besar')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = GuruBesar::findOrFail($id);

        // Validasi input dari form
        $validatedData =  $request->validate([
            'nama' => 'required|max:255',
            'departemen' => 'required|max:255',
            'nip' => 'required|max:255',
            'golongan' => 'required|max:255',
        ]);

        try {
            // Update
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('guru-besar')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('guru-besar')->with('status', 'error')->with('message', $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inovasi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InovasiController extends Controller
{
    public function index(): View
    {
        $data = Inovasi::all();

        return view('dashboard.riset-inovasi.inovasi.main-inovasi')->with('data', $data);
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData =  $request->validate([
            'nama_inovasi' => 'required|max:255',
            'inovator' => 'required|max:255',
        ]);

        try {
            Inovasi::create($validatedData);

            return redirect()->route('inovasi')->with('status', 'created-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('inovasi')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Inovasi::findOrFail($id);
            $data->delete();

            // Berikan pesan sukses jika berhasil
            return redirect()->route('inovasi')->with('status', 'deleted-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('inovasi')->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = Inovasi::findOrFail($id);

        // Validasi input dari form
        $validatedData =  $request->validate([
            'nama_inovasi' => 'required|max:255',
            'inovator' => 'required|max:255',
        ]);

        try {
            // Update
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('inovasi')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('inovasi')->with('status', 'error')->with('message', $e->getMessage());
        }
    }
}

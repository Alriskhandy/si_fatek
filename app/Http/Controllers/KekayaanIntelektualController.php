<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KekayaanIntelektual;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KekayaanIntelektualController extends Controller
{
    public function index(): View
    {
        $data = KekayaanIntelektual::findOrFail(1);

        return view('dashboard.riset-inovasi.kekayaan-intelektual.main')->with(compact('data'));
    }

    public function edit(): View
    {
        $data = KekayaanIntelektual::findOrFail(1);

        return view('dashboard.riset-inovasi.kekayaan-intelektual.edit')->with(compact('data'));
    }

    public function update(Request $request)
    {
        $data = KekayaanIntelektual::findOrFail(1);

        $validatedData = $request->validate([
            'body' => 'required',
        ]);

        try {
            // Update departemen
            $data->update($validatedData + ['updated_at' => now('Asia/Jayapura')]);

            // Berikan pesan sukses jika berhasil
            return redirect()->route('hak-kekayaan-intelektual')->with('status', 'updated-success');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('hak-kekayaan-intelektual')->with('status', 'error')->with('message', $e->getMessage());
        }
    }
}

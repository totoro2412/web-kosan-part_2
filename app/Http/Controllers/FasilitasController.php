<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        return view('admin/datafasilitas',
                    [   'title' => 'Data Fasilitas',
                        'fasilitas'=>Fasilitas::all()]
    );
    }


   

    public function destroy($idFasilitas)
    {
        $fasilitas = Fasilitas::findOrFail($idFasilitas);
        $fasilitas->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus!');
    }

    public function storefasilitas(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
        ]);

        // Buat instance Fasilitas baru
        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Fasilitas berhasil ditambahkan!');
    }
    public function updatefasilitas(Request $request, $id)
{
    // Validasi permintaan
    $request->validate([
        'nama_fasilitas' => 'required|string|max:255',
    ]);

    // Temukan fasilitas berdasarkan ID dan perbarui
    $fasilitas = Fasilitas::findOrFail($id);
    $fasilitas->update([
        'nama_fasilitas' => $request->nama_fasilitas,
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Fasilitas berhasil diperbarui!');
}
}

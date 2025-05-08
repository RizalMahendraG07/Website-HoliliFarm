<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Informasi;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('admin/informasi', compact('informasi'));
    }

    public function create()
    {
        return view('admin/tambahInfo');
    }



public function store(Request $request)
{
    $request->validate([
        'Judul' => 'required',
        'Deskripsi' => 'required',
        'Tanggal' => 'required|date',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->only(['Judul', 'Deskripsi', 'Tanggal']);

    if ($request->hasFile('foto')) {
        // Simpan ke storage/app/public/foto_informasi/
        $path = $request->file('foto')->store('foto_informasi', 'public');
        $data['foto'] = $path; // path akan disimpan seperti 'foto_informasi/namafile.jpg'
    }

    Informasi::create($data);

    return redirect('/informasi')->with('success', 'Informasi berhasil ditambahkan.');
}


    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('admin.editinfo', compact('informasi'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'Judul' => 'required',
        'Deskripsi' => 'required',
        'Tanggal' => 'required|date',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $informasi = Informasi::findOrFail($id);
    $data = $request->only(['Judul', 'Deskripsi', 'Tanggal']);

    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($informasi->foto && Storage::disk('public')->exists($informasi->foto)) {
            Storage::disk('public')->delete($informasi->foto);
        }

        // Simpan foto baru
        $path = $request->file('foto')->store('foto_informasi', 'public');
        $data['foto'] = $path;
    }

    $informasi->update($data);

    return redirect('/informasi')->with('success', 'Informasi berhasil diupdate.');
}

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        return redirect('/informasi')->with('success', 'Informasi berhasil dihapus.');
    }
}

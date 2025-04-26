<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
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
        ]);

        Informasi::create($request->all());

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
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->update($request->all());

        return redirect('/informasi')->with('success', 'Informasi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        return redirect('/informasi')->with('success', 'Informasi berhasil dihapus.');
    }
}

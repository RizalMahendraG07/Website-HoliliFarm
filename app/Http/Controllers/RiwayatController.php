<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;
use App\Models\Product;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = Riwayat::all();
        return view('admin/riwayat', compact('riwayat'));
    }

    public function create()
    {
        $products = Product::all();
return view('admin.tambahRiwayat', compact('products'));

    }

    public function store(Request $request)
{
    $request->validate([
        'nama_pembeli' => 'required|string',
        'alamat' => 'required|string',
        'produk_id' => 'required|exists:products,id',
        'jumlah_produk' => 'required|integer|min:1',
    ]);

    $product = Product::find($request->produk_id);
    if (!$product) {
        return redirect()->back()->withErrors(['produk_id' => 'Produk tidak ditemukan.']);
    }

    $total = $product->price * $request->jumlah_produk;

    Riwayat::create([
        'nama_pembeli' => $request->nama_pembeli,
        'alamat' => $request->alamat,
        'produk_id' => $product->id,  // Menyimpan produk_id bukan nama produk
        'jumlah_produk' => $request->jumlah_produk,
        'harga_total' => $total,
    ]);

    return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil ditambahkan');
}

    public function edit($id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $products = Product::all();
        return view('admin.editRiwayat', compact('riwayat', 'products'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_pembeli' => 'required|string',
        'alamat' => 'required|string',
        'produk_id' => 'required|exists:products,id',
        'jumlah_produk' => 'required|integer',
        'harga_total' => 'required|numeric'
    ]);

    $product = Product::findOrFail($request->produk_id);

    $riwayat = Riwayat::findOrFail($id);
    $riwayat->update([
        'nama_pembeli' => $request->nama_pembeli,
        'alamat' => $request->alamat,
        'produk_id' => $product->id, // Update produk_id
        'jumlah_produk' => $request->jumlah_produk,
        'harga_total' => $request->harga_total
    ]);

    return redirect()->route('riwayat.index')->with('success', 'Informasi berhasil diupdate.');
}
    


    public function destroy($id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $riwayat->delete();

        return redirect('/riwayat')->with('success', 'Informasi berhasil dihapus.');
    }
}

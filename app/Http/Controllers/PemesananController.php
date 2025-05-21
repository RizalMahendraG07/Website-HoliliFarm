<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PemesananController extends Controller
{
  public function store(Request $request)
{
    $validated = $request->validate([
        'nama_pembeli' => 'required|string|max:255',
        'alamat' => 'required|string|max:500',
        'produk_id' => 'required|integer|exists:products,id',
        'jumlah_produk' => 'required|integer|min:1',
        'harga_total' => 'required|numeric|min:0',
    ]);

    // Set status manual sesuai enum di database
    $validated['status'] = 'proses';

    // Simpan data pesanan ke DB
    Riwayat::create($validated);

    // Ambil data produk dari DB
    $product = Product::find($validated['produk_id']);

    // Hitung harga total (harga satuan × jumlah)
    $totalHarga = $product->price * $validated['jumlah_produk'];

    // Buat pesan WhatsApp yang berisi nama produk dan harga total
    $message = "Halo, saya ingin memesan produk dengan data:\n"
             . "Nama: {$validated['nama_pembeli']}\n"
             . "Alamat: {$validated['alamat']}\n"
             . "Produk: {$product->name}\n"
             . "Jumlah: {$validated['jumlah_produk']}\n"
             . "Total Harga: Rp " . number_format($totalHarga, 0, ',', '.') . "\n";

    $phone = '6285737134160'; // Nomor admin format internasional

    $whatsappUrl = "https://wa.me/{$phone}?text=" . urlencode($message);

    return redirect($whatsappUrl);
}


}

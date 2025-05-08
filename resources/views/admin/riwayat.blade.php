@extends('layouts.app')

@section('title', 'Riwayat - Holili Farm')

@section('content')
<div class="header">
  <h1>RIWAYAT</h1>
  <a href="{{ route('riwayat.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
@foreach ($riwayat as $index => $item)
    <li>
        <div style="flex: 2;">
            <h3>Nama</h3>
            <p class="deskripsi">{{ $item->nama_pembeli }}</p>
        </div>

        <div style="flex: 2; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
    <h3>Alamat</h3>
    <p class="deskripsi">{{ $item->alamat }}</p>
</div>


        <div style="flex: 2;">
            <h3>Produk</h3>
            <p class="deskripsi">{{ optional($item->product)->name ?? 'Produk Tidak Ditemukan' }}</p>
            <!-- Menggunakan relasi untuk mendapatkan nama produk -->
        </div>

        <div style="flex: 2;">
            <h3>Jumlah</h3>
            <p class="deskripsi">{{ $item->jumlah_produk }} Kg</p>
        </div>

        <div style="flex: 2;">
            <h3>Total Harga</h3>
            <p class="deskripsi">Rp{{ number_format($item->harga_total, 0, ',', '.') }}</p>
        </div>
        <div style="flex: 2;">
            <h3>Tanggal</h3>
            <p class="deskripsi">{{ $item->created_at->format('d-m-Y') }}</p>
        </div>
        <div style="flex: 2;">
    <h3>Status</h3>
    <p class="deskripsi">{{ $item->status }}</p>
</div>


        <div class="actions">
            <a href="{{ route('riwayat.edit', $item->id) }}" class="edit">✏️</a>
            <form action="{{ route('riwayat.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">🗑️</button>
            </form>
        </div>
    </li>
@endforeach

@endsection

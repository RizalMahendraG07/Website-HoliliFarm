@extends('layouts.app')

@section('title', 'Riwayat - Holili Farm')

@section('content')
<div class="header">
  <h1>Riwayat</h1>
  <a href="{{ route('riwayat.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
@foreach ($riwayat as $index => $item)
    <li>
        <div style="flex: 2;">
            <h3>Nama</h3>
            <p class="deskripsi">{{ $index + 1 }}. {{ $item->nama_pembeli }}</p>
        </div>

        <div style="flex: 3;">
            <h3>Alamat</h3>
            <p class="deskripsi">{{ $item->alamat }}</p>
        </div>

        <div style="flex: 2;">
            <h3>Produk</h3>
            <p class="deskripsi">{{ optional($item->product)->name ?? 'Produk Tidak Ditemukan' }}</p>
            <!-- Menggunakan relasi untuk mendapatkan nama produk -->
        </div>

        <div style="flex: 2;">
            <h3>Jumlah Produk</h3>
            <p class="deskripsi">{{ $item->jumlah_produk }} Kg</p>
        </div>

        <div style="flex: 2;">
            <h3>Total Harga</h3>
            <p class="deskripsi">Rp{{ number_format($item->harga_total, 0, ',', '.') }}</p>
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

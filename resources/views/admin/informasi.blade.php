@extends('layouts.app')

@section('title', 'Informasi - Holili Farm')

@section('content')

<div class="header">
  <h1>INFORMASI</h1>
  <a href="{{ route('informasi.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
  @foreach ($informasi as $index => $informasi)
  <li style="display: flex; align-items: center; gap: 20px;">
    {{-- Tampilkan gambar jika ada --}}
    @if ($informasi->foto)
      <img src="{{ asset('storage/' . $informasi->foto) }}" alt="Foto Informasi" style="width: 100px; height: auto; border-radius: 8px;">
    @else
      <img src="{{ asset('images/default.jpg') }}" alt="Default" style="width: 100px; height: auto; opacity: 0.3;">
    @endif

    <div style="flex: 4;">
      <p style="font-weight: bold; margin: 0;">{{ $index + 1 }}. {{ $informasi->JUDUL }}</p>
      <p style="margin: 4px 0 0 0;">{{ $informasi->Deskripsi }}</p>
    </div>

    <div class="actions">
      <a href="{{ route('informasi.edit', $informasi->id) }}" class="edit">✏️</a>
      <form action="{{ route('informasi.destroy', $informasi->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
        @csrf
        @method('DELETE')
        <button class="delete">🗑️</button>
      </form>
    </div>
  </li>
  @endforeach
</ul>


@endsection

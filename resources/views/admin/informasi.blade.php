@extends('layouts.app')

@section('title', 'Informasi - Holili Farm')

@section('content')

<div class="header">
  <h1>INFORMASI</h1>
  <a href="{{ route('informasi.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
  @foreach ($informasi as $index => $informasi)
  <li>
  <div style="flex: 2;">
    <p class="deskripsi">{{ $index + 1 }}. {{ $informasi->Deskripsi }}</p>
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

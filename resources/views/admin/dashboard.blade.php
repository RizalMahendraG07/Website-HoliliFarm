@extends('layouts.app')

@section('title', 'Produk - Holili Farm')

@section('content')

<div class="header">
  <h1>PRODUK</h1>
  <a href="{{ route('products.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
  @foreach ($products as $index => $product)
    <li>
      <div class="product-info">
        @if($product->image)
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
        @else
          <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="product-image">
        @endif
        <div class="product-details">
          <span>{{ $product->name }}</span>
          <span>Rp. {{ number_format($product->price, 0, ',', '.') }} /Kg</span>
          <span class="deskripsi">{{ $product->deskripsi }}</span>
        </div>
      </div>
      <div class="actions">
        <a href="{{ route('products.edit', $product->id) }}" class="edit">✏️</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
          @csrf
          @method('DELETE')
          <button class="delete">🗑️</button>
        </form>
      </div>
    </li>
  @endforeach
</ul>

@endsection

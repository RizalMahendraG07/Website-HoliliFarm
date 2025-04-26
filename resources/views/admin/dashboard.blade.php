@extends('layouts.app')

@section('title', 'Dashboard - Holili Farm')

@section('content')

<div class="header">
  <h1>PRODUK</h1>
  <a href="{{ route('products.create') }}" class="add-btn">+</a>
</div>

<ul class="product-list">
  @foreach ($products as $index => $product)
    <li>
      <span>{{ $index + 1 }}. {{ $product->name }}</span>
      <span>Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
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

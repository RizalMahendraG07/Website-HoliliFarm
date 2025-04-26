@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card">
  <h2>EDIT PRODUK</h2>
  <form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required>

    <label for="price">Harga</label>
    <input type="number" name="price" id="price" value="{{ $product->price }}" required>

    <div class="form-buttons">
      <a href="{{ route('products.index') }}" class="btn-red">KEMBALI</a>
      <button type="submit" class="btn-green">SIMPAN</button>
    </div>
  </form>
</div>
@endsection

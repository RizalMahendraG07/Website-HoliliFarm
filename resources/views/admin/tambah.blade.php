@extends('layouts.app') <!-- Sesuaikan dengan nama file layout-mu -->

@section('title', 'Tambah Produk')

@section('content')
<div class="card">
  <h2>TAMBAH PRODUK</h2>
  <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Nama</label>
    <input type="text" name="name" id="name" required>

    <label for="price">Harga</label>
    <input type="number" name="price" id="price" required>

    <div class="form-buttons">
      <a href="{{ route('dashboard') }}" class="btn-red">KEMBALI</a>
      <button type="submit" class="btn-green">TAMBAH</button>
    </div>
  </form>
</div>
@endsection

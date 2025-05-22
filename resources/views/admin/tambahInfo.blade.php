@extends('layouts.app') <!-- Sesuaikan dengan nama file layout-mu -->

@section('title', 'Tambah Informasi')

@section('content')
<div class="card">
  <h2>Tambah Informasi</h2>
  <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <label for="Judul">Judul</label>
  <input type="text" name="Judul" id="Judul" required>

  <label for="Deskripsi">Deskripsi</label>
  <input type="text" name="Deskripsi" id="Deskripsi" required>

  <label for="Tanggal">Tanggal</label>
  <input type="date" name="Tanggal" id="Tanggal" required>

  <label for="foto">Foto</label>
  <input type="file" name="foto" id="foto" accept="image/*">

  <label for="link">Link Artikel</label>
  <input type="text" name="link" id="link" required>

  <div class="form-buttons">
    <a href="{{ route('informasi.index') }}" class="btn-red">KEMBALI</a>
    <button type="submit" class="btn-green">TAMBAH</button>
  </div>
</form>

</div>
@endsection

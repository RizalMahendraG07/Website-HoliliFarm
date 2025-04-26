@extends('layouts.app')

@section('title', 'Edit Informasi')

@section('content')
<div class="card">
  <h2>EDIT INFORMASI</h2>
  <form action="{{ route('informasi.update', $informasi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="JUDUL">Judul</label>
    <input type="text" name="Judul" id="Judul" value="{{ $informasi->JUDUL }}" required>

    <label for="Deskripsi">Deskripsi</label>
    <input type="text" name="Deskripsi" id="Deskripsi" value="{{ $informasi->Deskripsi }}" required>

    <label for="Tanggal">Tanggal</label>
    <input type="date" name="Tanggal" id="Tanggal" value="{{ $informasi->Tanggal }}" required>

    <div class="form-buttons">
      <a href="{{ route('informasi.index') }}" class="btn-red">KEMBALI</a>
      <button type="submit" class="btn-green">SIMPAN</button>
    </div>
  </form>
</div>
@endsection

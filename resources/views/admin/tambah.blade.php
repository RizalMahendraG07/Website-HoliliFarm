

<div class="main-content">
  <div class="header">
    <h1>EDIT PRODUK</h1>
  </div>

  <form action="{{ route('products.store') }}" method="POST" class="product-form">
    @csrf
    <label>Nama</label>
    <input type="text" name="name" required>

    <label>Harga</label>
    <input type="number" name="price" required>

    <div class="form-buttons">
      <a href="{{ route('dashboard') }}" class="btn-red">KEMBALI</a>
      <button type="submit" class="btn-green">TAMBAH</button>
    </div>
  </form>
</div>


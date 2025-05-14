<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Holili Farm</title>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.2/dist/full.css" rel="stylesheet" />
    <style>
  html {
    scroll-behavior: smooth;
  }
</style>
</head>
<body class="bg-white min-h-screen">
    <header>
        <div class="navbar bg-white">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul class="menu menu-sm dropdown-content bg-white text-black rounded-box z-10 mt-3 w-52 p-2 shadow">
                        <li><a>Beranda</a></li>
                        <li><a>Produk</a></li>
                        <li><a>Lokasi</a></li>
                        <li><a>Informasi</a></li>
                        <li><a>Tentang Kami</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">
                    <img src="/images/holili-farm-logo.png" alt="Logo" class="h-10" />
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal text-black px-1">
    <li><a href="#home" class="hover:text-green-500">Beranda</a></li>
    <li><a href="#produk" class="hover:text-green-500">Produk</a></li>
    <li><a href="#maps" class="hover:text-green-500">Lokasi</a></li>
    <li><a href="#informasi" class="hover:text-green-500">Informasi</a></li>
    <li><a href="#tentangkami" class="hover:text-green-500">Tentang Kami</a></li>
</ul>
            </div>
            <div class="navbar-end">
                <a href="/dashboard" class="btn text-white bg-green-500 hover:bg-green-700">Log In</a>
            </div>
        </div>
    </header>
    <section id="home" class="p-6">
  <div class="row_home flex items-start justify-center">
    <div class="hero-content max-w-screen-xl w-full mx-auto px-20 flex flex-col items-center text-center lg:flex-row lg:text-left lg:gap-10">

      
      <!-- Bagian TEKS -->
      <div>
        <h1 class="text-6xl text-green-500 font-bold mb-4">Selamat Datang Di Holili Farm</h1>
        <p class="text-xl text-black">
          Merupakan Sistem Informasi Perkebunan Greenhouse yang berada di Desa Ajung-Jember.
        </p>
      </div>
      
      <!-- Bagian GAMBAR -->
      <img src="/images/foto model petani.png" class="max-w-sm rounded-lg" />

    </div>
  </div>
</section>
<!-- Section Produk -->
<section id="produk" class="p-6 bg-gray-100 min-h-screen shadow-lg flex flex-col items-center">
  <div class="max-w-xl pl-10 mb-6 text-center">
    <h2 class="text-4xl font-bold text-black">Produk Kami</h2>
  </div>
  <div class="flex space-x-4 justify-center"> <!-- Flex container untuk card -->
    <!-- Card 1 -->
    <div class="card bg-base-100 w-96 shadow-lg">
      <figure class="h-60 w-full overflow-hidden">
  <img src="/images/tomatt.jpeg" alt="Tomat" class="h-full w-full object-cover" />
</figure>
      <div class="card-body bg-white shadow-xl">
        <div class="flex items-center">
          <h2 class="card-title font-bold text-black">Tomat</h2>
          <span class="ml-4 text-red-500">Rp 20.000/Kg</span>
        </div>
        <p class="text-justify line-clamp-3">Tomat memiliki banyak khasiat bagi kesehatan, seperti menjaga daya tahan tubuh, mencegah kolesterol, mencegah kanker, mengatasi sembelit, menjaga kesehatan mata, dan menjaga kesehatan kulit.</p>
        <div class="card-actions justify-end">
          <button class="btn btn-primary bg-green-500">Beli</button>
        </div>
      </div>
    </div>
    
    <!-- Card 2 -->
    <div class="card bg-base-100 w-96 shadow-lg">
      <figure class="h-60 w-full overflow-hidden">
  <img src="/images/kentangg.jpg" alt="Tomat" class="h-full w-full object-cover" />
</figure>
      <div class="card-body bg-white shadow-xl">
        <div class="flex items-center">
          <h2 class="card-title font-bold text-black">Kentang</h2>
          <span class="ml-4 text-red-500">Rp 25.000/Kg</span>
        </div>
        <p class="text-justify line-clamp-3">Kentang memiliki berbagai khasiat yang baik untuk kesehatan, mulai dari menjadi sumber energi utama, mendukung kesehatan pencernaan, menjaga kesehatan jantung, hingga meningkatkan sistem kekebalan tubuh.</p>
        <div class="card-actions justify-end">
          <button class="btn btn-primary bg-green-500">Beli</button>
        </div>
      </div>
    </div>
    
    <!-- Card 3 -->
    <div class="card bg-base-100 w-96 shadow-lg">
      <figure class="h-60 w-full overflow-hidden">
  <img src="/images/cabe.jpg" alt="Tomat" class="h-full w-full object-cover" />
</figure>
      <div class="card-body bg-white shadow-xl">
        <div class="flex items-center">
          <h2 class="card-title font-bold text-black">Cabai</h2>
          <span class="ml-4 text-red-500">Rp 50.000/Kg</span>
        </div>
        <p class="text-justify line-clamp-3">Cabai memiliki berbagai manfaat kesehatan, di antaranya mengurangi nyeri, menurunkan berat badan, dan meningkatkan kesehatan pencernaan.</p>
        <div class="card-actions justify-end">
          <button class="btn btn-primary bg-green-500">Beli</button>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- MODAL -->
<div id="productModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
  <div class="bg-white w-[90%] max-w-md rounded-xl shadow-2xl p-6 relative">
    <figure class="h-48 w-full overflow-hidden rounded-lg mb-4">
      <img id="modalImage" src="" alt="Produk" class="h-full w-full object-cover" />
    </figure>
    <h3 class="text-xl font-semibold mb-2" id="modalTitle">Pemesanan Produk</h3>
    <form class="space-y-3">
      <input type="text" placeholder="Nama" class="input input-bordered w-full bg-white" required />
      <input type="text" placeholder="Alamat" class="input input-bordered w-full bg-white" required />
      <input type="tel" placeholder="Nomor WhatsApp" class="input input-bordered w-full bg-white" required />
      <input type="number" placeholder="Jumlah" class="input input-bordered w-full bg-white" required />
      <div class="flex justify-between pt-4">
        <button type="button" class="btn btn-outline text-white bg-red-500" onclick="closeModal()">Kembali</button>
        <button type="submit" class="btn btn-primary bg-green-600">Pesan</button>
      </div>
    </form>
  </div>
</div>

<script>
  function openModal(imageSrc, title) {
    document.getElementById('productModal').classList.remove('hidden');
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('modalTitle').innerText = `Pemesanan Produk: ${title}`;
  }

  function closeModal() {
    document.getElementById('productModal').classList.add('hidden');
  }

  document.querySelectorAll('.btn.bg-green-500').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      const card = e.target.closest('.card');
      const imgSrc = card.querySelector('img').src;
      const title = card.querySelector('h2').innerText;
      openModal(imgSrc, title);
    });
  });
</script>
</div>
<section id="informasi" class="p-6 bg-white text-black">
  <div class="text-center mb-10">
    <h2 class="text-4xl font-bold">Informasi</h2>
    <p class="text-lg text-gray-600">Artikel seputar budidaya anggur dan kisah inspiratif petani</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Artikel 1 -->
    <div class="card bg-white shadow-lg p-4">
      <h3 class="text-xl font-semibold mb-2">Panduan Budidaya Anggur</h3>
      <p class="text-justify text-gray-700 line-clamp-4">Gramedia menyediakan panduan lengkap budidaya anggur untuk pemula. Langkah awal seperti pembuatan naungan dan penggalian lubang tanam dijelaskan dengan detail.</p>
      <a href="https://www.gramedia.com/best-seller/budidaya-anggur/" target="_blank" class="text-green-500 hover:underline mt-2 inline-block">Baca selengkapnya</a>
    </div>

    <!-- Artikel 2 -->
    <div class="card bg-white shadow-lg p-4">
      <h3 class="text-xl font-semibold mb-2">Faiz Hidayat: Petani Anggur dari Banyumas</h3>
      <p class="text-justify text-gray-700 line-clamp-4">Faiz mengembangkan kebun anggur seluas 3.000 m² di Banyumas, dan belajar hingga ke Ukraina untuk mendalami teknik budidaya anggur berbagai varietas.</p>
      <a href="https://www.banyumaskab.go.id/read/32230/faiz-hidayat-petani-anggur-dari-banyumas-yang-rela-belajar-sampai-ke-ukraina" target="_blank" class="text-green-500 hover:underline mt-2 inline-block">Baca selengkapnya</a>
    </div>

    <!-- Artikel 3 -->
    <div class="card bg-white shadow-lg p-4">
      <h3 class="text-xl font-semibold mb-2">Budidaya Anggur di Desa Juwiring</h3>
      <p class="text-justify text-gray-700 line-clamp-4">Pak Arifin sukses membudidayakan 30 jenis anggur di Kendal dan memasarkan produknya hingga ke Papua dan Aceh. Peluang usaha yang menjanjikan di desa.</p>
      <a href="https://www.kompasiana.com/muhammadasifaq5495/66f37318ed6415742f69d4b2/mengenal-budidaya-tanaman-anggur-peluang-bisnis-unik-di-desa-juwiring-yang-menjanjikan" target="_blank" class="text-green-500 hover:underline mt-2 inline-block">Baca selengkapnya</a>
    </div>
  </div>
</section>

<!-- Section Maps -->
<section id="maps" class="p-6 bg-gray-100 min-h-[400px]">
  <div class="max-w-4xl mx-auto text-center mb-6">
    <h2 class="text-4xl font-bold text-black">Lokasi</h2>
    <p class="text-gray-600 mt-2">Kunjungi kebun Holili Farm yang berada di Desa Ajung, Jember.</p>
  </div>
  <div class="flex justify-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.5852428878993!2d113.71735997401359!3d-8.216521791815875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6978becfbfbb9%3A0xe0ee078b0e9aea76!2sPembibitan%20anggur%20import%20Rowo%20indah!5e1!3m2!1sid!2sid!4v1747172404830!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<!-- Section Tentang Kami -->
<section id="tentangkami" class="p-6 bg-gray-100 text-black">
  <div class="flex flex-col md:flex-row items-center max-w-5xl mx-auto">
    <!-- Gambar -->
    <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
      <img src="/images/green house.jpg" alt="Tentang Kami" class="w-full rounded-lg shadow-lg" />
    </div>

    <!-- Deskripsi -->
    <div class="md:w-1/2">
      <h2 class="text-4xl font-bold mb-4">Tentang Kami</h2>
      <p class="text-justify text-gray-700 leading-relaxed">
        Holili Farm adalah sistem informasi perkebunan modern yang berbasis Greenhouse dan berlokasi di Desa Ajung, Jember. Kami berkomitmen menyediakan produk pertanian berkualitas tinggi serta teknologi pemantauan yang memudahkan petani dalam merawat tanaman mereka. Dengan semangat inovasi dan keberlanjutan, kami ingin menjadi pelopor pertanian cerdas di Indonesia.
      </p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-green-600 text-white py-8">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
    <!-- Logo -->
    <div>
      <h3 class="text-2xl font-bold mb-2">Holili Farm</h3>
      <p class="text-sm">Pertanian ramah lingkungan berbasis teknologi di Jember.</p>
    </div>
    
    <!-- Sosial Media -->
    <div>
      <h4 class="font-semibold mb-2">Ikuti Kami</h4>
      <ul class="space-y-1">
        <li><a href="#" class="hover:underline">Instagram: @holilifarm</a></li>
        <li><a href="#" class="hover:underline">Facebook: Holili Farm</a></li>
        <li><a href="#" class="hover:underline">YouTube: Holili Farm Channel</a></li>
      </ul>
    </div>

    <!-- Kontak -->
    <div>
      <h4 class="font-semibold mb-2">Kontak</h4>
      <p>Belakang Balai Desa, RT.1/RW.3, Rowo, Rowo Indah, Kec. Ajung, Kabupaten Jember, Jawa Timur 68175</p>
      <p>WA: 0812-3456-7890</p>
      <p>Email: info@holilifarm.com</p>
    </div>
  </div>

  <div class="text-center text-sm mt-8 text-gray-200">
    &copy; 2025 Holili Farm. All rights reserved.
  </div>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holili Farm</title>
    
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Kustom -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DaisyUI (ekstensi Tailwind) -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.2/dist/full.css" rel="stylesheet" />
</head>
<header>
<body class="bg-gradient-to-b from-white to-green-200 min-h-screen">
    
<header>
  <div class="navbar bg-white shadow-sm text-black sticky top-0 z-50" data-aos="fade-down" data-aos-duration="600">
    <!-- Navbar Start -->
    <div class="navbar-start">
      <!-- Dropdown Menu (Mobile Only) -->
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul class="menu menu-sm dropdown-content bg-white rounded-box z-10 mt-3 w-52 p-2 shadow text-lg">
          <li><a class="text-black hover:text-white hover:bg-green-500">Beranda</a></li>
          <li><a class="text-black hover:text-white hover:bg-green-500">Produk</a></li>
          <li><a class="text-black hover:text-white hover:bg-green-500">Informasi</a></li>
          <li><a class="text-black hover:text-white hover:bg-green-500">Maps</a></li>
          <li><a class="text-black hover:text-white hover:bg-green-500">Tentang Kami</a></li>
        </ul>
      </div>

      <!-- Logo -->
      <a href="#home" class="btn btn-ghost ml-4">
        <img src="{{ asset('images/holili-farm-logo.png') }}" alt="Holili Farm Logo" class="h-12" />
      </a>
    </div>

    <!-- Navbar Center (Desktop Menu) -->
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1 text-lg">
        <li><a class="text-black hover:text-white hover:bg-green-500">Beranda</a></li>
        <li><a class="text-black hover:text-white hover:bg-green-500">Produk</a></li>
        <li><a class="text-black hover:text-white hover:bg-green-500">Informasi</a></li>
        <li><a class="text-black hover:text-white hover:bg-green-500">Maps</a></li>
        <li><a class="text-black hover:text-white hover:bg-green-500">Tentang Kami</a></li>
      </ul>
    </div>

    <!-- Navbar End -->
    <div class="navbar-end">
      <a href="/dashboard" class="btn btn-outline btn-success px-6 text-lg">Admin</a>
    </div>
  </div>
</header>

    <section id="home" class="p-6">
        <div class="row_home flex flex-col md:flex-row items-center justify-between">
            <div class="home_content_left max-w-xl">
                <h1 class="text-4x2 font-bold mb-2"> Selamat Datang Di Holili Farm</h1>
                <p class="text-lg mb-2">Merupakan Sistem Informasi Perkebunan Greenhouse yang berada di Desa Ajung-Jember.</p>
            </div>
            <div class="home_content_right mt-6 md:mt-0">
                <div class="slider">
                    <div class="slides">
                        <div class="slide"><img src="{{ asset('images/pakholili.png') }}" alt="Image 1"></div>
                        <div class="slide"><img src="{{ asset('image/foto4.png') }}" alt="Image 2"></div>
                        <div class="slide"><img src="{{ asset('image/service.png') }}" alt="Image 3"></div>
                    </div>
                    <div class="dots-container mt-4">
                        <div class="dots flex gap-2">
                            <span class="dot cursor-pointer w-3 h-3 bg-gray-400 rounded-full" onclick="currentSlide(1)"></span>
                            <span class="dot cursor-pointer w-3 h-3 bg-gray-400 rounded-full" onclick="currentSlide(2)"></span>
                            <span class="dot cursor-pointer w-3 h-3 bg-gray-400 rounded-full" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script tambahan AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

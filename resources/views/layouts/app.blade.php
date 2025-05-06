<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Holili Farm')</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div>
        <h2 class="sidebar-title">Holili Farm</h2>

        <nav class="sidebar-menu">
          <ul>
            <li class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
              <a href="{{ route('products.index') }}">
                🧺 Produk
              </a>
            </li>
            <li class="{{ request()->routeIs('informasi.*') ? 'active' : '' }}">
              <a href="{{ route('informasi.index') }}">
                ℹ️ Informasi
              </a>
            </li>
            <li class="{{ request()->routeIs('informasi.*') ? 'active' : '' }}">
              <a href="{{ route('riwayat.index') }}">
              ℹ️ Riwayat Penjualan
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button class="logout">Log Out</button>
      </form>
    </aside>

    <main class="main-content">
      @yield('content')
    </main>
  </div>
</body>
</html>

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
      <h2>Holili Farm</h2>
      <nav>
        <ul>
          <li class="active"><span>🧺</span> Produk</li>
          <li><span>ℹ️</span> Informasi</li>
        </ul>
      </nav>
      <form action="{{ route('logout') }}" method="POST">
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

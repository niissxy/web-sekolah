<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMAN 1</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
html, body {
    height: 100%;
}

body {
    display: flex;
    flex-direction: column;
}

.main-content {
    flex: 1; /* Membuat konten utama mengambil sisa tinggi layar */
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand text-bold" href="{{ route('home') }}">SMAN 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('activities') }}">Aktivitas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">Berita</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="py-4 main-content">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-2">
    <p class="mt-3">&copy; {{ date('Y') }} SMAN 1. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

@extends('layouts.app')
@section('content')

<style>
html, body {
    margin: 0;
}

/* Navbar tetap di atas */
.navbar {
    position: relative; /* bisa diganti fixed kalau mau */
    width: 100%;
    z-index: 1000;
}

/* Footer berada di bawah konten */
.footer {
    width: 100%;
    background: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

/* Konten utama */
.main-content {
    min-height: calc(100vh - 112px); /* 56px navbar + 56px footer, ubah sesuai tinggi */
    background-image: url("{{ asset('assets/images/home.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    padding-top: 56px; /* tinggi navbar */
    padding-bottom: 56px; /* tinggi footer */
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center; /* vertikal center konten di sisa area */
}

/* Overlay gelap */
.main-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    z-index: 0;
}

.main-content .container {
    position: relative;
    z-index: 1;
    color: #fff;
}
</style>

<div class="main-content">
    <div class="container">
        <h1 class="mb-4">Selamat Datang di SMAN 1</h1>
    </div>
</div>

@endsection

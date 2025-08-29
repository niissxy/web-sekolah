@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Kontak Kami</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea name="message" rows="5" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
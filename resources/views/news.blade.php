@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Berita</h1>

    <div class="row g-3">
        @forelse($news as $item)
        <div class="col-sm-6 col-md-4">
            <div class="card h-100">
                @if($item->image)
                <img src="{{ asset('assets/images/'.$item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                @endif
                <div class="card-body">
                    <h5>{{ $item->title }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($item->content, 120) }}</p>
                    <small>Dipublikasikan: {{ $item->published_at ?? '-' }}</small>
                </div>
            </div>
        </div>
        @empty
        <p>Tidak ada berita tersedia.</p>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $news->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
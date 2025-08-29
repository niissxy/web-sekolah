@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Aktivitas</h1>

    <div class="row g-3">
        @forelse($activities as $activity)
        <div class="col-sm-6 col-md-4">
            <div class="card h-100">
                @if($activity->image)
                <!-- langsung dari public/assets/images -->
                <img src="{{ asset('assets/images/'.$activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
                @endif
                <div class="card-body">
                    <h5>{{ $activity->title }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($activity->description, 120) }}</p>
                    <small>Tanggal: {{ $activity->date ?? '-' }}</small>
                </div>
            </div>
        </div>
        @empty
        <p>Tidak ada kegiatan tersedia.</p>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $activities->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection

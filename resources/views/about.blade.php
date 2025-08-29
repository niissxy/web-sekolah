@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tentang Sekolah</h1>
    <div class="card mb-3">
        <div class="row g-0 align-items-center">
            <!-- Kolom gambar dengan border radius dan padding -->
            <div class="col-md-4 text-center" style="overflow: hidden; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; padding: 1rem;">
                <img src="{{ asset('assets/images/home.jpg') }}" 
                     class="img-fluid" 
                     alt="Sekolah" 
                     style="max-width: 300px;">
            </div>
            <!-- Kolom teks -->
            <div class="col-md-8">
                <div class="card-body">
                    <p>
                        Sekolah SMA 1 berdiri dengan visi menciptakan generasi unggul yang cerdas, kreatif, dan berbudi pekerti luhur. 
                        Sejak didirikan pada tahun 1940, kami telah berkomitmen untuk menyediakan pendidikan berkualitas yang mengembangkan potensi akademik, sosial, dan emosional siswa secara seimbang.
                    </p>
                </div>
            </div>

             <div class="col-md-4 text-center" style="overflow: hidden; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; padding: 1rem;">
                <img src="{{ asset('assets/images/foto.jpg') }}" 
                     class="img-fluid" 
                     alt="Sekolah" 
                     style="max-width: 300px;">
            </div>
            <!-- Kolom teks -->
            <div class="col-md-8">
                <div class="card-body">
                    <p>
                        Fasilitas modern dan tenaga pengajar profesional kami mendukung proses belajar mengajar yang interaktif dan inovatif. 
                        Selain fokus pada akademik, kami juga mendorong kegiatan ekstrakurikuler, seni, olahraga, dan teknologi, sehingga siswa dapat mengeksplorasi minat dan bakat mereka secara maksimal.
                        Melalui pendekatan pendidikan yang inklusif dan berorientasi pada masa depan, 
                        SMA 1 terus berupaya membentuk generasi yang siap menghadapi tantangan global dengan karakter yang kuat, etika yang baik, dan kemampuan berpikir kritis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

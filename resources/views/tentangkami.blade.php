@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="tentang-hero position-relative">
    <img src="{{ asset('images/tentang.jpg') }}" class="img-fluid w-100" alt="Tentang Kami">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
        <div class="container">
            <h1 class="text-white fw-bold display-15">TENTANG KAMI</h1>
        </div>
    </div>
</section>

{{-- PROFIL --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-semibold mb-3">PROFIL</h3>
        <p class="text-muted" style="max-width: 900px;">
            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional 
            yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak 
            muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
        </p>
    </div>
</section>

{{-- VISI & MISI --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            {{-- VISI --}}
            <div class="col-md-6 text-center text-md-start">
                <img src="{{ asset('images/visi.png') }}" class="img-fluid rounded-4 mb-3" alt="Visi">
                <h4 class="fw-semibold mb-3">VISI</h4>
                <p class="text-muted">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional 
                    untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan 
                    yang tangguh, mandiri, dan profesional.
                </p>
            </div>

            {{-- MISI --}}
            <div class="col-md-6 text-center text-md-start">
                <img src="{{ asset('images/misi.png') }}" class="img-fluid rounded-4 mb-3" alt="Misi">
                <h4 class="fw-semibold mb-3">MISI</h4>
                <p class="text-muted">
                    Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi 
                    di lebih dari 25 negara maju di dunia dengan layanan yang profesional.
                </p>
                <p class="text-muted">
                    Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya 
                    dari berbagai aspek, baik aspek sosial, budaya, maupun pendidikan.
                </p>
            </div>
        </div>

        {{-- TOMBOL --}}
        <div class="text-left mt-4">
            <a href="{{ route('layanan') }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
                LAYANAN KAMI
            </a>
        </div>
    </div>
</section>

@endsection

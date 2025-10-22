{{-- Muhafidh --}}
@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

{{-- Hero Section --}}
<section id="hero" class="d-flex align-items-end text-white position-relative"
         style="background: url('{{ asset('images/picgedung.png') }}') center center / cover no-repeat; min-height: 80vh;">
    <div class="container mb-5">
        <div class="p-4 rounded-3" 
             style="background: linear-gradient(90deg, rgba(75,0,85,0.85) 0%, rgba(47,128,237,0.85) 100%); max-width:500px;">
            <h5 class="fw-bold mb-3">INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?</h5>
            <a href="#" class="btn btn-outline-light btn-sm">SELENGKAPNYA</a>
        </div>
    </div>
</section>

{{-- Tentang Kami --}}
<section id="tentang" class="text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">TENTANG KAMI</h2>
        <p class="lead text-muted">
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah 
            memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, 
            perjalanan wisata, dan berkarir di negara maju di dunia.
        </p>
    </div>
</section>

{{-- LAYANAN KAMI --}}
<section id="layanan" class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-5">LAYANAN KAMI</h2>

        <div class="row g-4">
            @php
                $layanan = [
                    ['gambar' => 'layanan1.png', 'judul' => 'Studi S1 - Bachelor'],
                    ['gambar' => 'layanan2.png', 'judul' => 'Studi S2 - Master'],
                    ['gambar' => 'layanan3.png', 'judul' => 'Studi S3 - Ph.D'],
                    ['gambar' => 'layanan4.png', 'judul' => 'Kursus Bahasa Asing'],
                    ['gambar' => 'layanan5.png', 'judul' => 'Study Tour'],
                    ['gambar' => 'layanan6.png', 'judul' => 'Ausbildung'],
                ];
            @endphp

            @foreach ($layanan as $item)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="layanan-card position-relative overflow-hidden rounded-3 shadow-sm">
                        <img src="{{ asset('images/' . $item['gambar']) }}" 
                             alt="{{ $item['judul'] }}" 
                             class="img-fluid w-100" 
                             style="height: 230px; object-fit: cover;">
                        
                        {{-- Overlay Gradient --}}
                        <div class="gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                        
                        {{-- Text in Image --}}
                        <div class="position-absolute bottom-0 start-0 w-100 text-start text-white p-3">
                            <h6 class="fw-semibold m-0">{{ $item['judul'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- MITRA KAMI --}}
<section id="mitra" class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-5">MITRA KAMI</h2>

        <div class="row justify-content-center g-4">
            @php
                $mitra = [
                    ['gambar' => 'mitra1.png', 'alt' => '424 Aviation'],
                    ['gambar' => 'mitra2.png', 'alt' => "St. Andrew's College"],
                    ['gambar' => 'mitra3.png', 'alt' => 'HTW Berlin'],
                    ['gambar' => 'mitra4.png', 'alt' => 'StudyGroup'],
                ];
            @endphp

            @foreach ($mitra as $logo)
                <div class="col-6 col-md-3">
                    <div class="mitra-card border rounded-3 shadow-sm bg-white d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/' . $logo['gambar']) }}" alt="{{ $logo['alt'] }}" class="img-fluid">
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Konseling Gratis --}}
        <div class="rounded-3 p-4 p-md-5 text-white mx-auto mt-5" 
             style="max-width: 900px; background: linear-gradient(90deg, #4B0055 0%, #2F80ED 100%);">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8 text-md-start text-center mb-3 mb-md-0">
                    <h5 class="fw-bold mb-1">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h5>
                    <p class="mb-0">Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
                </div>
                <div class="col-md-4 text-md-end text-center">
                    <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2">
                        MULAI KONSULTASI <span class="ms-1">▾</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ARTIKEL TERBARU --}}
<section id="artikel" class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold mb-5">ARTIKEL TERBARU</h2>

        <div class="row justify-content-center g-4">
            @php
                $artikel = [
                    ['gambar' => 'artikel1.jpg', 'judul' => '5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman'],
                    ['gambar' => 'artikel2.jpg', 'judul' => 'Uni Eropa Menghadapi Virus Korona'],
                    ['gambar' => 'artikel3.jpg', 'judul' => 'Belajar Bahasa Jerman Bersama Goethe Institut'],
                    ['gambar' => 'artikel4.jpg', 'judul' => 'Apa Itu Gates Cambridge? Yuk Cari Tahu'],
                ];
            @endphp

            @foreach ($artikel as $item)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="artikel-card h-100">
                        <img src="{{ asset('images/' . $item['gambar']) }}" 
                             alt="{{ $item['judul'] }}" 
                             class="img-fluid rounded-3 w-100 mb-3"
                             style="height: 180px; object-fit: cover;">
                        <h6 class="fw-semibold text-dark px-2">{{ $item['judul'] }}</h6>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">
                ARTIKEL LAINNYA
            </a>
        </div>
    </div>
</section>



{{-- Hubungi Kami --}}
<section id="kontak" class="text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">HUBUNGI KAMI</h2>
        <p>Alamat: Jl. Mawar No. 12, Jakarta | Email: info@klug.co.id | Telp: (021) 555-1234</p>
        <form class="row g-3 justify-content-center mt-4">
            <div class="col-md-4 col-10">
                <input type="text" class="form-control" placeholder="Nama Anda">
            </div>
            <div class="col-md-4 col-10">
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-10 col-md-8">
                <textarea class="form-control" rows="3" placeholder="Pesan Anda"></textarea>
            </div>
            <div class="col-10 col-md-8 text-end">
                <button class="btn btn-primary px-4">Kirim Pesan</button>
            </div>
        </form>
    </div>
</section>

@endsection

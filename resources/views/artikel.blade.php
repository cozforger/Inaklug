@extends('layouts.app')
@section('title', 'Artikel')
@section('content')

{{-- HERO SECTION --}}
<section class="artikel-hero position-relative">
    <img src="{{ asset('images/artikel-bg.jpg') }}" class="img-fluid w-100" alt="Artikel">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
        <div class="container mb-4">
            <h1 class="text-white fw-bold display-5">ARTIKEL</h1>
        </div>
    </div>
</section>

{{-- DAFTAR ARTIKEL --}}
<section class="py-5 text-center">
    <div class="container">
        <div class="row justify-content-center g-4">
            @php
                $artikel = [
                    ['gambar' => 'artikel1.jpg', 'judul' => '5 Fakta Sebelum Studi ke Jerman'],
                    ['gambar' => 'artikel2.jpg', 'judul' => 'Uni Eropa Menghadapi Virus Korona'],
                    ['gambar' => 'artikel3.jpg', 'judul' => 'Belajar Bahasa Jerman Bersama Goethe Institut'],
                    ['gambar' => 'artikel4.jpg', 'judul' => 'Apa Itu Gates Cambridge? Yuk Cari Tahu'],
                ];
            @endphp

            @foreach ($artikel as $item)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="artikel-card border-0 shadow-sm h-100 overflow-hidden rounded-3">
                        <img src="{{ asset('images/' . $item['gambar']) }}" class="w-100" style="height: 180px; object-fit: cover;" alt="{{ $item['judul'] }}">
                        <div class="p-3">
                            <h6 class="fw-semibold text-dark">{{ $item['judul'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">ARTIKEL LAINNYA</a>
        </div>
    </div>
</section>

@endsection

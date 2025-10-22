@extends('layouts.app')
@section('title', 'Layanan Kami')

@section('content')

{{-- Hero Section --}}
<section class="tentang-hero position-relative">
    <img src="{{ asset('images/layanan.jpg') }}" class="img-fluid w-100" alt="Layanan Kami">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
        <div class="container">
            <h1 class="text-white fw-bold display-15">LAYANAN KAMI</h1>
        </div>
    </div>
</section>

{{-- Daftar Layanan --}}
<section class="container my-5 text-center">
    <h2 class="fw-bold mb-5">Apa yang Kami Tawarkan</h2>
    <div class="row g-4">
        @foreach (range(1, 6) as $i)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/layanan' . $i . '.png') }}" class="card-img-top" alt="Layanan {{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Layanan {{ $i }}</h5>
                        <p class="card-text text-muted">
                            Penjelasan singkat mengenai layanan {{ $i }} yang kami sediakan untuk membantu pelanggan kami.
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- Hubungi Kami --}}
<section id="kontak" class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Hubungi Kami</h2>
        <p>Alamat: Jl. Mawar No. 12, Jakarta | Email: info@klug.co.id | Telp: (021) 555-1234</p>
        <div class="mt-3">
            <a href="{{ route('home') }}#kontak" class="btn btn-primary px-4">Kirim Pesan</a>
        </div>
    </div>
</section>

@endsection

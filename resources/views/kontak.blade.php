@extends('layouts.app')
@section('title', 'Hubungi Kami')
@section('content')

<section class="kontak-hero position-relative">
    <img src="{{ asset('images/becak.png') }}" class="img-fluid w-100" alt="Hubungi Kami">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
        <div class="container mb-4">
            <h1 class="text-white fw-bold display-5">HUBUNGI KAMI</h1>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <h4 class="fw-semibold mb-3">KIRIM PESAN</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('kontak.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="message" rows="4" class="form-control">{{ old('message') }}</textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Google reCAPTCHA --}}
                    <div class="mb-3">
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response') 
                            <small class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>

                    <button class="btn btn-primary px-4">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="fw-semibold mb-3">KONTAK KAMI</h4>
                <p><strong>Alamat:</strong> Jl. Sudirman No. 45, Jakarta</p>
                <p><strong>Telepon:</strong> +62 812 3456 7890</p>
                <p><strong>Email:</strong> info@inaklug.com</p>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    {!! NoCaptcha::renderJs() !!}
@endpush

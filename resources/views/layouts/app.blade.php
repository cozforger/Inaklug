<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Klug</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar gradient */
        .navbar {
            min-height: 90px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 1rem;
            margin: 0 12px;
            padding-bottom: 6px;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }

        /* Hapus garis saat hover */
        .navbar-nav .nav-link:hover {
            border-bottom: 2px solid transparent;
        }

        /* Garis muncul hanya di link aktif */
        .navbar-nav .nav-link.active {
            border-bottom: 2px solid #fff;
        }
        .btn-online {
            background-color: #195BA5;
            color: white;
            border-radius: 30px;
            padding: 8px 28px;
            font-weight: 500;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-online:hover {
            background-color: #2F80ED;
        }

        form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* 🌈 Mobile menu full width */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: linear-gradient(180deg, #4B0055 0%, #2F80ED 100%);
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                z-index: 99;
                padding: 20px 0 40px;
                text-align: center;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
            }
            .navbar-nav .nav-item {
                margin: 10px 0;
            }
        }
        .mitra-card {
            height: 120px;
            transition: transform 0.3s ease;
        }
        .mitra-card img {
            max-height: 80px;
            width: auto;
            object-fit: contain;
        }
        .mitra-card:hover {
            transform: scale(1.05);
        }
        .artikel-card {
            background: transparent;
            border: none;
            transition: transform 0.3s ease;
        }
        .artikel-card:hover {
            transform: translateY(-5px);
        }
        .artikel-card img {
            transition: transform 0.4s ease;
        }
        .artikel-card:hover img {
            transform: scale(1.03);
        }
        #artikel h6 {
            font-size: 0.95rem;
            line-height: 1.4;
        }
        .tentang-hero {
            height: 400px;
            overflow: hidden;
        }

        .tentang-hero img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(80%);
        }

        .tentang-hero .overlay {
            background: linear-gradient(90deg, rgba(70,7,78,0.8), rgba(25,123,208,0));
        }
        .artikel-card {
            background: transparent;
            border: none;
            transition: transform 0.3s ease;
        }
        .artikel-card:hover {
            transform: translateY(-5px);
        }
        .artikel-card img {
            transition: transform 0.4s ease;
        }
        .artikel-card:hover img {
            transform: scale(1.03);
        }
        #artikel h6 {
            font-size: 0.95rem;
            line-height: 1.4;
        }
        .tentang-hero {
            height: 400px;
            overflow: hidden;
        }

        .tentang-hero img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(80%);
        }

        .tentang-hero .overlay {
            background: linear-gradient(90deg, rgba(70,7,78,0.8), rgba(25,123,208,0));
        }
        /* Hero umum untuk Artikel & Hubungi Kami */
        .artikel-hero, .kontak-hero {
            height: 400px;
            overflow: hidden;
        }

        .artikel-hero img, .kontak-hero img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(80%);
        }

        .artikel-hero .overlay, .kontak-hero .overlay {
            background: linear-gradient(90deg, rgba(75,0,85,0.8), rgba(47,128,237,0));
        }
        .footer {
            background: linear-gradient(90deg, #4B0055, #3892E0);
            color: white;
            font-size: 0.9rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3 shadow-sm"
     style="background: linear-gradient(90deg, #4B0055 0%, #3456B5 50%, #2F80ED 100%);">
    <div class="container d-flex align-items-center justify-content-between">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" class="me-2">
            <span class="fw-bold fs-2 text-white" style="letter-spacing:1px;"></span>
        </a>

        {{-- Tombol hamburger (mobile) --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-1 text-white"></i>
        </button>

        {{-- Menu Navigasi --}}
        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            {{-- Menu utama --}}
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('layanan-kami') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Hubungi Kami</a>
                </li>
            </ul>


            {{-- Pencarian dan tombol (muncul di dalam hamburger pada mobile) --}}
            <div class="d-lg-none mt-3">
                <form class="d-flex align-items-center justify-content-center mb-3" style="position: relative;">
                    <i class="bi bi-search text-white position-absolute" style="left: 15%;"></i>
                    <input type="text" 
                           class="form-control bg-transparent border-0 border-bottom text-white ps-4" 
                           placeholder="Ketik pencarian"
                           style="width: 70%; outline: none;">
                </form>
                <a href="#" class="btn-online text-decoration-none">DAFTAR ON-LINE</a>
            </div>
        </div>

        {{-- Pencarian & tombol kanan (desktop) --}}
        <div class="d-none d-lg-flex align-items-center">
            <form class="d-flex align-items-center me-4" style="position: relative;">
                <i class="bi bi-search text-white position-absolute" style="left: 10px;"></i>
                <input type="text" 
                       class="form-control bg-transparent border-0 border-bottom text-white ps-4" 
                       placeholder="Ketik pencarian"
                       style="width: 180px; outline: none;">
            </form>
            <a href="#" class="btn-online text-decoration-none">DAFTAR ON-LINE</a>
        </div>

    </div>
</nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
<footer class="footer">
    <div class="container text-center py-3">
        <p class="m-0 text-white">
            Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang
        </p>
    </div>
</footer>

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

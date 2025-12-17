<!DOCTYPE html>
<html lang="da">
<head>
    <!-- Meta tags for character encoding and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
    
    <!-- Dynamic page title with fallback -->
    <title>
        @hasSection('title')
            @yield('title') | Our Place
        @else
            Our Place - Café, Brætspil & Hygge
        @endif
    </title>

    <!-- External CSS libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts: Outfit, Plus Jakarta Sans, and Playfair Display -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
    <!-- AOS (Animate On Scroll) library for scroll animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom stylesheets in order of specificity -->
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Stack for page-specific styles -->
    @stack('styles')

    <style>
    </style>
</head>
<body>

<!-- Main site header with floating navigation -->
<header>
    <nav class="navbar navbar-expand-lg navbar-floating ">
        <div class="container-fluid px-0">
            <!-- Brand logo -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Our Place Logo" class="navbar-logo">
                <span>OUR PLACE</span>
            </a>
            <!-- Mobile menu toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars text-dark"></i>
            </button>
            <!-- Collapsible navigation menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <hr class="d-lg-none my-3 text-muted">
                <ul class="navbar-nav align-items-center">
                    <!-- Home page link -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                           href="{{ url('/') }}">
                            Forside
                        </a>
                    </li>
                    <!-- D&D Events page link -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dnd*') ? 'active' : '' }}"
                           href="{{ url('dnd') }}">
                            Events
                        </a>
                    </li>
                    <!-- Game catalogue page link -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('catalogue*') ? 'active' : '' }}"
                           href="{{ url('catalogue') }}">
                            Spilbibliotek
                        </a>
                    </li>
                    <!-- Call-to-action booking button -->
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a href="#reserver" class="btn btn-sm btn-custom-primary w-100">Book Bord</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main content area where page content is injected -->
<main>
    @yield('content')
</main>

<!-- Site footer with branding and social links -->
<footer class="footer-custom py-5 text-center">
    <div class="container position-relative" data-aos="fade-in">
        <!-- Footer logo linking back to home -->
        <a href="/" class="text-decoration-none">
            <h2 class="footer-logo mb-3">OUR PLACE</h2>
        </a>

        <!-- Footer tagline -->
        <p class="footer-tagline mb-4">Et sted for hygge og gode stunder</p>

        <!-- Social media links -->
        <div class="d-flex justify-content-center gap-4 mb-4">
            <a href="https://www.facebook.com/p/Our-Place-Br%C3%A6tspilscaf%C3%A9-61553844893402/" class="social-link" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Decorative divider line -->
        <div class="footer-divider mx-auto mb-4"></div>

        <!-- Copyright notice -->
        <p class="copyright-text mb-0">
            &copy; 2023 Our Place. Alle rettigheder forbeholdes.
        </p>

        <!-- Google Reviews Rating Widget -->
        <div class="google-rating-widget">
            <a href="https://www.google.com/maps/place/Our+Place+-+Br%C3%A6tspilscaf%C3%A9/@55.6426679,12.0811018,17z/data=!4m8!3m7!1s0x46525f59e897688f:0x646ce626ff6695fd!8m2!3d55.6426649!4d12.0836767!9m1!1b1!16s%2Fg%2F11vrfkjsm6?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="google-rating-box">
                <div class="d-flex align-items-center gap-2">
                    <i class="fab fa-google google-icon-widget"></i>
                    <div class="rating-content">
                        <div class="rating-stars">
                            <span class="rating-number">4.9</span>
                            <div class="stars-display">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="rating-text">baseret på <strong>Google anmeldelser</strong></div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Footer stamps in bottom right -->
        <div class="footer-stamps">
            <img src="{{ asset('img/foedevare.gif') }}" alt="Food Regulations" class="footer-stamp stamp-image">
        </div>
    </div>
</footer>

<!-- External JavaScript libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Initialize AOS (Animate On Scroll) library -->
<script>
    AOS.init({offset: 120, delay: 0, duration: 1000, easing: 'ease', once: false});
</script>
</body>
</html>

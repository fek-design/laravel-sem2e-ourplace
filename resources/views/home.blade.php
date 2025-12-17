@extends('layouts.app')

@section('title', 'Forside')

{{-- Page-specific stylesheets --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/global.css') }}">
@endpush

@section('content')
    {{-- Hero section with main title and call-to-action buttons --}}
    <section class="hero-section">
        <div class="container hero-content-wrapper text-center text-white" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="hero-title">OUR PLACE</h1>
            <p class="hero-subtitle">Brætspil, hygge og caféklassikere, god kaffe,<br>lækre snacks og timevis af sjov
                med vennerne.</p>
            {{-- Primary action buttons --}}
            <div class="d-flex flex-column align-items-center gap-4">
                <a href="#" class="btn btn-custom-primary">Reservér</a>
                <a href="/dnd" class="btn btn-custom-outline">Læs Mere</a>
            </div>
        </div>

        {{-- Bottom section with booking info and scroll indicator --}}
        <div class="hero-bottom-text text-dark">
            <p class="booking-headline">
                Book bord på 10 sekunder, helt uden login
            </p>
            <p class="booking-subtitle">Nemt, hurtigt og gratis</p>
            <div class="hero-scroll-indicator">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>

        {{-- Decorative wave shape divider at bottom of hero --}}
        <div class="custom-shape-divider-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    {{-- Benefits section with rotating carousel of feature cards --}}
    <section class="container py-5 text-center position-relative mt-4">
        <div data-aos="fade-up">
            <p class="handwritten-note mb-1">Hvad venter dig?</p>
            <br>
            <h2 class="magic-underline mb-5">Find magien hos os</h2>

            {{-- Bootstrap carousel for displaying benefits --}}
            <div id="benefitsCarousel" class="carousel slide benefits-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    {{-- First benefit card: Game collection --}}
                    <div class="carousel-item active" data-bs-interval="2000">
                        <div class="playing-card">
                            <div class="benefit-icon"><i class="fas fa-layer-group"></i></div>
                            <h3 class="h3">500+ Spil</h3>
                            <p class="text-muted">Et kæmpe udvalg. Fra klassikere til moderne strategi, vi har noget
                                for enhver smag.</p>
                        </div>
                    </div>
                    {{-- Second benefit card: Regular events --}}
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="playing-card">
                            <div class="benefit-icon"><i class="fas fa-calendar-alt"></i></div>
                            <h3 class="h3">Jævnlige Events</h3>
                            <p class="text-muted">Quiz-aftener, turneringer og workshops. Deltag i fællesskabet og mød
                                nye mennesker.</p>
                        </div>
                    </div>
                    {{-- Third benefit card: Atmosphere --}}
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="playing-card">
                            <div class="benefit-icon"><i class="fas fa-mug-hot"></i></div>
                            <h3 class="h3">Hygge & Sammenhold</h3>
                            <p class="text-muted">Den perfekte atmosfære. Nyd en kop kaffe mens du fordyber dig i
                                spillets magi.</p>
                        </div>
                    </div>
                </div>

                {{-- Carousel navigation indicators --}}
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="0"
                            class="active"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="2"></button>
                </div>
            </div>

        </div>
    </section>

    {{-- Customer reviews section with sticky note style testimonials --}}
    <section class="container py-4 overflow-hidden">
        <div class="text-center mb-2" data-aos="fade-up">
            <h2 class="magic-underline">Historier fra bordet</h2>
        </div>

        {{-- Reviews carousel displaying customer testimonials --}}
        <div id="reviewsCarousel" class="carousel carousel-dark slide pb-5" data-bs-ride="carousel">

            <div class="carousel-inner py-3">
                {{-- First review: Google review --}}
                <div class="carousel-item active" data-bs-interval="4000">
                    <div class="sticky-note note-pink">
                        <h3 class="h4 fw-bold mb-3">Gæst (Google Review)</h3>
                        <p class="fst-italic">"Great atmosphere, nice coffee and lovely staff. The games selection is varied... They have muffins and æblekage which can be bought as a 'menu' deal with a coffee and access to all games for 99kr."</p>
                        <div class="user-rating mt-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                {{-- Second review: Mel Elizabeth --}}
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="sticky-note note-yellow">
                        <h3 class="h4 fw-bold mb-3">Mel Elizabeth</h3>
                        <p class="fst-italic">"So excited that Our Place Brætspilscafé is open in Roskilde! The cafe has a super nice combo with a game, snack, and drink for 99 kr. We bought the Roskilde quiz card game to learn more about the city."</p>
                        <div class="user-rating mt-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                {{-- Third review: Erin H --}}
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="sticky-note note-pink">
                        <h3 class="h4 fw-bold mb-3">Erin H</h3>
                        <p class="fst-italic">"My group enjoyed several hours of playing board games in the cozy atmosphere. You can get a menu that includes playing time with a snack and a drink... There are lots of different table sizes too for different group numbers."</p>
                        <div class="user-rating mt-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                {{-- Fourth item: Google Reviews CTA --}}
                <div class="carousel-item" data-bs-interval="4000">
                    <a href="https://www.google.com/maps/place/Our+Place+-+Br%C3%A6tspilscaf%C3%A9/@55.6426679,12.0811018,17z/data=!4m8!3m7!1s0x46525f59e897688f:0x646ce626ff6695fd!8m2!3d55.6426649!4d12.0836767!9m1!1b1!16s%2Fg%2F11vrfkjsm6?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-decoration-none sticky-note-link">
                        <div class="sticky-note note-google">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="fab fa-google me-2 google-icon-custom"></i>
                                <h3 class="h4 fw-bold mb-0">Se alle vores anmeldelser</h3>
                            </div>
                            <p class="mb-3">Læs hvad vores gæster siger om deres oplevelse hos os på Google.</p>
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <span class="text-muted small ms-2">Klik for at se mere →</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Carousel navigation indicators --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

        </div>
    </section>

    {{-- Events section promoting D&D and other activities --}}
    <section class="container py-5 overflow-hidden">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="magic-underline">Det sker i caféen</h2>
        </div>
        <div class="row align-items-center g-5">
            {{-- Polaroid image with D&D theme --}}
            <div class="col-md-6 text-center" data-aos="fade-right">
                <div class="img-polaroid-wrapper">
                    <div class="washi-tape"></div>
                    <img src="{{ asset('img/dnd/dnd-splash.jpg') }}" class="img-polaroid"
                         alt="Dungeons and Dragons dice">
                    <div class="handwritten-note mt-3" style="font-size: 1.4rem; transform: rotate(-2deg);">Eventyret
                        venter ⚔️
                    </div>
                </div>
            </div>
            {{-- Event information and features --}}
            <div class="col-md-6" data-aos="fade-left">
                <span class="badge bg-white text-dark shadow-sm mb-3 rounded-pill px-3 py-2 border fs-6">Nyhed!</span>
                <h3 class="fw-bold mb-4">Dungeons & Dragons og hygge</h3>
                <p>Vi er mere end bare brætspil. Hver uge åbner vi dørene for fællesskabet med faste events. Uanset om
                    du vil lære et nyt system eller vinde den store quiz, har vi en plads til dig.</p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <i class="fas fa-dice-d20 me-2" style="color: rgba(155, 107, 194);"></i>
                        <strong>D&D Kampagne-aften:</strong> Særligt for begyndere! Vi guider dig trygt igennem dit
                        første eventyr.
                    </li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Månedlige brætspilsturneringer</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pubquiz og temaaftener</li>
                </ul>
                <a href="/dnd" class="btn btn-custom-primary mt-4">Læs mere</a>
            </div>
        </div>
    </section>

    {{-- About section with team story and opening hours --}}
    <section class="container py-5 overflow-hidden">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="magic-underline">Bag Eventyret</h2>
        </div>
        <div class="row align-items-center g-5 flex-md-row-reverse">
            {{-- Team image --}}
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('img/home/us-splash.jpg') }}"
                     class="img-cornered" alt="Teamet bag Our Place">
            </div>
            {{-- About text and information --}}
            <div class="col-md-6" data-aos="fade-left">
                <span class="badge bg-white text-dark shadow-sm mb-3 rounded-pill px-3 py-2 border fs-6">Om os</span>
                <h3 class="fw-bold mb-4">Brætspil, kaffe og fællesskab</h3>

                <p>Our Place er startet af en stor kærlighed til kaffe og brætspil. Vi savnede et sted, hvor man kunne være sig selv, grine højt når taktikken fejler, og hvor der altid er plads ved bordet.</p>

                <p>Vores mission er simpel: Vi vil gøre brætspilshygge tilgængeligt for alle. Ingen krav om erfaring og ingen elitær stemning, kun ren hygge, sjove spil og fællesskab.</p>

                {{-- Opening hours information --}}
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <i class="fas fa-clock me-2" style="color: rgba(155, 107, 194);"></i>
                        <strong>Åbningstider:</strong>
                        <div class="ms-4 mt-1">
                            Fredag: kl. 15.00 - 18.00<br>
                            Lørdag: kl. 13.00 - 18.00
                        </div>
                    </li>
                </ul>

                <a href="#" class="btn btn-custom-primary mt-4">Læs mere</a>
            </div>
        </div>
    </section>
@endsection

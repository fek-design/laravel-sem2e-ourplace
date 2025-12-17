@extends('layouts.app')

@section('title', 'Katalog')

{{-- Page-specific stylesheets and inline styles --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/catalogue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/global.css') }}">
    <style>
        /* Counter badge styling for carousel slide numbers */
        .carousel-counter {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-family: var(--font-body, sans-serif);
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 15px;
            backdrop-filter: blur(4px);
        }
    </style>
@endpush

@section('content')
        {{-- Hero section for catalogue page --}}
        <section class="subpage-hero catalogue-hero">
            <div class="container text-center position-relative z-2" data-aos="fade-up">
                <h1 class="hero-title subpage-heading text-white mb-2">MENU & SPIL</h1>
                <p class="subpage-tagline text-white mb-0">Mad, drikke og eventyr</p>
            </div>
        </section>

        {{-- Catalogue grid section with clickable category items --}}
        <section class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="magic-underline">Vores Katalog</h2>
                <p class="mt-3 text-muted">Klik på kategorierne og swipe for at se siderne</p>
            </div>

            <div class="row g-5 pb-5 justify-content-center">
                {{-- Menu category item --}}
                <div class="col-md-4 col-sm-6 text-center" data-aos="fade-up">
                    <div class="catalogue-item-wrapper" onclick="openCarousel('menu')">
                        <div class="washi-tape"></div>
                        <img src="{{ asset('img/cat/m1.webp') }}" class="catalogue-page" alt="Menu Forside">
                    </div>
                    <p class="page-number">Menu</p>
                </div>

                {{-- Games category item --}}
                <div class="col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="catalogue-item-wrapper" onclick="openCarousel('games')">
                        <div class="washi-tape"></div>
                        <img src="{{ asset('img/cat/s1.webp') }}" class="catalogue-page" alt="Spil Forside">
                    </div>
                    <p class="page-number">Spil</p>
                </div>

                {{-- Events category item --}}
                <div class="col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="catalogue-item-wrapper" onclick="openCarousel('events')">
                        <div class="washi-tape"></div>
                        <img src="https://placehold.co/420x594/ffe6f7/9b6bc2?text=Events+Kommer" class="catalogue-page"
                             alt="Events Forside">
                    </div>
                    <p class="page-number">Events</p>
                </div>

            </div>

            {{-- Contact and location section with map --}}
            <section class="container py-5 overflow-hidden mb-5">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="handwritten-note mb-1">Kig forbi!</p>
                    <br>
                    <h2 class="magic-underline">Find vej til hyggen</h2>
                </div>

                <div class="row align-items-center g-5">
                    {{-- Contact information --}}
                    <div class="col-md-6" data-aos="fade-right">
                        <h3 class="fw-bold mb-4">Terningerne ruller på Munkebro</h3>

                        <p class="mb-4">
                            Vi tror på, at de bedste historier bliver fortalt over en spilleplade i godt selskab.
                            Hvad enten du er en veteran-strateg, der leder efter din næste udfordring, eller bare vil nyde en kop kaffe
                            og et hurtigt spil med vennerne, står der en stol klar til dig.
                        </p>

                        <p class="fst-italic text-muted mb-4">
                            Du behøver ikke en reservation for at kigge forbi – bare tag din nysgerrighed (og måske lidt konkurrenceånd) med under armen.
                        </p>

                        {{-- Contact details list --}}
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-map-marker-alt mt-1 me-3 info-icon"></i>
                                <div>
                                    <strong>Our Place</strong><br>
                                    Munkebro 1-3, 4000 Roskilde
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-envelope me-3 info-icon"></i>
                                <a href="mailto:kontakt@ourplacebraetspilscafe.dk" class="text-decoration-none info-link">kontakt@ourplacebraetspilscafe.dk</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fab fa-facebook me-3 info-icon"></i>
                                <a href="https://www.facebook.com/p/Our-Place-Br%C3%A6tspilscaf%C3%A9-61553844893402/" target="_blank" class="text-decoration-none info-link">Følg med på Facebook</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Google Maps iframe with decorative elements --}}
                    <div class="col-md-6" data-aos="fade-left">
                        <div class="position-relative">
                            <div class="washi-tape"></div>
                            <div class="shadow-lg rounded-3 overflow-hidden border map-frame">
                                <iframe
                                    src="https://maps.google.com/maps?q=Munkebro+1-3,+4000+Roskilde,+Danmark&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                    width="100%"
                                    height="100%"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <div class="handwritten-note position-absolute bottom-0 end-0 bg-white p-2 shadow-sm rotate-n3 floating-note">
                                Vi ses derinde! 🎲
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        {{-- Modal for displaying catalogue pages in carousel --}}
        <div class="modal fade" id="carouselModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body p-0 position-relative text-center">
                        {{-- Bootstrap carousel for navigating through catalogue pages --}}
                        <div id="catalogueCarousel" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner" id="carouselSlidesContainer">
                            </div>

                            {{-- Previous slide button --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#catalogueCarousel"
                                    data-bs-slide="prev">
                                <i class="fa-solid fa-angle-left drop-shadow" style="transform: scale(2)"></i>
                            </button>
                            {{-- Next slide button --}}
                            <button class="carousel-control-next" type="button" data-bs-target="#catalogueCarousel"
                                    data-bs-slide="next">
                                <i class="fa-solid fa-angle-right drop-shadow" style="transform: scale(2)"></i>
                            </button>
                        </div>

                        {{-- Slide counter display --}}
                        <div id="slideCounter" class="carousel-counter">
                            Side 1 af X
                        </div>

                    </div>
                </div>
            </div>
        </div>

    {{-- JavaScript for catalogue carousel functionality --}}
    <script>
        // Image data organized by category
        const catalogueData = {
            menu: [
                "{{ asset('img/cat/m1.webp') }}",
            ],
            games: [
                "{{ asset('img/cat/s1.webp') }}",
                "{{ asset('img/cat/s2.webp') }}",
                "{{ asset('img/cat/s3.webp') }}",
                "{{ asset('img/cat/s4.webp') }}",
                "{{ asset('img/cat/s5.webp') }}",
                "{{ asset('img/cat/s6.webp') }}",
                "{{ asset('img/cat/s7.webp') }}"
            ],
            events: [
                "https://placehold.co/420x594/ffe6f7/9b6bc2?text=Events+Kommer",
            ]
        };

        // Opens the carousel modal and populates it with images from selected category
        function openCarousel(category) {
            const slidesContainer = document.getElementById('carouselSlidesContainer');
            const images = catalogueData[category];

            // Safety check to ensure category exists and has images
            if (!images || images.length === 0) return;

            // Clear any previous slides from the container
            slidesContainer.innerHTML = '';

            // Build carousel slides dynamically from image array
            images.forEach((imgSrc, index) => {
                const isActive = index === 0 ? 'active' : '';
                const slideHTML = `
                    <div class="carousel-item ${isActive}">
                        <img src="${imgSrc}" class="d-block w-100 rounded shadow-lg" alt="Side ${index + 1}">
                    </div>
                `;
                slidesContainer.insertAdjacentHTML('beforeend', slideHTML);
            });

            // Initialize counter with first slide
            updateCounter(1, images.length);

            // Show the modal using Bootstrap's modal API
            const myModal = new bootstrap.Modal(document.getElementById('carouselModal'));
            myModal.show();

            // Set up event listener for slide changes to update counter
            // Clone carousel element to remove old event listeners and prevent duplicates
            const carouselElement = document.getElementById('catalogueCarousel');
            const newCarouselElement = carouselElement.cloneNode(true);
            carouselElement.parentNode.replaceChild(newCarouselElement, carouselElement);

            // Re-select the fresh carousel element and attach slide event listener
            const freshCarousel = document.getElementById('catalogueCarousel');
            freshCarousel.addEventListener('slide.bs.carousel', function (event) {
                // event.to contains the index of the next slide (0-based)
                updateCounter(event.to + 1, images.length);
            });
        }

        // Updates the slide counter text with current and total slide numbers
        function updateCounter(current, total) {
            const counterEl = document.getElementById('slideCounter');
            counterEl.innerText = `Side ${current} af ${total}`;
        }
    </script>
@endsection

@extends('layouts.app')

@section('title', 'DnD Event')

{{-- Page-specific stylesheets --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/dnd.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/global.css') }}">
@endpush

@section('content')
        {{-- Hero section for D&D page --}}
        <section class="subpage-hero dnd-hero">
            <div class="container text-center position-relative z-2" data-aos="fade-up">
                <h1 class="hero-title subpage-heading text-white mb-2">DUNGEONS & DRAGONS</h1>
                <p class="subpage-tagline text-white mb-0">FIND DIT NÆSTE EVENTYR</p>
            </div>
        </section>

        {{-- Introduction section explaining D&D for beginners --}}
        <section class="container py-5 mt-4">
            <div class="row align-items-center g-5">
                {{-- Polaroid image showing D&D gameplay --}}
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <div class="img-polaroid-wrapper">
                        <div class="washi-tape"></div>
                        <img src="{{ asset('img/dnd/dnd-splash2.jpg') }}" class="img-fluid" alt="D&D Game">
                        <div class="polaroid-caption">Character sheet kreation… ✍️</div>
                    </div>
                </div>
                {{-- Introduction text and feature highlights --}}
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                <p class="handwritten-note mb-1">Har du aldrig spillet før?</p>
                    <h2 class="magic-underline mb-4">Ingen erfaring? Intet problem.</h2>
                    <p>Hos Our Place handler Dungeons & Dragons ikke om at kunne reglerne udenad. Det handler om historien, fællesskabet og hyggen.</p>
                    <p>Vi stiller en erfaren Dungeon Master (DM) til rådighed, som guider dig sikkert gennem grotter, dragekampe og kro-slagsmål. Du skal bare møde op med dit gode humør.</p>

                    {{-- Feature highlights with icons --}}
                    <div class="d-flex gap-5 mt-5 text-center justify-content-start">
                        <div>
                            <i class="fas fa-users dnd-icon-simple"></i>
                            <p class="fw-bold">Nye Venner</p>
                        </div>
                        <div>
                            <i class="fas fa-book-open dnd-icon-simple"></i>
                            <p class="fw-bold">Vi lærer dig alt</p>
                        </div>
                        <div>
                            <i class="fas fa-beer dnd-icon-simple"></i>
                            <p class="fw-bold">Snacks & Hygge</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Quest board section with available D&D events --}}
        <section id="quests" class="container py-5 mb-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="font-cinzel display-5">The Quest Board</h2>
                <p class="text-muted">Vælg dit næste eventyr og reservér din plads ved bordet.</p>
            </div>

            <div class="row g-4">
                {{-- Quest card: Beginner-friendly campaign --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="quest-card h-100 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-success">Begynder</span>
                            <small class="text-muted fw-bold"><i class="far fa-calendar me-1"></i> 14. Dec</small>
                        </div>
                        <h3 class="h4 font-cinzel">The Lost Mine</h3>
                        <p class="text-muted small mb-4">En klassisk intro til D&D. Gruppen skal finde en forsvundet dværg i minerne nær Phandalin. Perfekt for helt nye spillere.</p>

                        <ul class="list-unstyled small text-muted mb-4 mt-auto">
                            <li class="mb-2"><i class="fas fa-clock text-warning me-2"></i>18:00 - 22:00</li>
                            <li class="mb-2"><i class="fas fa-user-tie text-warning me-2"></i>DM: Sarah</li>
                            <li><i class="fas fa-chair text-warning me-2"></i>2 pladser tilbage</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark rounded-pill w-100 stretched-link">Tilmeld</a>
                    </div>
                </div>

                {{-- Quest card: Intermediate horror-themed campaign --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="quest-card quest-card-soft h-100 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-warning text-dark">Let Øvet</span>
                            <small class="text-muted fw-bold"><i class="far fa-calendar me-1"></i> 21. Dec</small>
                        </div>
                        <h3 class="h4 font-cinzel">Curse of Strahd</h3>
                        <p class="text-muted small mb-4">En mørkere aften med gys og vampyrer. Vi spiller et 'one-shot' i Ravenloft universet. Tør du?</p>

                        <ul class="list-unstyled small text-muted mb-4 mt-auto">
                            <li class="mb-2"><i class="fas fa-clock text-warning me-2"></i>18:00 - 22:00</li>
                            <li class="mb-2"><i class="fas fa-user-tie text-warning me-2"></i>DM: Mikkel</li>
                            <li><i class="fas fa-chair text-warning me-2"></i>4 pladser tilbage</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark rounded-pill w-100 stretched-link">Tilmeld</a>
                    </div>
                </div>

                {{-- Quest card: Character creation workshop --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="quest-card h-100 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-info text-dark">Social</span>
                            <small class="text-muted fw-bold"><i class="far fa-calendar me-1"></i> 28. Dec</small>
                        </div>
                        <h3 class="h4 font-cinzel">Character Creation</h3>
                        <p class="text-muted small mb-4">Ikke et spil, men en hyggeaften hvor vi laver karakterer, maler figurer og snakker om regler over en kop kakao.</p>

                        <ul class="list-unstyled small text-muted mb-4 mt-auto">
                            <li class="mb-2"><i class="fas fa-clock text-warning me-2"></i>17:00 - 20:00</li>
                            <li class="mb-2"><i class="fas fa-user-tie text-warning me-2"></i>Alle er velkomne</li>
                            <li><i class="fas fa-chair text-warning me-2"></i>Gratis deltagelse</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark rounded-pill w-100 stretched-link">Læs mere</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Registration and practical information section --}}
        <section id="tilmelding" class="container pb-5">
            <div class="parchment-box parchment-wide mx-auto" data-aos="zoom-in">
                <div class="row align-items-center">
                    {{-- Pricing and practical details --}}
                    <div class="col-md-7">
                        <h4 class="mb-3 fs-3">Det praktiske</h4>
                        <p class="mb-2"><strong>💰 Pris:</strong> 75 kr. pr. person</p>
                        <p class="small text-muted mb-3">(Inkluderer pladsreservation i 4 timer og en valgfri drikkevare)</p>

                        <p class="mb-2"><strong>🎒 Hvad skal jeg medbringe?</strong></p>
                        <ul class="mb-4 small text-muted">
                            <li>Godt humør (påkrævet)</li>
                            <li>Dine egne terninger (valgfrit - vi har masser!)</li>
                            <li>Papir og blyant</li>
                        </ul>

                        {{-- Email signup form for event notifications --}}
                        <form class="mt-4">
                            <div class="input-group mb-3 newsletter-group">
                                <input type="email" class="form-control form-control-lg newsletter-input" placeholder="Din email adresse...">
                                <button class="btn btn-custom-primary rounded-end-pill" type="button">Få besked</button>
                            </div>
                            <small class="text-muted fst-italic">Skriv dig på ventelisten eller få besked om nye events.</small>
                        </form>
                    </div>
                    {{-- Decorative dragon icon --}}
                    <div class="col-md-5 text-center mt-4 mt-md-0">
                        <i class="fas fa-dragon dragon-icon"></i>
                    </div>
                </div>
            </div>
        </section>

@endsection


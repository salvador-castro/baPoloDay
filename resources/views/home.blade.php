@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="hero">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('video/horses.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay">
        <h1 class="hero-title">Experience the authentic <em>Argentine Polo</em></h1>
        <p class="hero-subtitle">Learn, play, and relax just 45 minutes from the city.</p>
        <a href="#book" class="btn btn-outline-light hero-btn mt-4">BOOK MY POLO DAY NOW</a>
    </div>
</section>

{{-- Our Next Ride --}}
<section class="py-5" id="next-ride" style="background:#6d665b10;">
    <div class="container">
        <h2 class="section-title mb-3">Our Next Ride</h2>
        <hr class="mb-4">
        <div class="row g-4 align-items-start">
            <div class="col-lg-5">
                <video autoplay muted loop playsinline class="w-100 rounded">
                    <source src="{{ asset('video/gaucho-left.mp4') }}" type="video/mp4">
                </video>
                <div class="mt-4">
                    <div class="text-uppercase small text-muted">Wetlands Experience:</div>
                    <h3 class="brand-serif display-6">Gaucho<br>Trail</h3>
                    <a href="#" class="btn btn-pill mt-3">Join us</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ratio ratio-16x9 rounded overflow-hidden">
                    <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
                        <source src="{{ asset('video/gaucho-right.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="row mt-4 g-4">
                    <div class="col-md-6">
                        <h6 class="fw-semibold">Details</h6>
                        <hr>
                        <div class="d-flex justify-content-between py-2 border-bottom"><span>Duration</span><span
                                class="fw-semibold">4 days / 4 nights</span></div>
                        <div class="d-flex justify-content-between py-2 border-bottom"><span>Date</span><span
                                class="fw-semibold">October 20, 2025</span></div>
                        <div class="d-flex justify-content-between py-2 border-bottom"><span>Location</span><span
                                class="fw-semibold">Esquina, Corrientes</span></div>
                        <div class="d-flex justify-content-between py-2"><span>Price</span><span
                                class="fw-semibold">$1520</span></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-semibold">Overview</h6>
                        <p class="mb-2 small">
                            This four-day experience invites you to live like a true gaucho, riding through stunning
                            wetlands where you can observe abundant wildlife and soak in the peacefulness of nature.
                        </p>
                        <p class="small mb-0">Enjoy traditional asados, relax in the serene countryside, sip wine by the
                            river at sunset, and visit a charming nearby town.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Upcoming Adventures --}}
<section class="py-5" id="upcoming">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="section-title mb-3">Upcoming Adventures</h2>
            <a href="#" class="btn btn-pill">Explore All</a>
        </div>
        <hr class="mb-4">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="trip-card">
                    <img src="{{ asset('images/upcoming-1.jpg') }}" alt="" class="w-100 mb-3">
                    <h3 class="mb-2">Los Alerces</h3>
                    <div class="text-muted small mb-3">November 20–25 | From $1900 | Esquel, Chubut</div>
                    <a class="btn btn-pill" href="#">Read More</a>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="trip-card">
                    <img src="{{ asset('images/upcoming-2.jpg') }}" alt="" class="w-100 mb-3">
                    <h3 class="mb-2">Wetlands</h3>
                    <div class="text-muted small mb-3">October 20–25 | From $1520 | Esquina, Corrientes</div>
                    <a class="btn btn-pill" href="#">Read More</a>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="trip-card">
                    <img src="{{ asset('images/upcoming-3.jpg') }}" alt="" class="w-100 mb-3">
                    <h3 class="mb-2">Malalco</h3>
                    <div class="text-muted small mb-3">December 13–17 | $2700 | San Martín de los Andes</div>
                    <a class="btn btn-pill" href="#">Read More</a>
                </article>
            </div>
        </div>
    </div>
</section>

{{-- How We Work --}}
<section class="how">
    <div class="container text-start text-white text-wrap text-shadow-sm text">
        <h6 class="mb-3">How We Work</h6>
        <p class="mb-0">Either choose from <em>our classic experiences</em> or <em>create your own</em>, but don’t miss
            out on Argentina’s true wild gems.</p>
    </div>
</section>

{{-- Our Experiences --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <h2 class="section-title mb-3">Our Experiences</h2>
                <p class="text-muted">Our Classic Adventures offer curated journeys through our favorite spots around
                    Argentina, each shaped by our signature touch.</p>
                <a href="{{ route('experiences', ['lang'=>app()->getLocale()]) }}" class="btn btn-pill mt-2">Explore
                    Options</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-3 mosaic">
                    <div class="col-4"><img src="{{ asset('images/exp-1.jpg') }}" alt=""></div>
                    <div class="col-4"><img src="{{ asset('images/exp-2.jpg') }}" alt=""></div>
                    <div class="col-4"><img src="{{ asset('images/exp-3.jpg') }}" alt=""></div>
                    <div class="col-4 d-none d-md-block"><img src="{{ asset('images/exp-4.jpg') }}" alt=""></div>
                    <div class="col-4 d-none d-md-block"><img src="{{ asset('images/exp-5.jpg') }}" alt=""></div>
                    <div class="col-4 d-none d-md-block"><img src="{{ asset('images/exp-6.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        {{-- Tailored Experiences --}}
        <div class="row g-4 align-items-center" id="tailored">
            <div class="col-lg-5">
                <h2 class="section-title mb-3">Tailored<br>Experiences</h2>
                <p class="text-muted">Craft your own experience with us, designed around what moves you most. Get in
                    touch to start your tailored adventure.</p>
                <a href="#" class="btn btn-pill mt-2">Start Planning</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-md-6"><img src="{{ asset('images/tailored-1.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                    <div class="col-md-6"><img src="{{ asset('images/tailored-2.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Us --}}
<section class="py-5">
    <div class="container">
        <h6 class="mb-3">About Us</h6>
        <hr class="mb-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/about-bw.jpg') }}" alt="Founders" class="about-img" style="height:520px;">
            </div>
            <div class="col-lg-6">
                <div class="small text-muted mb-2">The Founders</div>
                <h2 class="brand-serif" style="font-size:clamp(2rem,3.6vw,3rem);">Justo, Simon<br>&amp; Segundo</h2>
                <p class="mt-3">
                    We’re three outdoor fanatics whose passion for travel evolved into crafting unique horseback,
                    fishing and wilderness journeys rooted in Argentina’s spirit and traditions.
                </p>
                <a href="#" class="btn btn-pill mt-2">Read More</a>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials + Partners --}}
<section class="py-5" style="background:#faf9f6;">
    <div class="container">
        <div class="row text-center g-5">
            <div class="col-md-4">
                <div class="quote">“Better than I could have ever dreamed of.”</div>
                <p class="small mt-3 text-muted">They took me all over the country… service top-notch.</p>
                <div class="mt-2 small">– TJ –</div>
            </div>
            <div class="col-md-4">
                <div class="quote">“Absolute gem and life changing experience.”</div>
                <p class="small mt-3 text-muted">It exceeded my expectations by far… Will be back for sure.</p>
                <div class="mt-2 small">– Paulina –</div>
            </div>
            <div class="col-md-4">
                <div class="quote">“Highly recommendable.”</div>
                <p class="small mt-3 text-muted">A truly unforgettable experience with excellent service.</p>
                <div class="mt-2 small">– Antoine –</div>
            </div>
        </div>

        <h6 class="mt-5 mb-3">Our Partners</h6>
        <hr class="mb-4">
        <div class="d-flex flex-wrap align-items-center gap-4 partners">
            <img src="{{ asset('images/partner-1.png') }}" alt="Partner 1">
            <img src="{{ asset('images/partner-2.png') }}" alt="Partner 2">
            <img src="{{ asset('images/partner-3.png') }}" alt="Partner 3">
            <img src="{{ asset('images/partner-4.png') }}" alt="Partner 4">
            <img src="{{ asset('images/partner-5.png') }}" alt="Partner 5">
        </div>
    </div>
</section>

{{-- Footer hero --}}
<footer class="footer-hero">
    <div class="inner container">
        <h2 class="brand-serif display-4">BA Polo Day</h2>
        <div class="mt-4">
            <div>info@bapoloday.com</div>
            <div>+54 9 11 0000-0000</div>
            <div>IG: @ba_polo_day</div>
        </div>
        <div class="mt-4">
            <a href="#" class="link-white fw-semibold">Booking &amp; Conditions</a>
        </div>
        <div class="text-end small mt-5">© {{ date('Y') }} by BA Polo Day</div>
    </div>
</footer>
@endsection
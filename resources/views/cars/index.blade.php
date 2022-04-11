@extends('layouts.layout')
@section('content')
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light color-brand-bg shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/logo/Qfk-motors-small.png" alt="" width="auto" height="48">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/cars">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>

    <!-- hero section -->
    <div class="hero-secondary-section">
        <div class="container-custom">
            <div class="hero-secondary-content">
                <p>Qfk-motors / Listings</p>
            </div>
        </div>
    </div>

    <!-- listings IN-STOCK -->
    @if(count($listings) >= 1)
    <section class="listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Cars In Stock</h1>
                </header>
                <div class="listings-cards">

                <!-- foreach -->
                @foreach($listings as $listing)
                    <div class="listings-card">
                        <div class="listings-card-imgcontainer">
                            <p class="pricetag">TZS {{  number_format($listing->price) }}</p>
                            <p class="carstock">{{ $listing->stock }}</p>
                            <img src="/listing_images/{{ $listing->images[0]->image }}" alt="">
                        </div>
                        <div class="listings-card-info">
                            <div class="info-top">
                                <h5 class="makeandmodel">
                                    {{ $listing->make }}
                                    {{ $listing->model }}
                                </h5>
                                <p class="year">{{ $listing->manufacture }}</p>
                            </div>
                            <hr>
                            <div class="info-bottom">
                                <div class="mileage">
                                    <h5>Mileage</h5>
                                    <p>{{ number_format($listing->mileage) }}<span class="ms-1">Km</span></p>
                                </div>
                                <div class="transmission">
                                    <h5>Transmission</h5>
                                    <p>{{ $listing->transmission }}</p>
                                </div>
                                <div class="fuel">
                                    <h5>Fuel</h5>
                                    <p>{{ $listing->fuel }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="info-cta">
                                <a href="/cars/{{ $listing->id }}">
                                    <button class="button-sm">More Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end foreach -->
                
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    {{ $listings->links() }}
                </div>
                
                
            </div>
        </div>
    </section>
    @else
    <section class="listings featured-listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Featured Cars</h1>
                </header>
                <div class="mt-4">
                    <p class="text-center">Currently no Listings</p>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endsection
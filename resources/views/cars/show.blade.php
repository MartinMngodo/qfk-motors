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
                <p>Qfk-motors / Listings / Detail</p>
            </div>
        </div>
    </div>

    <!-- Details -->
    <section class="listings">
        <div class="container-custom">
            <div class="listings-content">
            <!-- single -->
                <header class="listings-header">
                    <h1>
                        {{ $listing->make }}
                        {{ $listing->model }}
                    </h1>
                </header>
                <div class="single-listing">
                    <div class="single-listing-info">
                        <div class="single-listing-data">
                            <div class="data-col">
                                <ul class="data-title">
                                    <li>Availability:</li>
                                    <li>Make:</li>
                                    <li>Model:</li>
                                    <li>Year:</li>
                                    <li>Mileage:</li>
                                    <li>Transmission:</li>
                                    <li>Fuel:</li>
                                    <li>Body:</li>
                                    <li>Drive:</li>
                                    <li>Exterior:</li>
                                    <li>Price:</li>
                                </ul>
                            </div>
                            <div class="data-col">
                                <ul class="data-data">
                                    <li>{{ $listing->stock }}</li>
                                    <li>{{ $listing->make }}</li>
                                    <li>{{ $listing->model }}</li>
                                    <li>{{ $listing->manufacture }}</li>
                                    <li>{{ number_format($listing->mileage) }}<span class="ms-1">Km</span></li>
                                    <li>{{ $listing->transmission }}</li>
                                    <li>{{ $listing->fuel }}</li>
                                    <li>{{ $listing->body }}</li>
                                    <li>{{ $listing->drive }}</li>
                                    <li>{{ $listing->exterior }}</li>
                                    <li>TZS {{  number_format($listing->price) }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-listing-image">
                            <div class="single-listing-imgcontainer">
                                <img src="/listing_images/{{ $listing->images[0]->image }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-listings-cta">
                        <a href="/contact">
                            <button class="button">Call Us</button>
                        </a>
                    </div>
                </div>
            <!-- end single -->
            </div>
        </div>
    </section>
    <section class="single-gallery">
        <div class="container-custom">
            <div class="single-gallery-content">
                <h1 class="single-header">Gallery</h1>
                <div class="single-grid">
                    @foreach($images as $image)
                    <a href="/listing_images/{{$image->image}}" class="single-imgcontainer shadow-sm">
                        <img src="/listing_images/{{$image->image}}" alt="">
                    </a>
                    @endforeach
                </div>
                <div class="single-listings-cta">
                    <a href="/contact">
                        <button class="button">Call Us</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endsection
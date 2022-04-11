@extends('layouts.layout')
@section('content')
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light color-brand-bg shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo/Qfk-motors-small.png" alt="" width="auto" height="48">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cars">Cars</a>
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
                <p>Qfk-motors / Home</p>
            </div>
        </div>
    </div>

    <!-- featured cars -->
    @if(count($listings) >= 1)
    <section class="listings featured-listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Featured Cars</h1>
                </header>
                <div class="listings-cards">

                <!-- foreach -->
                @foreach($listings as $listing)
                    <div class="listings-card">
                        <div class="listings-card-imgcontainer">
                            <p class="pricetag">TZS {{ $listing->price }}</p>
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
                                    <p>{{ $listing->mileage }}Km</p>
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
                <div class="featured-listings-cta">
                    <a href="/cars">
                        <button class="button">View All Cars</button>
                    </a>
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

    <!-- In Shipping -->
    @if(count($shippinglistings) >= 1)
    <section class="listings featured-listings bg-white">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Cars In Shipping</h1>
                </header>
                <div class="listings-cards">

                <!-- foreach -->
                @foreach($shippinglistings as $shippinglisting)
                    <div class="listings-card">
                        <div class="listings-card-imgcontainer">
                            <p class="pricetag">TZS {{ $shippinglisting->price }}</p>
                            <p class="carstock">{{ $shippinglisting->stock }}</p>
                            <img src="/listing_images/{{ $shippinglisting->images[0]->image }}" alt="">
                        </div>
                        <div class="listings-card-info">
                            <div class="info-top">
                                <h5 class="makeandmodel">
                                    {{ $shippinglisting->make }}
                                    {{ $shippinglisting->model }}
                                </h5>
                                <p class="year">{{ $shippinglisting->manufacture }}</p>
                            </div>
                            <hr>
                            <div class="info-bottom">
                                <div class="mileage">
                                    <h5>Mileage</h5>
                                    <p>{{ $shippinglisting->mileage }}Km</p>
                                </div>
                                <div class="transmission">
                                    <h5>Transmission</h5>
                                    <p>{{ $shippinglisting->transmission }}</p>
                                </div>
                                <div class="fuel">
                                    <h5>Fuel</h5>
                                    <p>{{ $shippinglisting->fuel }}</p>
                                </div>
                            </div>
                            <div class="info-cta">
                                <a href="/cars/{{ $shippinglisting->id }}">
                                    <button class="button-sm">More Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end foreach -->

                </div>
                <div class="featured-listings-cta">
                    <a href="/cars">
                        <button class="button">View All Cars</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="listings featured-listings bg-white">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Cars In Shipping</h1>
                </header>
                <div class="mt-4">
                    <p class="text-center">Currently no Listings in Shipping</p>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- sold cars -->
    @if(count($soldlistings) >= 1)
    <section class="listings featured-listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Sold Cars</h1>
                </header>
                <div class="listings-cards">

                <!-- foreach -->
                @foreach($soldlistings as $soldlisting)
                    <div class="listings-card">
                        <div class="listings-card-imgcontainer">
                            <p class="pricetag">TZS {{ $soldlisting->price }}</p>
                            <p class="carstock">{{ $soldlisting->stock }}</p>
                            <img src="/listing_images/{{ $soldlisting->images[0]->image }}" alt="">
                        </div>
                        <div class="listings-card-info">
                            <div class="info-top">
                                <h5 class="makeandmodel">
                                    {{ $soldlisting->make }}
                                    {{ $soldlisting->model }}
                                </h5>
                                <p class="year">{{ $soldlisting->manufacture }}</p>
                            </div>
                            <hr>
                            <div class="info-bottom">
                                <div class="mileage">
                                    <h5>Mileage</h5>
                                    <p>{{ $soldlisting->mileage }}Km</p>
                                </div>
                                <div class="transmission">
                                    <h5>Transmission</h5>
                                    <p>{{ $soldlisting->transmission }}</p>
                                </div>
                                <div class="fuel">
                                    <h5>Fuel</h5>
                                    <p>{{ $soldlisting->fuel }}</p>
                                </div>
                            </div>
                            <div class="info-cta">
                                <a href="/cars/{{ $soldlisting->id }}">
                                    <button class="button-sm">More Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end foreach -->

                </div>
                <div class="featured-listings-cta">
                    <a href="/cars">
                        <button class="button">View All Cars</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="listings featured-listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>Sold Cars</h1>
                </header>
                <div class="mt-4">
                    <p class="text-center">Currently no Sold Listings</p>
                </div>
            </div>
        </div>
    </section>
    @endif



    <!-- brands -->
    <div class="our-brands">
        <div class="container-custom">
            <div class="our-brands-content">
                <h2>Our Brands</h2>
                <div class="our-brands-grid">
                    <div class="our-brands-item">
                        <img src="/logo/mitsubishi.png" alt="mitsubishi logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/mercedes.png" alt="mercedes logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/bmw.png" alt="bmw logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/audi.png" alt="audi logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/ford.png" alt="ford logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/volkswagen.png" alt="volkswagen logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/lexus.png" alt="lexus logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/nissan.png" alt="nissan logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/landrover.png" alt="landrover logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/subaru.png" alt="subaru logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/toyota.png" alt="toyota logo">
                    </div>
                    <div class="our-brands-item">
                        <img src="/logo/honda.png" alt="honda logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our services -->
    <div class="our-services">
        <div class="container-custom">
            <div class="our-services-content">
                <h2>Our Services</h2>
                <div class="our-services-grid">
                    <div class="our-services-item">
                        <div class="box-frame">
                            <i class='bx bxs-ship bx-xs'></i>
                        </div>
                        <h4>Importation</h4>
                    </div>
                    <div class="our-services-item">
                        <div class="box-frame">
                            <i class='bx bxs-file bx-xs'></i>
                        </div>
                        <h4>Registration</h4>
                    </div>
                    <div class="our-services-item">
                        <div class="box-frame">
                            <i class='bx bxs-credit-card bx-xs'></i>
                        </div>
                        <h4>Insurance</h4>
                    </div>
                    <div class="our-services-item">
                        <div class="box-frame">
                            <i class='bx bxs-car bx-xs'></i>
                        </div>
                        <h4>Sell Cars</h4>
                    </div>
                    <div class="our-services-item">
                        <div class="box-frame">
                            <i class='bx bxs-store-alt bx-xs'></i>
                        </div>
                        <h4>Buy Used Cars</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
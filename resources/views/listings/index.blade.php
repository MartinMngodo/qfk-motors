@extends('layouts.app')
@section('content')
<!-- nav -->
<nav class="sticky-top bg-white">
    <div class="container">
        <ul class="nav nav-tabs gap-2">
            <li class="nav-item">
                <a class="nav-link" href="/listings/create">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/listings">Cars</a>
            </li>
        </ul>
    </div>
</nav>

<main>
    <!-- listings IN-STOCK -->
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
                            <div class="info-cta">
                                <a href="/listings/{{ $listing->id }}">
                                    <button class="button-sm">Details</button>
                                </a>
                                <a href="/listings/edit/{{ $listing->id }}">
                                    <button class="button-sm btn-primary">Edit</button>
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
    @endsection
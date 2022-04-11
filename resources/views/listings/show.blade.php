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
                    <!-- Button trigger modal -->
                    <div class="single-listings-cta">
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reg-modal">
                            Delete Car
                        </button>
                    </div>
                    <!-- modal itself -->
                    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title">Delete {{ $listing->make }} {{ $listing->model }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this car?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('listings.destroy', $listing->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button">DELETE CAR</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end single -->
            <a href="/listings" class="btn btn-primary"> Back to all Cars</a>
            </div>
            
        </div>
    </section>
    @endsection
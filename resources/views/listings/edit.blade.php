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
    <!-- listings form -->
    <section class="listings">
        <div class="container-custom">
            <div class="listings-content">
                <header class="listings-header">
                    <h1>
                        Edit {{ $listing->make }} {{ $listing->model }}
                    </h1>
                </header>
                @if(session('success'))
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4 class"alert-heading">Success</h4>
                    <p>Listing Edited</p>
                </div>
                @endif
                <div class="shadow-sm bg-white p-4 mt-4">
                    <form action="{{ route('listings.update', $listing->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <!-- stock -->
                            <div>
                                <label for="stock" class="form-label form-text">Stock Availability</label>
                                <select class="form-select" id="stock" name="stock" value="{{ $listing->stock }}">
                                    <option selected>Select Availability</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="sold">Sold</option>
                                    <option value="shipping">Shipping</option>
                                </select>
                            </div>
                        </div>
                        <div class="pt-2">
                            <input type="submit" value="update" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
            </div>
        </div>
    </section>
    @endsection
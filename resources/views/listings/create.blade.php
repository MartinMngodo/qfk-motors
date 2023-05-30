@extends('layouts.app')
@section('content')
<!-- nav -->
<nav class="sticky-top bg-white">
    <div class="container">
        <ul class="nav nav-tabs gap-2">
            <li class="nav-item">
                <a class="nav-link active" href="/listings/create">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/listings">Cars</a>
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
                    <h1>Add Listings</h1>
                </header>
                @if(session('success'))
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4 class"alert-heading">Success</h4>
                    <p>New Listing Added</p>
                </div>
                @endif
                <div class="shadow-sm bg-white p-4 mt-4">
                    <form action="/listings" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <!-- stock -->
                            <div>
                                <label for="stock" class="form-label form-text">Stock Availability</label>
                                <select class="form-select" id="stock" name="stock" required>
                                    <option disabled>Select Availability</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="sold">Sold</option>
                                    <option value="shipping">Shipping</option>
                                </select>
                            </div>
                            <!-- Make -->
                            <div>
                                <label for="make" class="form-label form-text">Choose Car Make</label>
                                <select class="form-select" id="make" name="make" required>
                                    <option disabled>Select Car Make</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="subaru">Subaru</option>
                                    <option value="mercedes-benz">Mercedes Benz</option>
                                    <option value="bmw">BMW</option>
                                    <option value="volkswagen">Volkswagen</option>
                                    <option value="audi">Audi</option>
                                    <option value="land rover">Land Rover</option>
                                    <option value="lexus">Lexus</option>
                                    <option value="nissan">Nissan</option>
                                    <option value="ford">Ford</option>
                                    <option value="jeep">Jeep</option>
                                    <option value="mitsubishi">Mitsubishi</option>
                                    <option value="suzuki">Suzuki</option>
                                    <option value="isuzu">Isuzu</option>
                                </select>
                            </div>
                            <!-- Model -->
                            <div>
                                <label for="model" class="form-label form-text">Model</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="altezza" required>
                            </div>
                            <!-- Manufacture Year -->
                            <div>
                                <label for="manufacture" class="form-label form-text">Year of Manufacture</label>
                                <input type="text" class="form-control" id="manufacture" name="manufacture" placeholder="Manufacture Year" required>
                            </div>
                            <!-- Mileage -->
                            <div>
                                <label for="mileage" class="form-label form-text">Mileage Km</label>
                                <input type="number" class="form-control" id="mileage" name="mileage" placeholder="25000" required>
                            </div>
                            <!-- Transmission -->
                            <div>
                                <label for="transmission" class="form-label form-text">Transmission</label>
                                <select class="form-select" id="transmission" name="transmission" required>
                                    <option disabled>Select Transmission</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="manual">Manual</option>
                                    <option value="dual">Dual</option>
                                </select>
                            </div>
                            <!-- Fuel -->
                            <div>
                                <label for="fuel" class="form-label form-text">Fuel</label>
                                <select class="form-select" id="fuel" name="fuel" required>
                                    <option disabled>Select Fuel</option>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                </select>
                            </div>
                            <!-- Body -->
                            <div>
                                <label for="body" class="form-label form-text">Body</label>
                                <select class="form-select" id="body" name="body" required>
                                    <option disabled>Select Car Body</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="station-wagon">Station Wagon</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="pickup">Pick Up</option>
                                    <option value="sports">Sports</option>
                                    <option value="mini-van">Mini Van</option>
                                    <option value="mini-bus">Mini Bus</option>
                                    <option value="coupe">Coupe</option>
                                    <option value="truck">Truck</option>
                                    <option value="motorbike">Motor Bike</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <!-- Drive -->
                            <div>
                                <label for="drive" class="form-label form-text">Drive</label>
                                <select class="form-select" id="drive" name="drive" required>
                                    <option disabled>Select Car Drive</option>
                                    <option value="2wd">2WD</option>
                                    <option value="awd">AWD</option>
                                    <option value="4wd">4WD</option>
                                </select>
                            </div>
                            <!-- Exterior -->
                            <div>
                                <label for="exterior" class="form-label form-text">Exterior</label>
                                <select class="form-select" id="exterior" name="exterior" required>
                                    <option disabled>Select Exterior</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                    <option value="gray">Gray</option>
                                    <option value="silver">Silver</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="brown">Brown</option>
                                    <option value="green">Green</option>
                                    <option value="orange">Orange</option>
                                    <option value="gold">Gold</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="maroon">Maroon</option>
                                </select>
                            </div>
                            <!-- Price -->
                            <div>
                                <label for="price" class="form-label form-text">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="8000000" required>
                            </div>
                            <!-- image -->
                            <div>
                                <label for="files" class="form-label form-text">Image</label>
                                <input type="file" class="form-control" id="image" name="images[]" accept="image/*" multiple required>
                            </div>
                        </div>
                        <div class="pt-2">
                            <input type="submit" value="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
            </div>
        </div>
    </section>
    @endsection
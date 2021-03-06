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
                    <a class="nav-link" href="/cars">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about">About</a>
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
                <p>Qfk-motors / About</p>
            </div>
        </div>
    </div>

    <!-- about -->
    <section class="about">
        <div class="container-custom">
            <div class="about-content">
                <div class="about-copy">
                    <h6>Qfk Motors</h6>
                    <h2>About Us</h2>
                    <p>
                        We are a car dealership based in Dar es Salaam, Tanzania. At qfk 
                        motors we provide a complete customer care experience by 
                        walking you through selecting and acquiring the vehicle that you 
                        desire. Vehicles in our collection are mainly sourced from Japan, UK, 
                        Hong Kong and Dubai but we will accomodate any preferences our customers have.
                    </p>
                    <p>
                        We also offer different insurance covers and pride ourselves in 
                        offering quality and satisfactory customer service.
                    </p>
                    <a href="/cars" class="btn-link">
                        <button class="button">View Cars</button>
                    </a>
                </div>
                <div class="about-imgcontainer">
                    <img src="/img/Hero.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- vision and mission -->
    <div class="vision">
            <div class="container-custom">
                <div class="vision-content">
                    <div class="vision-header">
                        <h2>What We Believe In</h2>
                    </div>
                    <div class="vision-grid">
                        <div class="vision-item">
                            <h4>Vision</h4>
                            <p>
                                To dominate and be the number one dealer 
                                choice for motor vehicle buyers in Tanzania 
                                and across East Africa.
                            </p>
                        </div>
                        <div class="vision-item">
                            <h4>Mission</h4>
                            <p>
                                To offer professional customer service by 
                                providing affordable and quality motor 
                                vehicles to our buyers.
                            </p>
                        </div>
                        <div class="vision-item">
                            <h4>Values</h4>
                            <p>
                                We value quality, speed and effeciency as well 
                                as ethics, reliability and trust in our operations, 
                                products and services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- extra info -->
    <section class="extra-info">
        <div class="container-custom">
            <div class="extra-info-content">
                <h2>How to get started</h2>
                <div class="extra-info-grid">
                    <div class="extra-info-item">
                        <p>1. Get started by contacting us and we will help you find your car of choice</p>
                    </div>
                    <div class="extra-info-item">
                        <p>2. Let us work on your order and necessary processes.</p>
                    </div>
                    <div class="extra-info-item">
                        <p>3. Complete registrations and drive off with your car.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

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
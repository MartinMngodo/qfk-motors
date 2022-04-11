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
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact">Contact</a>
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
                <p>Qfk-motors / Contacts</p>
            </div>
        </div>
    </div>

    <!-- contact -->
    <section class="contact">
        <div class="container-custom">
            <div class="contact-content">
                <div class="contact-imgcontainer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6679674292836!2d39.21421761436626!3d-6.81018126850126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c49389b67fd1b%3A0xa739d4daafb80a19!2sDCB%20COMMERCIAL%20BANK%20PLC!5e0!3m2!1sen!2ske!4v1648992218433!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-copy">
                    <h6>Qfk Motors</h6>
                    <h2>Get In Touch</h2>
                    <p>
                        We would like to help you with your next purchase. Visit us or 
                        contact us via call or mail and we will get back to you shortly.
                    </p>
                    <div class="contact-details">
                        <div class="contact-address">
                            <h4>Address</h4>
                            <span>P.O.BOX 90473</span>
                            <span>Dar es Salaam, Tanzania.</span>
                        </div>
                        <div class="contact-address">
                            <h4>Located At</h4>
                            <span>Mwembechai, Near DCB Bank, House No.4</span>
                        </div>
                        <div class="contact-address">
                            <h4>Contacts:</h4>
                            <span>qfkmotors@gmail.com</span>
                            <span>qfkinsurance@gmail.com</span>
                            <span>+255 722 172906</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
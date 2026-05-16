@extends('layouts.app')

@section('content')

<!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset("assets/img/hero_logistics_1777043517461.png") }}');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="hero-title">Global Reach,<br>Local Expertise.</h1>
                    <p class="hero-subtitle">Premium freight forwarding and comprehensive contract logistics solutions
                        tailored to your business needs. We ensure your cargo reaches its destination safely and on
                        time.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ url('/service') }}" class="btn btn-primary-custom">Our Services</a>
                        <a href="{{ url('/contact') }}" class="btn btn-outline-custom">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Why Choose Us</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We provide a seamless logistics experience backed by
                        industry-leading technology and a global network of partners.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fa-solid fa-ship service-icon"></i>
                        <h4>Freight Forwarding</h4>
                        <p class="text-muted mt-3">Reliable sea, air, and land freight forwarding services connecting
                            you to major markets worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fa-solid fa-warehouse service-icon"></i>
                        <h4>Contract Logistics</h4>
                        <p class="text-muted mt-3">End-to-end supply chain management including warehousing, inventory
                            control, and distribution.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fa-solid fa-shield-halved service-icon"></i>
                        <h4>Secure & Tracked</h4>
                        <p class="text-muted mt-3">Real-time tracking and comprehensive insurance coverage ensuring your
                            goods are always protected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Preview -->
    <section class="facility-preview-section position-relative"
        style="background-image: url('{{ asset("assets/img/facility_home.png") }}'); background-size: cover; background-position: center; background-attachment: fixed; padding: 100px 0;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.65);"></div>
        <div class="container position-relative z-1 text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4 text-white">World-Class Logistics Facilities</h2>
                    <p class="lead mb-5 opacity-75">Our state-of-the-art warehouses are strategically located and
                        equipped with advanced technology to ensure the highest level of security, efficiency, and
                        inventory management for your goods.</p>
                    <a href="{{  url('/facility')}}" class="btn btn-primary-custom btn-lg px-5 py-3">Explore Our Facilities</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Logistics Process -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Logistics Process</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">A transparent and efficient workflow designed to ensure
                        your cargo moves seamlessly from origin to destination.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="process-img-wrap" data-bs-toggle="modal" data-bs-target="#processModal">
                        <img src="{{ asset('assets/img/our_logistic_process.png') }}" alt="Our Logistics Process"
                            class="img-fluid rounded shadow-lg">
                        <div class="process-zoom-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            <span>Click to Preview</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Trusted Clients</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We are proud to partner with leading companies across various industries, providing them with reliable and efficient logistics solutions.</p>
                </div>
            </div>
        </div>
        
        <!-- Marquee Slider -->
        <div class="client-marquee-wrapper">
            <div class="client-marquee-track">
                <!-- Original Set -->
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_1.png') }}" alt="client_1"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_2.png') }}" alt="client_2"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_3.png') }}" alt="client_3"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_4.png') }}" alt="client_4"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_5.png') }}" alt="client_5"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_6.png') }}" alt="client_6"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_7.png') }}" alt="client_7"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_8.png') }}" alt="client_8"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_9.png') }}" alt="client_9"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_10.png') }}" alt="client_10"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_11.png') }}" alt="client_11"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_12.png') }}" alt="client_12"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_13.png') }}" alt="client_13"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_14.png') }}" alt="client_14"></div>
                <!-- Duplicate Set for Seamless Loop -->
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_1.png') }}" alt="client_1"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_2.png') }}" alt="client_2"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_3.png') }}" alt="client_3"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_4.png') }}" alt="client_4"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_5.png') }}" alt="client_5"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_6.png') }}" alt="client_6"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_7.png') }}" alt="client_7"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_8.png') }}" alt="client_8"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_9.png') }}" alt="client_9"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_10.png') }}" alt="client_10"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_11.png') }}" alt="client_11"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_12.png') }}" alt="client_12"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_13.png') }}" alt="client_13"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/client_14.png') }}" alt="client_14"></div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding" style="background: var(--primary-gradient); color: white;">
        <div class="container text-center">
            <h2 class="mb-4 text-white">Ready to optimize your supply chain?</h2>
            <p class="mb-5 lead opacity-75">Connect with our logistics experts today for a customized strategy.</p>
            <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg">Request a Consultation</a>
        </div>
    </section>

@endsection
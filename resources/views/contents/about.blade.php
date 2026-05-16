@extends('layouts.app')
@section('title', 'About Us')
@section('meta_description', 'Learn about SGI Logistics, your trusted partner in global supply chain solutions. Discover our vision, mission, and the experienced team behind our success.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/about_warehouse_1777043552976.png") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>About Us</h1>
            <p class="lead opacity-75">Your Trusted Partner in Global Supply Chain Solutions</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-img-wrap">
                        <img src="{{ asset('assets/img/about_warehouse_1777043552976.png') }}" alt="SGI Logistics Warehouse"
                            class="about-img img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="section-title">Who We Are</h2>
                    <p class="mt-4 text-muted">PT Sandika Global Indonesia (SGI), founded in 2022, specializes in international and domestic shipping from Jakarta. With a team of experienced professionals, we are dedicated to providing exceptional service, focusing on commitment, integrity, reliability, and adapting to global trends.</p>

                    <div class="row mt-5">
                        <div class="col-sm-6 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-earth-americas fs-1 text-primary me-3"></i>
                                <div>
                                    <h4 class="mb-0 fw-bold">150+</h4>
                                    <span class="text-muted small">Countries Served</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-users fs-1 text-primary me-3"></i>
                                <div>
                                    <h4 class="mb-0 fw-bold">1,200+</h4>
                                    <span class="text-muted small">Logistics Experts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-md-6">
                    <div class="p-5 bg-white rounded shadow-sm h-100 border-start border-5"
                        style="border-color: var(--primary-color) !important;">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa-solid fa-eye fs-1 text-primary me-3"></i>
                            <h2 class="mb-0">Our Vision</h2>
                        </div>
                        <p class="text-muted lead mb-0">To become the leading partner in reliable and innovative logistics solutions,contributing to the smooth flow of both local and global trade from Indonesia to the world.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5 bg-white rounded shadow-sm h-100 border-start border-5"
                        style="border-color: var(--secondary-color) !important;">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa-solid fa-bullseye fs-1 text-secondary me-3"></i>
                            <h2 class="mb-0">Our Mission</h2>
                        </div>
                        <p class="text-muted lead mb-0">
                            <ul>
                                <li>Enhancing delivery efficiency through technology and customer-centric services.</li>
                                <li>We provide reliable and timely logistics solutions to ensure seamless business operations</li>
                                <li>We are committed to maintaining integrity and trust in every transaction.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Core Values</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card text-center p-5">
                        <i class="fa-solid fa-handshake service-icon"></i>
                        <h4>Integrity</h4>
                        <p class="text-muted mt-3">We operate with absolute transparency and honesty, building lasting
                            trust with our clients and partners.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-5">
                        <i class="fa-solid fa-lightbulb service-icon"></i>
                        <h4>Innovation</h4>
                        <p class="text-muted mt-3">Embracing the latest logistics technologies to optimize supply chains
                            and deliver faster, smarter results.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-5">
                        <i class="fa-solid fa-star service-icon"></i>
                        <h4>Excellence</h4>
                        <p class="text-muted mt-3">Committed to exceeding expectations through rigorous quality control
                            and exceptional customer service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Management Team -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Management Team</h2>
                    <p class="text-muted mt-3">Meet the experienced professionals leading SGI Logistics to global success.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm overflow-hidden h-100 text-center pb-4">
                        <img src="{{  asset('assets/img/team_member_1.png')}}" alt="CEO" class="img-fluid w-100 mb-4" style="height: 350px; object-fit: cover; object-position: top;">
                        <h4 class="fw-bold mb-1">David Chen</h4>
                        <p class="text-primary fw-semibold mb-3">Chief Executive Officer</p>
                        <p class="text-muted px-4 small">With over 20 years in global logistics, David leads our strategic vision and international expansion efforts.</p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="#" class="text-muted"><i class="fa-brands fa-linkedin fs-5"></i></a>
                            <a href="#" class="text-muted"><i class="fa-solid fa-envelope fs-5"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm overflow-hidden h-100 text-center pb-4">
                        <img src="{{ asset('assets/img/team_member_2.png') }}" alt="COO" class="img-fluid w-100 mb-4" style="height: 350px; object-fit: cover; object-position: top;">
                        <h4 class="fw-bold mb-1">Sarah Jenkins</h4>
                        <p class="text-primary fw-semibold mb-3">Chief Operating Officer</p>
                        <p class="text-muted px-4 small">Sarah oversees daily operations, ensuring flawless execution across all our global supply chain networks.</p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="#" class="text-muted"><i class="fa-brands fa-linkedin fs-5"></i></a>
                            <a href="#" class="text-muted"><i class="fa-solid fa-envelope fs-5"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm overflow-hidden h-100 text-center pb-4">
                        <img src="{{ asset('assets/img/team_member_3.png') }}" alt="CFO" class="img-fluid w-100 mb-4" style="height: 350px; object-fit: cover; object-position: top;">
                        <h4 class="fw-bold mb-1">Carlos Mendoza</h4>
                        <p class="text-primary fw-semibold mb-3">Chief Financial Officer</p>
                        <p class="text-muted px-4 small">Carlos drives financial strategy and sustainability, optimizing investments in cutting-edge logistics technology.</p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="#" class="text-muted"><i class="fa-brands fa-linkedin fs-5"></i></a>
                            <a href="#" class="text-muted"><i class="fa-solid fa-envelope fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
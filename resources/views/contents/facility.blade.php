@extends('layouts.app')
@section('title', 'Our Facilities')
@section('meta_description', 'Discover SGI Logistics\' state-of-the-art facilities, including smart warehouses, dedicated port terminals, and advanced distribution centers. Our infrastructure is designed to ensure the highest levels of security, efficiency, and technological integration for your cargo handling needs.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, smart warehouses, port terminals, distribution centers, logistics technology, logistics security')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/facility_home.jpg") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Our Facilities</h1>
            <p class="lead opacity-75">State-of-the-Art Infrastructure for Global Trade</p>
        </div>
    </header>

    <!-- Facilities Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">World-Class Infrastructure</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We invest heavily in our facilities to ensure that your
                        cargo is handled with the utmost care, security, and efficiency using the latest technology.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Facility 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{  asset('assets/img/about_warehouse_1777043552976.jpg') }}" alt="Smart Warehouses">
                        <div class="facility-overlay">
                            <h4>Smart Warehouses</h4>
                            <p class="small mb-0">Fully automated inventory management, climate-controlled zones, and
                                24/7 security monitoring.</p>
                        </div>
                    </div>
                </div>
                <!-- Facility 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{  asset('assets/img/hero_logistics_1777043517461.webp') }}" alt="Port Terminals">
                        <div class="facility-overlay">
                            <h4>Dedicated Port Terminals</h4>
                            <p class="small mb-0">Strategic locations at major global ports to ensure rapid loading,
                                unloading, and transit.</p>
                        </div>
                    </div>
                </div>
                <!-- Facility 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{  asset('assets/img/service_land_1777043803865.jpg') }}" alt="Distribution Centers">
                        <div class="facility-overlay">
                            <h4>Distribution Centers</h4>
                            <p class="small mb-0">Optimized cross-docking facilities to accelerate the movement of goods
                                from inbound to outbound.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech & Security -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">Technology & Security</h2>
                    <p class="mt-4 text-muted">Our facilities aren't just large spaces; they are highly integrated
                        technological hubs designed to give you peace of mind.</p>

                    <div class="mt-4">
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fa-solid fa-microchip fs-3 text-secondary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Advanced WMS</h5>
                                <p class="text-muted small">Real-time Warehouse Management Systems providing accurate
                                    inventory tracking down to the SKU level.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fa-solid fa-video fs-3 text-secondary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">24/7 Surveillance</h5>
                                <p class="text-muted small">CCTV coverage, biometric access controls, and on-site
                                    security personnel ensuring total safety.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="fa-solid fa-temperature-snow fs-3 text-secondary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Climate Control</h5>
                                <p class="text-muted small">Specialized zones for perishable goods, pharmaceuticals, and
                                    sensitive electronics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6">
                            <img src="{{  asset('assets/img/service_air_1777043709915.jpg') }}" alt="Tech"
                                class="img-fluid rounded mb-2">
                            <img src="{{  asset('assets/img/hero_logistics_1777043517461.webp') }}" alt="Security"
                                class="img-fluid rounded">
                        </div>
                        <div class="col-6 mt-4">
                            <img src="{{  asset('assets/img/about_warehouse_1777043552976.jpg') }}" alt="Warehouse"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
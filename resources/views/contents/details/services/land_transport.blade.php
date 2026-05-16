@extends('layouts.app')
@section('title', 'Land Transport Services')
@section('meta_description', 'Connecting ports to final destinations seamlessly. Our vast network of trucking and rail partners ensures that your cargo moves smoothly across borders and throughout continents. We offer dedicated fleet solutions, optimized routing, and advanced tracking to ensure visibility over your ground transportation. Whether it is short-haul distribution or long-haul cross-border delivery, our reliable land transport network has you covered.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, land transport services, trucking network, rail freight, cross-border delivery, dedicated fleet solutions, optimized routing, advanced tracking')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/service_land_1777043803865.jpg") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Land Transport</h1>
            <p class="lead opacity-75">Connecting Ports to Final Destinations</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/service_land_1777043803865.jpg') }}" alt="Land Transport Detail"
                                class="img-fluid rounded shadow w-100">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Land Transport Services</h2>
                            <p class="text-muted lead">Connecting ports to final destinations seamlessly. Our vast network of
                                trucking and rail partners ensures that your cargo moves smoothly across borders and throughout
                                continents.</p>
                            <p class="text-muted mb-0">We offer dedicated fleet solutions, optimized routing, and advanced tracking
                                to ensure visibility over your ground transportation. Whether it is short-haul distribution or
                                long-haul cross-border delivery, our reliable land transport network has you covered.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-truck benefit-icon"></i>
                                <h5 class="fw-bold">FTL & LTL Shipping</h5>
                                <p class="text-muted small mb-0">Scalable trucking solutions allowing you to ship any
                                    size of cargo efficiently across borders.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-stopwatch benefit-icon"></i>
                                <h5 class="fw-bold">Time-Definite Delivery</h5>
                                <p class="text-muted small mb-0">Express ground transport services ensuring strict
                                    adherence to your delivery schedules.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-temperature-arrow-down benefit-icon"></i>
                                <h5 class="fw-bold">Temperature Control</h5>
                                <p class="text-muted small mb-0">Modern reefer trucks designed to preserve the integrity
                                    of perishable and sensitive goods.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-train benefit-icon"></i>
                                <h5 class="fw-bold">Rail & Intermodal</h5>
                                <p class="text-muted small mb-0">Cost-effective and sustainable rail freight integration
                                    for long-haul cargo movements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg px-5">Request a Quote Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
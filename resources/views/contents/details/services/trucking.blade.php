@extends('layouts.app')
@section('title', 'Trucking Services')
@section('meta_description', 'Fast, reliable, and secure land transportation. SGI Logistics provides dedicated trucking solutions covering FTL, LTL, container hauling, and specialized heavy road logistics with optimized routing and real-time tracking.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, trucking services, FTL, LTL, land transport, container hauling, road logistics, cargo dispatch, logistics dispatch')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/service_trucking.webp") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Trucking Services</h1>
            <p class="lead opacity-75">Secure & Timely Ground Transportation</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/service_trucking.webp') }}" alt="Trucking Detail"
                                 class="img-fluid rounded shadow w-100"
                                 style="max-height: 400px; object-fit: cover;">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Trucking Services</h2>
                            <p class="text-muted lead">Fast, reliable, and secure land transportation. Our dedicated trucking solutions cover short-haul distribution to long-haul container transport, backed by optimized routing and tracking systems for maximum efficiency.</p>
                            <p class="text-muted mb-0">We operate a modern and versatile fleet designed to handle Full Truckloads (FTL) and Less-than-Truckloads (LTL) with ease. Our intermodal integrations allow us to connect ports, airports, and inland hubs seamlessly, while our experienced drivers and support staff ensure your cargo travels safely and arrives strictly on schedule.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-truck-moving benefit-icon"></i>
                                <h5 class="fw-bold">FTL & LTL Shipping</h5>
                                <p class="text-muted small mb-0">Scalable shipping options from full truckload to smaller partial shipments to optimize costs.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-clock benefit-icon"></i>
                                <h5 class="fw-bold">Time-Definite Delivery</h5>
                                <p class="text-muted small mb-0">Express dispatch and timed transit guarantees for urgent and high-value cargo.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-arrows-spin benefit-icon"></i>
                                <h5 class="fw-bold">Container Haulage</h5>
                                <p class="text-muted small mb-0">Professional haulage of standard 20ft and 40ft containers directly from marine ports to warehouse yards.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-shield benefit-icon"></i>
                                <h5 class="fw-bold">Safety & Tracking</h5>
                                <p class="text-muted small mb-0">Optimized routing, highly trained drivers, and secure transit protocols ensuring cargo safety.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg px-5">Request a Trucking Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

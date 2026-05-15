@extends('layouts.app')
@section('title', 'Air Freight Services')
@section('meta_description', 'When time is of the essence, our Air Freight services deliver. We provide expedited shipping solutions across the globe, ensuring your urgent cargo reaches its destination swiftly and safely. With priority boarding and streamlined customs clearance, we minimize downtime. We partner with top-tier airlines to offer flexible capacity, regular flight schedules, and competitive rates, giving you the reliability you need for high-value and time-sensitive shipments.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, air freight services, expedited shipping, priority boarding, customs clearance, airline partnerships, flexible capacity, flight schedules, competitive rates')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset('assets/img/service_air_1777043709915.png') }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Air Freight</h1>
            <p class="lead opacity-75">Fast & Reliable Global Transport</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/service_air_1777043709915.png') }}" alt="Air Freight Detail"
                                class="img-fluid rounded shadow w-100">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Air Freight Services</h2>
                            <p class="text-muted lead">When time is of the essence, our Air Freight services deliver. We provide
                                expedited shipping solutions across the globe, ensuring your urgent cargo reaches its
                                destination swiftly and safely.</p>
                            <p class="text-muted mb-0">With priority boarding and streamlined customs clearance, we minimize
                                downtime. We partner with top-tier airlines to offer flexible capacity, regular flight
                                schedules, and competitive rates, giving you the reliability you need for high-value and
                                time-sensitive shipments.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-plane-up benefit-icon"></i>
                                <h5 class="fw-bold">Next Flight Out (NFO)</h5>
                                <p class="text-muted small mb-0">Prioritized dispatch for highly urgent shipments to
                                    guarantee the fastest delivery possible.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-plane-circle-check benefit-icon"></i>
                                <h5 class="fw-bold">Charter Flights</h5>
                                <p class="text-muted small mb-0">Exclusive aircraft arrangements for oversized,
                                    hazardous, or high-value cargo.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-truck-fast benefit-icon"></i>
                                <h5 class="fw-bold">Door-to-Door Delivery</h5>
                                <p class="text-muted small mb-0">Seamless end-to-end service including final mile
                                    delivery to the recipient's exact location.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-snowflake benefit-icon"></i>
                                <h5 class="fw-bold">Specialized Handling</h5>
                                <p class="text-muted small mb-0">Expert care for temperature-sensitive perishables,
                                    pharmaceuticals, and dangerous goods.</p>
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
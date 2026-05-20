@extends('layouts.app')
@section('title', 'Sea Freight Services')
@section('meta_description', 'The backbone of global trade. Our Sea Freight solutions offer cost-effective, reliable transport for large volumes of goods. We handle Full Container Load (FCL) and Less than Container Load (LCL) shipments with unmatched efficiency. With strategic alliances with major ocean carriers, we secure competitive rates and flexible sailing schedules, ensuring your cargo travels optimally from origin to destination.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, sea freight services, full container load, less than container load, FCL, LCL, ocean carriers, competitive rates, sailing schedules')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/hero_logistics_new.png") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Sea Freight</h1>
            <p class="lead opacity-75">Cost-Effective Global Transport</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/hero_logistics_new.png') }}" alt="Sea Freight Detail"
                                class="img-fluid rounded shadow w-100">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Sea Freight Services</h2>
                            <p class="text-muted lead">The backbone of global trade. Our Sea Freight solutions offer
                                cost-effective, reliable transport for large volumes of goods.</p>
                            <p class="text-muted mb-0">We handle Full Container Load (FCL) and Less than Container Load (LCL)
                                shipments with unmatched efficiency. With strategic alliances with major ocean carriers, we
                                secure competitive rates and flexible sailing schedules, ensuring your cargo travels optimally
                                from origin to destination.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-ship benefit-icon"></i>
                                <h5 class="fw-bold">FCL & LCL Services</h5>
                                <p class="text-muted small mb-0">Flexible options tailored to your volume, optimizing
                                    cost and container space efficiency.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-route benefit-icon"></i>
                                <h5 class="fw-bold">Port-to-Port Logistics</h5>
                                <p class="text-muted small mb-0">Comprehensive marine transport combined with optional
                                    inland door-to-door delivery.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-car-side benefit-icon"></i>
                                <h5 class="fw-bold">RoRo & Breakbulk</h5>
                                <p class="text-muted small mb-0">Specialized handling for wheeled vehicles, heavy
                                    machinery, and non-containerized cargo.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-weight-hanging benefit-icon"></i>
                                <h5 class="fw-bold">Oversized Cargo</h5>
                                <p class="text-muted small mb-0">Expert planning and secure lashing for exceptionally
                                    large and heavy industrial shipments.</p>
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
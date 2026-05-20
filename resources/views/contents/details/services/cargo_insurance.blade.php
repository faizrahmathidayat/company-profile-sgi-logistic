@extends('layouts.app')
@section('title', 'Cargo Insurance Services')
@section('meta_description', 'Protect your investments from unforeseen risks during transit. Our Cargo Insurance services offer comprehensive coverage for both domestic and international shipments, providing peace of mind against damage, loss, or theft. We offer custom-tailored policies suited to various cargo types and guarantee smooth, rapid claims processing.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, cargo insurance, marine cargo insurance, transit protection, secure shipping, all-risk coverage, claims processing')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/service_insurance.webp") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Cargo Insurance</h1>
            <p class="lead opacity-75">Comprehensive Transit Protection & Peace of Mind</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/service_insurance.webp') }}" alt="Cargo Insurance Detail"
                                 class="img-fluid rounded shadow w-100"
                                 style="max-height: 400px; object-fit: cover;">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Cargo Insurance Services</h2>
                            <p class="text-muted lead">Protect your investments from unforeseen risks during transit. Our Cargo Insurance services offer comprehensive coverage for both domestic and international shipments, providing peace of mind against damage, loss, or theft.</p>
                            <p class="text-muted mb-0">Whether shipping by land, sea, or air, our custom-tailored policies ensure that your goods are fully covered under all circumstances. We cooperate with top-rated insurance underwriters globally to secure flexible terms, affordable premiums, and rapid claims settlement, letting you focus on your business with total confidence.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-shield-halved benefit-icon"></i>
                                <h5 class="fw-bold">All-Risk Coverage</h5>
                                <p class="text-muted small mb-0">Comprehensive protection covering physical loss or damage from external causes during transportation.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-bolt benefit-icon"></i>
                                <h5 class="fw-bold">Fast Settlement</h5>
                                <p class="text-muted small mb-0">Dedicated team ensuring rapid verification and claims processing to minimize business downtime.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-layer-group benefit-icon"></i>
                                <h5 class="fw-bold">Tailored Policies</h5>
                                <p class="text-muted small mb-0">Policies customized to your specific cargo type, value, packaging, and shipping routes.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-globe benefit-icon"></i>
                                <h5 class="fw-bold">Global Protection</h5>
                                <p class="text-muted small mb-0">End-to-end security covering international shipping lanes and complex cross-border transits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg px-5">Request an Insurance Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.app')
@section('title', 'Warehousing & Distribution Services')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/facility_home.png") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Warehousing & Distribution</h1>
            <p class="lead opacity-75">Strategic Storage & Fulfillment Solutions</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/facility_home.png') }}" alt="Warehousing Detail"
                                class="img-fluid rounded shadow w-100">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Optimized Warehousing</h2>
                            <p class="text-muted lead">Our strategic storage solutions are designed to shorten the gap
                                between your inventory and your customers. We provide secure, high-tech environments for
                                your goods.</p>
                            <p class="text-muted mb-0">With our distribution network, we ensure that your products move
                                efficiently through the supply chain. From receiving and storage to order processing and
                                last-mile delivery, we provide a seamless flow of goods that reduces lead times and
                                lowers operational costs.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-temperature-half benefit-icon"></i>
                                <h5 class="fw-bold">Climate Controlled</h5>
                                <p class="text-muted small mb-0">Specialized storage for temperature-sensitive goods,
                                    ensuring product integrity from start to finish.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-barcode benefit-icon"></i>
                                <h5 class="fw-bold">Real-time Tracking</h5>
                                <p class="text-muted small mb-0">Integrated WMS providing 24/7 visibility into your
                                    inventory levels and order statuses.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-route benefit-icon"></i>
                                <h5 class="fw-bold">Distribution Network</h5>
                                <p class="text-muted small mb-0">Extensive local and regional networks for rapid transit
                                    and cost-effective delivery.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-box-open benefit-icon"></i>
                                <h5 class="fw-bold">Order Fulfillment</h5>
                                <p class="text-muted small mb-0">Efficient picking, packing, and shipping services
                                    tailored to your specific business requirements.</p>
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
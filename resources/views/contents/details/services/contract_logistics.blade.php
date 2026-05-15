@extends('layouts.app')
@section('title', 'Contract Logistics Services')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/about_warehouse_1777043552976.png") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Contract Logistics</h1>
            <p class="lead opacity-75">Your End-to-End Supply Chain Partner</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/about_warehouse_1777043552976.png') }}" alt="Contract Logistics Detail"
                                class="img-fluid rounded shadow w-100">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Contract Logistics Services</h2>
                            <p class="text-muted lead">Beyond basic transport, we offer comprehensive Contract Logistics. From
                                warehousing and inventory management to complex order fulfillment and reverse logistics, we act
                                as an extension of your business.</p>
                            <p class="text-muted mb-0">Our smart warehousing solutions leverage modern Warehouse Management Systems
                                (WMS) to give you total visibility and control over your inventory. We tailor our processes to
                                integrate perfectly with your operations, reducing overhead costs and improving service levels.
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-warehouse benefit-icon"></i>
                                <h5 class="fw-bold">Smart Warehousing</h5>
                                <p class="text-muted small mb-0">Secure, multi-temperature, and strategically located
                                    distribution centers.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-boxes-packing benefit-icon"></i>
                                <h5 class="fw-bold">Inventory Optimization</h5>
                                <p class="text-muted small mb-0">Advanced cycle counting and real-time visibility to
                                    minimize stockouts and overstock.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-tag benefit-icon"></i>
                                <h5 class="fw-bold">Value-Added Services</h5>
                                <p class="text-muted small mb-0">Custom packaging, precise labeling, and kitting to make
                                    your products retail-ready.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-cart-arrow-down benefit-icon"></i>
                                <h5 class="fw-bold">E-commerce Fulfillment</h5>
                                <p class="text-muted small mb-0">Rapid order processing, pick-and-pack, and seamless
                                    reverse logistics for returns.</p>
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
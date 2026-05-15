@extends('layouts.app')
@section('title', 'Custom Brokage Services')
@section('content')

<!-- Page Header -->
<header class="page-header" style="background-image: url('{{ asset("assets/img/custom_brokage.png") }}');">
    <div class="page-header-overlay"></div>
    <div class="container">
        <h1>Custom Brokage</h1>
        <p class="lead opacity-75">Navigating Global Trade with Precision</p>
    </div>
</header>

<!-- Content -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset('assets/img/custom_brokage.png') }}" alt="Custom Brokage Detail"
                            class="img-fluid rounded shadow w-100">
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="mb-4 fw-bold">Custom Brokage Services</h2>
                        <p class="text-muted lead">Navigating the complexities of international trade regulations. Our expert
                            Custom Brokage services ensure your shipments clear customs quickly and efficiently, minimizing
                            delays and avoiding costly penalties.</p>
                        <p class="text-muted mb-0">We provide end-to-end support for import and export clearance, ensuring that
                            all regulatory requirements are met. Our team of experts handles tariff classification,
                            valuation, and duty management, allowing you to focus on your core business while we handle the
                            intricacies of customs compliance across multiple jurisdictions.</p>
                    </div>
                </div>

                <div class="row mt-5 pt-3">
                    <div class="col-12 text-center mb-4">
                        <h3 class="fw-bold">Service Highlights</h3>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="benefit-card h-100">
                            <i class="fa-solid fa-file-invoice benefit-icon"></i>
                            <h5 class="fw-bold">Import/Export Clearance</h5>
                            <p class="text-muted small mb-0">Efficient processing of all necessary documentation to ensure
                                your cargo moves across borders without delay.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="benefit-card h-100">
                            <i class="fa-solid fa-tags benefit-icon"></i>
                            <h5 class="fw-bold">Tariff Classification</h5>
                            <p class="text-muted small mb-0">Expert guidance on HS code classification to ensure accurate
                                duty application and regulatory compliance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="benefit-card h-100">
                            <i class="fa-solid fa-gavel benefit-icon"></i>
                            <h5 class="fw-bold">Regulatory Compliance</h5>
                            <p class="text-muted small mb-0">Stay up-to-date with changing trade laws and regulations to
                                minimize risk and avoid penalties.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="benefit-card h-100">
                            <i class="fa-solid fa-calculator benefit-icon"></i>
                            <h5 class="fw-bold">Duty & Tax Management</h5>
                            <p class="text-muted small mb-0">Strategic planning to optimize duty payments and manage taxes
                                effectively for your global shipments.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <a href="contact.html" class="btn btn-primary-custom btn-lg px-5">Request a Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
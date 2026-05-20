@extends('layouts.app')
@section('title', 'Our Services')
@section('meta_description', 'Explore SGI Logistics\' comprehensive range of services, including Air Freight, Sea Freight, Cargo Insurance, Custom Brokerage, Domestics Freight, and Trucking. We provide tailored solutions to meet your unique supply chain needs.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics, air freight, sea freight, cargo insurance, custom brokerage, domestics freight, trucking')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/hero_logistics_new.png") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Our Services</h1>
            <p class="lead opacity-75">End-to-End Solutions for Your Supply Chain</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="section-padding">
        <div class="container">

            <!-- Service 1: Air Freight -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/img/service_air.webp') }}" 
                         alt="Air Freight"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-plane-departure fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/air-freight') }}" class="service-title-link">
                            <h2 class="mb-0">Air Freight</h2>
                        </a>
                    </div>
                    <p class="text-muted">When time is of the essence, our Air Freight services deliver. We provide expedited shipping solutions across the globe, ensuring your urgent cargo reaches its destination swiftly and safely. With priority boarding and streamlined customs clearance, we minimize downtime.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Next Flight Out (NFO) & Priority Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Door-to-Door & Port-to-Port Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Hub & Consolidation Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Comprehensive Customs & Quarantine Clearance</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2: Sea Freight -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{ asset('assets/img/service_sea.webp') }}" 
                         alt="Sea Freight"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-ship fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/sea-freight') }}" class="service-title-link">
                            <h2 class="mb-0">Sea Freight</h2>
                        </a>
                    </div>
                    <p class="text-muted">The backbone of global trade. Our Sea Freight solutions offer cost-effective, reliable transport for large volumes of goods. We handle Full Container Load (FCL) and Less than Container Load (LCL) shipments with unmatched efficiency through global alliances.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> LCL & FCL Consolidations</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Strategic Alliances with Leading Ocean Carriers</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Door-to-Door, Port-to-Port & Intermodal Solutions</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Oversized, RoRo & Breakbulk Specialized Shipping</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3: Cargo Insurance -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/img/service_insurance.webp') }}" 
                         alt="Cargo Insurance"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-shield-halved fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/cargo-insurance') }}" class="service-title-link">
                            <h2 class="mb-0">Cargo Insurance</h2>
                        </a>
                    </div>
                    <p class="text-muted">Protect your investments from unforeseen risks during transit. Our Cargo Insurance services offer comprehensive coverage for both domestic and international shipments, providing peace of mind against damage, loss, or theft.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> All-Risk Cargo Insurance Coverage</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Smooth & Rapid Claims Processing</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Custom-tailored Policies for Varied Cargo Types</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Comprehensive Sea, Air, and Land Freight Protection</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4: Custom Brokerage -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{ asset('assets/img/service_customs.webp') }}" 
                         alt="Custom Brokerage"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-file-signature fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/custom-brokerage') }}" class="service-title-link">
                            <h2 class="mb-0">Custom Brokerage</h2>
                        </a>
                    </div>
                    <p class="text-muted">Navigating global trade regulations with absolute precision. Our dedicated customs clearance experts ensure that your goods are registered and handled correctly, avoiding delays, compliance errors, or unnecessary fees.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Efficient Import/Export Customs Clearance</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Accurate HS Code Tariff Classification & Valuation</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Regulatory Compliance & Trade Law Consultation</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Specialized Custom Documentation & Duty Management</li>
                    </ul>
                </div>
            </div>

            <!-- Service 5: Domestics Freight -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/img/service_domestic.webp') }}" 
                         alt="Domestics Freight"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-boxes-stacked fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/domestics-freight') }}" class="service-title-link">
                            <h2 class="mb-0">Domestics Freight</h2>
                        </a>
                    </div>
                    <p class="text-muted">Reliable cargo movement connecting islands and regions across Indonesia. We offer comprehensive domestic inter-island freight solutions, ensuring your goods reach their domestic destination securely and seamlessly.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Inter-island Sea & Air Domestic Shipping</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Extensive Regional Distribution Network</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Consolidated & Less-than-Container (LCL) Domestic Cargo</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Tailored Supply Chain Distribution for Local Markets</li>
                    </ul>
                </div>
            </div>

            <!-- Service 6: Trucking -->
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{ asset('assets/img/service_trucking.webp') }}" 
                         alt="Trucking"
                         class="img-fluid rounded shadow w-100"
                         style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-truck fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/trucking') }}" class="service-title-link">
                            <h2 class="mb-0">Trucking</h2>
                        </a>
                    </div>
                    <p class="text-muted">Fast, reliable, and secure land transportation. Our dedicated trucking solutions cover short-haul distribution to long-haul container transport, backed by optimized routing and tracking systems for maximum efficiency.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> FTL (Full Truckload) & LTL (Less than Truckload) Shipping</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Modern Dedicated Fleet & Container Haulier Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Optimized Routing, Safe Dispatch, & Reliable Transit Schedules</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Specialized & Heavy Cargo Road Transportation</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

@endsection
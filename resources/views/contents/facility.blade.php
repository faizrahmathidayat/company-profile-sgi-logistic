@extends('layouts.app')
@section('title', 'Cargo Handling Facilities')
@section('meta_description', 'Discover SGI Logistics\' state-of-the-art Cargo Handling Facilities. Built for secure, efficient, and rapid processing of global air, ocean, and domestic cargo with advanced security and tracking technology.')
@section('meta_keywords', 'SGI Logistic, cargo facilities, air cargo terminal, ocean cargo consolidation, domestic cargo staging, cargo security, logistics cargo hub, smart WMS cargo')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/facility_home.webp") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Cargo Facilities</h1>
            <p class="lead opacity-75">Dedicated Hubs Engineered for Premium Cargo Handling</p>
        </div>
    </header>

    <!-- Capacity & Highlights Stats -->
    {{-- <section class="py-5 bg-dark text-white shadow-sm position-relative overflow-hidden">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="p-3 border-end border-secondary border-opacity-25 h-100 d-flex flex-column justify-content-center">
                        <h3 class="fw-bold text-gradient-orange fs-1 mb-1" style="font-family: 'Outfit', sans-serif; font-weight: 900;">50K+</h3>
                        <p class="text-muted mb-0 small text-uppercase" style="letter-spacing: 1.5px; font-weight: 600;">SQM Cargo Space</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3 border-end border-secondary border-opacity-25 h-100 d-flex flex-column justify-content-center">
                        <h3 class="fw-bold text-gradient-orange fs-1 mb-1" style="font-family: 'Outfit', sans-serif; font-weight: 900;">100%</h3>
                        <p class="text-muted mb-0 small text-uppercase" style="letter-spacing: 1.5px; font-weight: 600;">Secure & Insured</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3 border-end border-secondary border-opacity-25 h-100 d-flex flex-column justify-content-center">
                        <h3 class="fw-bold text-gradient-orange fs-1 mb-1" style="font-family: 'Outfit', sans-serif; font-weight: 900;">24/7</h3>
                        <p class="text-muted mb-0 small text-uppercase" style="letter-spacing: 1.5px; font-weight: 600;">Active Tracking</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3 h-100 d-flex flex-column justify-content-center">
                        <h3 class="fw-bold text-gradient-orange fs-1 mb-1" style="font-family: 'Outfit', sans-serif; font-weight: 900;">150+</h3>
                        <p class="text-muted mb-0 small text-uppercase" style="letter-spacing: 1.5px; font-weight: 600;">Active Fleets</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Cargo Facilities Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center" style="font-family: 'Outfit', sans-serif;">World-Class Cargo Hubs</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We invest heavily in specialized cargo processing hubs to ensure your items are consolidated, stored, and loaded with surgical precision and total safety.</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Facility 1: Air Cargo -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{ asset('assets/img/service_air.webp') }}" alt="Air Cargo Hub">
                        <div class="facility-overlay">
                            <h4>Air Cargo Hub</h4>
                            <p class="small mb-0">Direct flight tarmac consolidation, dimensional weighing, rapid security scanning, and high-priority flight loading.</p>
                        </div>
                    </div>
                </div>
                <!-- Facility 2: Sea Cargo -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{ asset('assets/img/service_sea.webp') }}" alt="Ocean Cargo Terminal">
                        <div class="facility-overlay">
                            <h4>Ocean Cargo CFS</h4>
                            <p class="small mb-0">Premium Container Freight Stations (CFS) for efficient LCL and FCL sorting, rapid container stripping, and transit staging.</p>
                        </div>
                    </div>
                </div>
                <!-- Facility 3: Domestic Cargo -->
                <div class="col-md-6 col-lg-4">
                    <div class="facility-item">
                        <img src="{{ asset('assets/img/service_domestic.webp') }}" alt="Domestic Cargo Center">
                        <div class="facility-overlay">
                            <h4>Domestic Cargo Center</h4>
                            <p class="small mb-0">Optimized cross-docking facilities for fast regional transit cargo distribution, multi-fleet loading, and express sorting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Tech & Security Collage -->
    <section class="section-padding bg-light border-top border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title" style="font-family: 'Outfit', sans-serif;">Cargo Tech & Security</h2>
                    <p class="mt-4 text-muted">Our cargo facilities are not just loading docks; they are intelligent logistics nerve centers engineered to give you absolute peace of mind and full visibility.</p>

                    <div class="mt-4">
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fa-solid fa-microchip fs-3 text-secondary" style="color: var(--primary-orange) !important;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold" style="font-family: 'Outfit', sans-serif;">Advanced WMS Tracking</h5>
                                <p class="text-muted small mb-0">Real-time Warehouse Management Systems providing accurate parcel manifest and item tracking down to the barcode level.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="fa-solid fa-video fs-3 text-secondary" style="color: var(--primary-orange) !important;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold" style="font-family: 'Outfit', sans-serif;">24/7 Smart Surveillance</h5>
                                <p class="text-muted small mb-0">CCTV coverage of all loading bays, motion-detection sensors, and continuous security patrols guarding your cargo.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="fa-solid fa-temperature-snow fs-3 text-secondary" style="color: var(--primary-orange) !important;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold" style="font-family: 'Outfit', sans-serif;">Controlled Climate Chambers</h5>
                                <p class="text-muted small mb-0">Specialized temperature-controlled zones within our hub for sensitive cargo like medical supplies, perishables, and fine tech.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facility-collage-wrapper">
                        <div class="collage-main-img">
                            <img src="{{ asset('assets/img/facility_warehouse.webp') }}" alt="Advanced Cargo Warehouse" class="img-fluid">
                            <span class="collage-badge bg-primary-custom"><i class="fa-solid fa-microchip me-2"></i>Smart Hub</span>
                        </div>
                        <div class="collage-sub-img">
                            <img src="{{ asset('assets/img/facility_port.webp') }}" alt="Secure Cargo Terminal" class="img-fluid border border-4 border-white">
                            <span class="collage-badge bg-secondary-custom"><i class="fa-solid fa-shield-halved me-2"></i>24/7 Guarded</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cargo Specific Needs CTA -->
    <section class="section-padding bg-dark text-white text-center position-relative overflow-hidden">
        <div class="container position-relative z-index-2 py-4">
            <h2 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif;">Have Specific Cargo Demands?</h2>
            <p class="text-muted max-w-600 mx-auto mb-4" style="font-size: 1.1rem; line-height: 1.6;">
                Whether you need specialized cold chain handling, dangerous goods sorting, high-value security storage, or complex customs clearance assistance, SGI Logistics has the dedicated space and expertise.
            </p>
            <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                <a href="{{ url('/contact') }}" class="btn btn-primary-custom px-4 py-2 font-weight-bold" style="font-size: 1rem; border-radius: 50px; font-weight: bold;">Request Facility Space</a>
                <a href="{{ url('/service') }}" class="btn btn-outline-light px-4 py-2 font-weight-bold" style="font-size: 1rem; border-radius: 50px; transition: var(--transition);">Explore Services</a>
            </div>
        </div>
        <!-- Decorative subtle gradient circles -->
        <div class="position-absolute bg-primary-custom rounded-circle opacity-10" style="width: 300px; height: 300px; top: -100px; right: -100px; filter: blur(50px);"></div>
        <div class="position-absolute bg-secondary-custom rounded-circle opacity-10" style="width: 200px; height: 200px; bottom: -50px; left: -50px; filter: blur(40px);"></div>
    </section>

@endsection
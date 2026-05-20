@extends('layouts.app')
@section('title', 'Domestics Freight Services')
@section('meta_description', 'Reliable inter-island cargo movement connecting regions across Indonesia. SGI Logistics provides comprehensive domestic freight solutions, ensuring your goods reach their domestic destination securely and seamlessly with optimized logistics workflows.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, domestic freight, inter-island cargo, Indonesia logistics, regional distribution, sea domestic shipping, air domestic shipping, LCL domestic, domestic trucking')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/service_domestic.webp") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Domestics Freight</h1>
            <p class="lead opacity-75">Seamless Inter-Island Connection Across Indonesia</p>
        </div>
    </header>

    <!-- Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/service_domestic.webp') }}" alt="Domestics Freight Detail"
                                 class="img-fluid rounded shadow w-100"
                                 style="max-height: 400px; object-fit: cover;">
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h2 class="mb-4 fw-bold">Domestics Freight Services</h2>
                            <p class="text-muted lead">Reliable cargo movement connecting islands and regions across Indonesia. We offer comprehensive domestic inter-island freight solutions, ensuring your goods reach their domestic destination securely and seamlessly.</p>
                            <p class="text-muted mb-0">With our vast domestic network, we link major islands through sea, air, and land transportation. We handle Full Container Loads (FCL), Less-than-Container Loads (LCL), and specialized heavy logistics, backed by local expertise and deep understanding of Indonesia's geographical and infrastructural conditions, bringing your products closer to local markets efficiently.</p>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold">Service Highlights</h3>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-ship benefit-icon"></i>
                                <h5 class="fw-bold">Inter-Island Shipping</h5>
                                <p class="text-muted small mb-0">Reliable domestic shipping routes linking Java, Sumatra, Kalimantan, Sulawesi, Papua, and other islands.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-boxes-packing benefit-icon"></i>
                                <h5 class="fw-bold">Consolidation (LCL)</h5>
                                <p class="text-muted small mb-0">Cost-effective consolidation solutions for smaller volume shipments across domestic pathways.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-plane benefit-icon"></i>
                                <h5 class="fw-bold">Domestic Air Cargo</h5>
                                <p class="text-muted small mb-0">Expedited domestic air freight services for time-critical regional shipments.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="benefit-card h-100">
                                <i class="fa-solid fa-network-wired benefit-icon"></i>
                                <h5 class="fw-bold">Widespread Network</h5>
                                <p class="text-muted small mb-0">Strong local partnerships and distribution channels ensuring smooth last-mile deliveries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg px-5">Request a Domestic Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

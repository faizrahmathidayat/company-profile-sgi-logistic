@extends('layouts.app')

@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('assets/img/hero_logistics_1777043517461.png');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Our Services</h1>
            <p class="lead opacity-75">End-to-End Solutions for Your Supply Chain</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="section-padding">
        <div class="container">

            <!-- Service 1 -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset("assets/img/service_air_1777043709915.png") }}" 
     alt="Air Freight"
     class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-plane-departure fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/air-freight') }}" class="service-title-link">
                            <h2 class="mb-0">Air Freight</h2>
                        </a>
                    </div>
                    <p class="text-muted">When time is of the essence, our Air Freight services deliver. We provide
                        expedited shipping solutions across the globe, ensuring your urgent cargo reaches its
                        destination swiftly and safely. With priority boarding and streamlined customs clearance, we
                        minimize downtime.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Back-to-Back Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i>  Door-to-Door Services</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Hub & ConsolidationServices</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Customs & quarantine</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Flexible Multimodal Transport Solutions Designed to Meet Specific Time Constraints</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{  asset('assets/img/hero_logistics_1777043517461.png')}}" alt="Sea Freight"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-ship fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/sea-freight') }}" class="service-title-link">
                            <h2 class="mb-0">Sea Freight</h2>
                        </a>
                    </div>
                    <p class="text-muted">The backbone of global trade. Our Sea Freight solutions offer cost-effective,
                        reliable transport for large volumes of goods. We handle Full Container Load (FCL) and Less than
                        Container Load (LCL) shipments with unmatched efficiency.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i>  Comprehensive LCL & FCL Consolidations</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Door-to-Door and Port-to-Port Services for Both Export and Import</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Customs & Quarantine</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i>  Flexible Multimodal Transport Solutions Designed to Meet Specific </li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            {{-- <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{  asset('assets/img/service_land_1777043803865.png')}}" alt="Land Transport"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-truck fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/land-transport') }}" class="service-title-link">
                            <h2 class="mb-0">Land Transport</h2>
                        </a>
                    </div>
                    <p class="text-muted">Connecting ports to final destinations seamlessly. Our vast network of
                        trucking and rail partners ensures that your cargo moves smoothly across borders and throughout
                        continents. We offer dedicated fleet solutions and optimized routing.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Full Truckload (FTL)</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Less than Truckload (LTL)
                        </li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Rail Freight Solutions
                        </li>
                    </ul>
                </div>
            </div> --}}

            <!-- Service 4 -->
            {{-- <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{  asset('assets/img/about_warehouse_1777043552976.png')}}" alt="Contract Logistics"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-boxes-stacked fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/contract-logistics') }}" class="service-title-link">
                            <h2 class="mb-0">Contract Logistics</h2>
                        </a>
                    </div>
                    <p class="text-muted">Beyond basic transport, we offer comprehensive Contract Logistics. From
                        warehousing and inventory management to complex order fulfillment and reverse logistics, we act
                        as an extension of your business.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Warehousing &
                            Distribution</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Inventory Optimization
                        </li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Value-Added Services
                            (Packaging, Labeling)</li>
                    </ul>
                </div>
            </div> --}}

            <!-- Service 5 -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/img/facility_home.png') }}" alt="Warehousing & Distribution"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-warehouse fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/warehouse-and-distribution') }}" class="service-title-link">
                            <h2 class="mb-0">Warehousing & Distribution</h2>
                        </a>
                    </div>
                    <p class="text-muted">Strategic storage solutions and efficient distribution networks. Our smart
                        warehousing facilities provide secure storage and rapid fulfillment services to keep your
                        products moving closer to your customers.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Consolidation</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Local Distribution</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Bonded & Non-bonded Warehousing</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Pick & Pack</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Air and Ocean Domestics</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Charter Truck and Consolidation</li>
                    </ul>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <img src="{{ asset('assets/img/custom_brokage.png') }}" alt="Custom Brokage"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-file-signature fs-2 text-primary me-3"></i>
                        <a href="{{ url('/service/custom-brokage') }}" class="service-title-link">
                            <h2 class="mb-0">Custom Brokage</h2>
                        </a>
                    </div>
                    <p class="text-muted">Our customs experts ensure that goods undergo the correct customs registration and handling, avoiding delays as well as unnecessary costs and fees. They also utilize a range of options to optimize the process and identify potential pitfalls to be avoided.</p>
                    <ul class="list-unstyled mt-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Import/Export Clearance</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Tariff Classification & Valuation</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-secondary me-2"></i> Regulatory Compliance Consultation</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

@endsection
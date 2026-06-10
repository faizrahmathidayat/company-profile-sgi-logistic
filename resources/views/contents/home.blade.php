@extends('layouts.app')

@section('content')

<!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset("assets/img/hero_logistics_new.webp") }}');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="hero-title">Global Reach,<br>Local Expertise.</h1>
                    <p class="hero-subtitle">Premium freight forwarding and comprehensive contract logistics solutions
                        tailored to your business needs. We ensure your cargo reaches its destination safely and on
                        time.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ url('/service') }}" class="btn btn-primary-custom">Our Services</a>
                        <a href="{{ url('/contact') }}" class="btn btn-outline-custom">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Why Choose Us</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We provide a seamless logistics experience backed by
                        industry-leading technology and a global network of partners.</p>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <!-- Left Column: Company Promotion Text -->
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase tracking-wider">Premium Logistics Solutions</span>
                    <h3 class="mt-2 mb-4 fw-extrabold display-6" style="color: var(--dark-bg); font-family: 'Outfit', sans-serif;">Providing Seamless Cargo Management Across the Globe</h3>
                    <p class="text-muted mb-4 lead" style="font-size: 1.1rem; line-height: 1.7;">PT. Sandika Global Indonesia (SGI Logistics) is dedicated to optimizing your supply chain. We deliver reliable sea, air, and land freight forwarding solutions backed by advanced tracking, strategic partnerships, and deep industry expertise.</p>
                    <div class="d-flex gap-4 flex-wrap">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-check text-primary"></i>
                            <span class="fw-semibold text-dark">Global Network</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-check text-primary"></i>
                            <span class="fw-semibold text-dark">Secure Delivery</span>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Featured Card -->
                <div class="col-lg-6">
                    <div class="service-card text-center py-5 px-4 shadow-lg border-0 bg-white" style="border-radius: 16px;">
                        <i class="fa-solid fa-ship service-icon fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold fs-3 mb-3" style="font-family: 'Outfit', sans-serif;">Freight Forwarding</h4>
                        <p class="text-muted">Reliable sea, air, and land freight forwarding services connecting you to major markets worldwide. We handle all logistics complexities, customs clearances, and documentation so you can focus on growing your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Preview -->
    <section class="facility-preview-section position-relative"
        style="background-image: url('{{ asset("assets/img/facility_home.webp") }}'); background-size: cover; background-position: center; background-attachment: fixed; padding: 100px 0;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.65);"></div>
        <div class="container position-relative z-1 text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4 text-white">World-Class Logistics Facilities</h2>
                    <p class="lead mb-5 opacity-75">Our state-of-the-art warehouses are strategically located and
                        equipped with advanced technology to ensure the highest level of security, efficiency, and
                        inventory management for your goods.</p>
                    <a href="{{  url('/facility')}}" class="btn btn-primary-custom btn-lg px-5 py-3">Explore Our Facilities</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Logistics Process -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Logistics Air Import Process</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">A transparent and efficient workflow designed to ensure
                        your cargo moves seamlessly from origin to destination.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="process-img-wrap" data-bs-toggle="modal" data-bs-target="#processModal">
                        
                        <picture>
                            <source media="(min-width: 768px)" 
                                    srcset="{{ asset('assets/img/our_logistic_process_desktop.webp') }}">
                            
                            <source srcset="{{ asset('assets/img/our_logistic_process_mobile.webp') }}">
                            
                            <img src="{{ asset('assets/img/our_logistic_process_desktop.webp') }}" 
                                alt="Our Logistics Process"
                                class="img-fluid rounded shadow-lg"
                                loading="lazy"
                                width="1076" 
                                height="593">
                        </picture>
                        <div class="process-zoom-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            <span>Click to Preview</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Logistics Export Process -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Logistics Air Export Process</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">
                        A streamlined and reliable export workflow designed to ensure your cargo is prepared, cleared, and delivered efficiently to international destinations.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="process-img-wrap" data-bs-toggle="modal" data-bs-target="#processModalExport">
                        
                        <picture>
                            <source media="(min-width: 768px)" 
                                    srcset="{{ asset('assets/img/our_logistic_export_process_desktop.webp') }}">
                            
                            <source srcset="{{ asset('assets/img/our_logistic_export_process_mobile.webp') }}">
                            
                            <img src="{{ asset('assets/img/our_logistic_export_process_desktop.webp') }}" 
                                alt="Our Logistics Export Process"
                                class="img-fluid rounded shadow-lg"
                                loading="lazy"
                                width="1076" 
                                height="593">
                        </picture>
                        <div class="process-zoom-overlay">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            <span>Click to Preview</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">Our Trusted Clients</h2>
                    <p class="text-muted mt-3 max-w-600 mx-auto">We are proud to partner with leading companies across various industries, providing them with reliable and efficient logistics solutions.</p>
                </div>
            </div>
        </div>
        
        <!-- Marquee Slider -->
        <div class="client-marquee-wrapper">
            <div class="client-marquee-track">
                <!-- Original Set -->
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_1.webp') }}" alt="client_1"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_2.webp') }}" alt="client_2"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_3.webp') }}" alt="client_3"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_4.webp') }}" alt="client_4"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_5.webp') }}" alt="client_5"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_6.webp') }}" alt="client_6"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_7.webp') }}" alt="client_7"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_8.webp') }}" alt="client_8"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_9.webp') }}" alt="client_9"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_10.webp') }}" alt="client_10"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_11.webp') }}" alt="client_11"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_12.webp') }}" alt="client_12"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_13.webp') }}" alt="client_13"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_14.webp') }}" alt="client_14"></div>
                <div class="client-logo-wrap"><img src="{{ asset('assets/img/clients/client_15.webp') }}" alt="client_15"></div>
                <div class="client-logo-wrap logo-polaris"><img src="{{ asset('assets/img/clients/client_16.webp') }}" alt="client_16"></div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.client-marquee-track');
            if (track) {
                const items = Array.from(track.children);
                if (items.length > 0) {
                    // Clone all items and append them to the track to create a seamless loop
                    items.forEach(item => {
                        const clone = item.cloneNode(true);
                        clone.setAttribute('aria-hidden', 'true');
                        track.appendChild(clone);
                    });

                    // Calculate the scroll distance dynamically based on actual item width + margins
                    const updateScrollDistance = () => {
                        const itemWidth = items[0].getBoundingClientRect().width;
                        const style = window.getComputedStyle(items[0]);
                        const marginLeft = parseFloat(style.marginLeft) || 0;
                        const marginRight = parseFloat(style.marginRight) || 0;
                        const totalItemWidth = itemWidth + marginLeft + marginRight;
                        const scrollDistance = totalItemWidth * items.length;
                        
                        track.style.setProperty('--scroll-distance', `-${scrollDistance}px`);
                    };

                    // Run initially
                    updateScrollDistance();

                    // Recalculate on window resize to ensure accuracy
                    window.addEventListener('resize', updateScrollDistance);
                    
                    // Also run after window load to make sure CSS/images are fully resolved
                    window.addEventListener('load', updateScrollDistance);
                }
            }
        });
    </script>
    @endpush

    <!-- Call to Action -->
    <section class="section-padding" style="background: var(--primary-gradient); color: white;">
        <div class="container text-center">
            <h2 class="mb-4 text-white">Ready to optimize your supply chain?</h2>
            <p class="mb-5 lead opacity-75">Connect with our logistics experts today for a customized strategy.</p>
            <a href="{{ url('/contact') }}" class="btn btn-primary-custom btn-lg">Request a Consultation</a>
        </div>
    </section>

@endsection
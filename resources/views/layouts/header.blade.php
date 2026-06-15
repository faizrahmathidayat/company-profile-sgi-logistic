<!-- Header -->
<header class="site-header">

    <!-- Top Bar -->
    <div class="topbar d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-end align-items-center gap-4">
                <a href="mailto:sales@sgi-logistics.net" class="topbar-link">
                    <i class="fa-solid fa-envelope me-1"></i> sales@sgi-logistics.net
                </a>
                <a href="tel:+6282111855805" class="topbar-link">
                    <i class="fa-solid fa-phone me-1"></i> +62 821 1185 5805
                </a>
                <a href="{{ url('/contact') }}" class="btn btn-primary-custom topbar-cta">Get Free Quote</a>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="PT. Sandika Global Indonesia" class="navbar-logo">
                <span class="navbar-brand-text">PT Sandika Global <span class="navbar-brand-sub">Indonesia</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('service*') ? 'active' : '' }}"
                            href="{{ route('service') }}" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('service') }}">All Services</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('service.air-freight') }}">
                                <i class="fa-solid fa-plane me-2 text-primary"></i>Air Freight</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.sea-freight') }}">
                                <i class="fa-solid fa-ship me-2 text-primary"></i>Sea Freight</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.cargo-insurance') }}">
                                <i class="fa-solid fa-shield-halved me-2 text-primary"></i>Cargo Insurance</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.custom-brokerage') }}">
                                <i class="fa-solid fa-file-invoice me-2 text-primary"></i>Custom Brokerage</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.domestics-freight') }}">
                                <i class="fa-solid fa-warehouse me-2 text-primary"></i>Domestics Freight</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.trucking') }}">
                                <i class="fa-solid fa-truck me-2 text-primary"></i>Trucking</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('facility') ? 'active' : '' }}"
                            href="{{ route('facility') }}">Facilities</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>

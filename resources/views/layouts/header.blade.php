<!-- Header -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">PT. Sandika Global<span> Indonesia</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('service*') ? 'active' : '' }}"
                    href="{{ route('service') }}">
                        Service
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('facility') ? 'active' : '' }}"
                    href="{{ route('facility') }}">
                        Facility
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                    href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ url('/contact') }}" class="btn btn-primary-custom px-4 py-2">Get Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
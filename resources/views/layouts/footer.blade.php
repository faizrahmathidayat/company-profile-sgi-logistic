<!-- Footer -->
<footer>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <a href="{{  url('/')}}" class="footer-brand">PT. Sandika Global<span> Indonesia</span></a>
                <p class="mt-3">Delivering excellence in freight forwarding and contract logistics. Your trusted
                    partner for global supply chain solutions.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white fs-5"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="text-white fs-5"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="text-white fs-5"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/service') }}">Services</a></li>
                    <li><a href="{{ url('/facility') }}">Facilities</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Services</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/service/sea-freight') }}">Sea Freight</a></li>
                    <li><a href="{{ url('/service/air-freight') }}">Air Freight</a></li>
                    <li><a href="{{ url('/service/warehouse-and-distribution') }}">Warehousing & Distribution</a></li>
                    <li><a href="{{ url('/service/custom-brokage') }}">Custom Brokage</a></li>
                    {{-- <li><a href="{{ url('/service/land-transport') }}">Land Transport</a></li>
                    <li><a href="{{ url('/service/contract-logistics') }}">Contract Logistics</a></li> --}}
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Contact Us</h5>
                <ul class="footer-links text-white">
                    <li class="mb-3"><i class="fa-solid fa-location-dot me-2 text-primary"></i> Summarecon Serpong, Graha Anabatic 7th Floor, Jl. Scientia Boulevard No.15810 Kav.U2, Kabupaten Tangerang, Banten 15810, Indonesia
                    </li>
                    <li class="mb-3"><i class="fa-solid fa-phone me-2 text-primary"></i> +62 821 1185 5805</li>
                    <li class="mb-3"><i class="fa-solid fa-phone me-2 text-primary"></i> +62 858-8652-7664</li>
                    <li class="mb-3"><i class="fa-solid fa-envelope me-2 text-primary"></i> sales@sgilogistics.com
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="mb-0">&copy; 2026 SGI Logistics. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Process Image Modal -->
    <div class="modal fade preview-modal" id="processModal" tabindex="-1" aria-labelledby="processModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-header border-0 p-0 mb-3 justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="{{ asset('assets/img/our_logistic_process.png') }}" class="img-fluid w-100 rounded" alt="Our Logistics Process Full View">
                </div>
            </div>
        </div>
    </div>
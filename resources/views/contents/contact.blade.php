@extends('layouts.app')
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@pushend
@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with SGI Logistics for all your logistics and supply chain needs. Our team is ready to assist you with tailored solutions.')
@section('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics')
@section('content')

<!-- Page Header -->
    <header class="page-header" style="background-image: url('{{ asset("assets/img/contact_banner.jpg") }}');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Contact Us</h1>
            <p class="lead opacity-75">Let's Discuss Your Supply Chain Needs</p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">

                <!-- Contact Information -->
                <div class="col-lg-5">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p class="text-muted mb-5">Whether you need a specialized freight solution or a complete logistics
                        overhaul, our experts are ready to assist you. Reach out today for a custom quote.</p>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Global Headquarters</h5>
                            <p class="text-muted mb-0">Summarecon Serpong, Graha Anabatic 7th Floor, Jl. Scientia Boulevard No.15810 Kav.U2, Kabupaten Tangerang, Banten 15810<br>Indonesia</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Phone</h5>
                            <p class="text-muted mb-0">+62 821 1185 5805</p>
                            <p class="text-muted mb-0">+62 858-8652-7664</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p class="text-muted mb-0">sales@sgi-logistics.net</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="contact-wrap">
                        <h3 class="mb-4 fw-bold">Request a Quote</h3>
                        <form action="#" method="POST" id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label text-muted small fw-bold">First
                                        Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label text-muted small fw-bold">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label text-muted small fw-bold">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label text-muted small fw-bold">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-12">
                                    <label for="service" class="form-label text-muted small fw-bold">Service of
                                        Interest</label>
                                    <select class="form-select form-control" id="service" name="service" required>
                                        <option value="" selected disabled>Select a service...</option>
                                        <option value="AIR FREIGHT">Air Freight</option>
                                        <option value="SEA FREIGHT">Sea Freight</option>
                                        <option value="CARGO INSURANCE">Cargo Insurance</option>
                                        <option value="CUSTOM BROKERAGE">Custom Brokerage</option>
                                        <option value="DOMESTICS FREIGHT">Domestics Freight</option>
                                        <option value="TRUCKING">Trucking</option>
                                        <option value="OTHER">Other / Not Sure</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label text-muted small fw-bold">Message
                                        Details</label>
                                    <textarea class="form-control" id="message" name="message" rows="5"
                                        placeholder="Tell us about your cargo, volume, and destination..."
                                        required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="g-recaptcha" data-sitekey="6Lca2dgsAAAAAOLey9eYKWz3rojvgPmfPK5tk3XU"></div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary-custom w-100">Send Request</button>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <a href="https://wa.me/6282111855805?text=Halo%20SGI%20Logistics%2C%20saya%20ingin%20meminta%20penawaran%20harga%20(Request%20a%20Quote).%0A%0ABerikut%20detail%20kargo%20saya%3A%0A-%20Asal%20%26%20Tujuan%3A%0A-%20Berat%20%26%20Dimensi%3A%0A-%20Jenis%20Layanan%20(Air%2FSea%2FLand)%3A" 
                                               target="_blank" 
                                               rel="noopener noreferrer" 
                                               class="btn btn-whatsapp-custom w-100 d-flex align-items-center justify-content-center gap-2">
                                                <i class="fa-brands fa-whatsapp fs-5"></i> Chat via WhatsApp
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <p class="mt-2">Sending your message...</p>
    </div>

    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="messageModalBody">
                    <!-- Message content will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section>
        <!-- A placeholder for Google Maps iframe -->
        <div
            style="width: 100%; height: 400px; background-color: #e5e7eb; display: flex; align-items: center; justify-content: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0612303310004!2d106.61732817429929!3d-6.255664161246384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc7a8facbe19%3A0x16699d670e8909b1!2sGraha%20Anabatic!5e0!3m2!1sid!2sid!4v1778829247477!5m2!1sid!2sid" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

@endsection
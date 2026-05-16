<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('title','Freight Forwarding & Contract Logistics')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
      content="@yield('meta_description', 'SGI Logistic provides freight forwarding, warehousing, trucking, customs clearance, and supply chain solutions for domestic and international logistics needs.')">
    <meta name="keywords" content="@yield('meta_keywords', 'SGI Logistic, logistics company Indonesia, freight forwarding Indonesia, warehousing services, trucking services, customs clearance, supply chain solutions, domestic logistics, international logistics')">

    <meta property="og:type" content="website">
    <meta property="og:title" content="SGI Logistics - Your Trusted Partner in Freight Forwarding and Contract Logistics">
    <meta property="og:description" content="SGI Logistic provides freight forwarding, warehousing, trucking, customs clearance, and supply chain solutions for domestic and international logistics needs.">
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
    <meta property="og:url" content="https://sgi-logistic.infinityfreeapp.com/">
    <meta property="og:site_name" content="PT Sandika Global Indonesia">
    <meta property="og:image:width" content="720">
    <meta property="og:image:height" content="1100">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SGI Logistic",
        "url": "https://sgi-logistic.infinityfreeapp.com",
        "logo": "https://sgi-logistic.infinityfreeapp.com/assets/img/logo.png",
        "description": "SGI Logistic provides freight forwarding, warehousing, trucking, customs clearance, and supply chain solutions.",

        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Summarecon Serpong, Graha Anabatic 7th Floor, Jl. Scientia Boulevard No.15810 Kav.U2, Kabupaten Tangerang, Banten 15810, Indonesia",
            "addressLocality": "Kabupaten Tangerang",
            "postalCode": "15810",
            "addressCountry": "ID"
        },

        "areaServed": "Indonesia",

        "serviceType": [
            "Freight Forwarding",
            "Warehousing",
            "Customs Clearance",
            "Trucking"
        ]
    }
    </script>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">

    <link href="{{ asset('css/style.css') }}?v=1.1" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" defer></script>
    @stack('scripts')
</body>
</head>

<body>

    <!-- Header -->
    @include('layouts.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '10px 0';
                navbar.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
            } else {
                navbar.style.padding = '15px 0';
                navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.05)';
            }
        });

        // Validasi dan kirim form menggunakan AJAX
        const contactForm = document.getElementById('contactForm');

        if (contactForm) {

            contactForm.addEventListener('submit', function(event) {

                event.preventDefault();

                const recaptchaResponse = grecaptcha.getResponse();

                if (recaptchaResponse.length === 0) {
                    showMessage('Please complete the CAPTCHA to submit the form.', 'danger');
                    return;
                }

                showLoading(true);

                const submitButton = document.querySelector('#contactForm button[type="submit"]');

                submitButton.disabled = true;

                submitButton.innerHTML =
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

                const formData = new FormData(this);

                formData.append('g-recaptcha-response', recaptchaResponse);

                fetch('send_email', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(response => response.text())
                .then(data => {

                    showLoading(false);

                    submitButton.disabled = false;

                    submitButton.innerHTML = 'Send Request';

                    if (data.includes('successfully')) {

                        showMessage('Your message has been sent successfully!', 'success');

                        contactForm.reset();

                        grecaptcha.reset();

                    } else {

                        showMessage('Failed to send message: ' + data, 'danger');

                    }
                })
                .catch(error => {

                    console.error('Error:', error);

                    showLoading(false);

                    submitButton.disabled = false;

                    submitButton.innerHTML = 'Send Request';

                    showMessage('An error occurred while sending the message.', 'danger');
                });

            });
        }

        function showLoading(show) {
            document.getElementById('loadingOverlay').style.display = show ? 'flex' : 'none';
        }

        function showMessage(message, type) {
            const modalBody = document.getElementById('messageModalBody');
            modalBody.innerHTML = `<div class="alert alert-${type}" role="alert">${message}</div>`;
            const modal = new bootstrap.Modal(document.getElementById('messageModal'));
            modal.show();
        }
    </script>
    <!-- FontAwesome -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" defer></script>
</body>
</body>
</html>
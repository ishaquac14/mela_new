<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome to Mela</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('herobiz') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('herobiz') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('herobiz') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('herobiz') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('herobiz') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('herobiz') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('herobiz') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('herobiz') }}/assets/css/variables.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('herobiz') }}/assets/css/main.css" rel="stylesheet">

</head>

<body>

    <section id="hero-animated" class="hero-animated d-flex align-items-center"
        style="height: 100vh; overflow: hidden;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('herobiz') }}/assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated"
                style="max-width: 30%; height: 100%;">
            <h2>Welcome to <span>Mela</span></h2>
            <p><span style="color: rgb(8, 144, 168)">M</span>anagem<span style="color: rgb(8, 144, 168)">E</span>nt
                <span style="color: rgb(8, 144, 168)">L</span>isence PT. <span style="color: rgb(8, 144, 168)">A</span>isin
                Indonesia Automotive<span style="color: rgb(8, 144, 168)">.</span></p>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn-get-started scrollto" style="margin-right: 30px;">Log in</a>
                {{-- <a href="{{ route('login') }}" class="text-center align-middle btn btn-outline-info scrollto"
                    style="width: fit-content;">Log in</a> --}}
            </div>
        </div>
    </section>


    <!-- Vendor JS Files -->
    <script src="{{ asset('herobiz') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('herobiz') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('herobiz') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('herobiz') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('herobiz') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('herobiz') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('herobiz') }}/assets/js/main.js"></script>

</body>

</html>

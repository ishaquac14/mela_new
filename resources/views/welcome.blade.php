{{-- <!DOCTYPE html>
<html lang="en"> --}}

{{-- <head> --}}
{{-- <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome to Mela</title>
    <meta content="" name="description">
    <meta content="" name="keywords"> --}}

<!-- Favicons -->
{{-- <link href="{{ asset('arsha') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

<!-- Google Fonts -->
{{-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> --}}

<!-- Vendor CSS Files -->
{{-- <link href="{{ asset('arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

<!-- Template Main CSS File -->
{{-- <link href="{{ asset('arsha') }}/assets/css/style.css" rel="stylesheet"> --}}

{{-- </head> --}}

{{-- <body> --}}

<!-- ======= Header ======= -->
{{-- <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center mt-3">

            <h1 class="logo me-auto"><a href="#">MELA</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <li><a href="{{ route('login') }}" class="getstarted scrollto">Log
                                        in</a></li>
                            @endauth
                        </div>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header> --}}

<!-- ======= Hero Section ======= -->
{{-- <section id="hero" class="d-flex align-items-center">

        <div class="container" style="height: 100%">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="300">
                    <h1>Management Lisence</h1>
                    <h2>PT. Aisin Indonesia Automotive</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-get-started scrollto"
                                style="margin-right: 30px;">Register</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('arsha') }}/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section> --}}

<!-- Vendor JS Files -->
{{-- <script src="{{ asset('arsha') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/php-email-form/validate.js"></script> --}}

<!-- Template Main JS File -->
{{-- <script src="{{ asset('arsha') }}/assets/js/main.js"></script> --}}

{{-- </body> --}}

{{-- </html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HeroBiz Bootstrap Template - Home 1</title>
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

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('herobiz') }}/assets/css/variables.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('herobiz') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

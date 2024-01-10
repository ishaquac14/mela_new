<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('arsha') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/ass{{ asset('arsha') }}/ets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('arsha') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
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
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
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
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Log
                            in</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('arsha') }}/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('arsha') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('arsha') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('arsha') }}/assets/js/main.js"></script>

</body>

</html>

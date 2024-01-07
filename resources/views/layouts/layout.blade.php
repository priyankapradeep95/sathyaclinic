<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sathya HealthCare Clinic and Diagnostics</title>
  <meta content="Sathya heathcare official website" name="description">
  <meta content="sathya,sathya healthcare, sathya clinic, sathya diagnostics" name="keywords">

  <!-- Favicons -->
  <link href="theme/assets/img/favicon.png" rel="icon">
  <link href="theme/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="theme/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="theme/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="theme/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="theme/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="theme/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="theme/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="theme/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="theme/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="theme/assets/css/style.css" rel="stylesheet">
  <link href="theme/assets/css/custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrapublic/theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    @include('layouts.topbar')
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('layouts.header')
  </header>

  <!-- ======= Hero Section ======= -->


  <main id="main">
  @yield('content')


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('layouts.footer')
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="theme/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="theme/assets/vendor/aos/aos.js"></script>
  <script src="theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="theme/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="theme/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="theme/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="theme/assets/js/main.js"></script>

</body>

</html>
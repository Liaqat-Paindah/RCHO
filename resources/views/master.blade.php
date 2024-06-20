<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ARDHO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"> <img src="{{ url('assets/img/logo.png')}}" alt=""> </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ url('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/about') }}">Who we are</a></li>
              <li><a href="{{ url('/staff') }}">Staff</a></li>
              <li><a href="{{ url('/approach') }}">Approach</a></li>
              <li><a href="#">Programs</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/services/humanitarian">Humanitarian</a></li>
              <li><a href="/services/Development">Development</a></li>
              <li><a href="/services/Research">Research</a></li>
              <li><a href="/services/Education">Education</a></li>
              <li><a href="/services/Health">Health</a></li>
              <li><a href="/services/Nutrition">Nutrition</a></li>
              <li><a href="/services/Agriculture">Agriculture</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="{{ url('/project') }}"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/project_ct') }}">Completed</a></li>
              <li><a href="{{ url('/project_on') }}">On-going</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pulications</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/reports') }}">Reports</a></li>
              <li><a href="#">Documents</a></li>
              <li><a href="{{url('/stories')}}">Success Stories</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/career')}}">Career</a></li>

          <li><a class="nav-link scrollto" href="{{ url('/donations/create')}}">Donate</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ARDHO</h3>
            <p>
              <strong>Address:</strong>   House #64, Street #2,  <br>In Front of Lycée Ghazi, Karta-e Char, <br> Kabul, Afghanistan <br> <br>
              <strong>Phone:</strong> +93 (0) 202-503-850<br>
              <strong>Email:</strong> info@ardho.org<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reports</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Humanitarian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Research</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Health</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Education</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>You can follow our social media accounts.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-2">
      <div class="copyright">
        &copy; Copyright <strong><span>ARDHO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#">ARDHO</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js.map.js')}}"></script>
  <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>




  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js')}}"></script>

</body>

</html>
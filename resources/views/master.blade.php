<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RCHO</title>
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

<header id="header" class="header sticky-top">
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@rcho.af</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+93(0) 700-088-276</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{url('assets/img/logo.png')}}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url('')}}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{url('/about')}}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{url('do')}}" class="{{ Request::is('do') ? 'active' : '' }}">What We Do</a></li>
          <li class="dropdown">
            <a href="{{url('/project')}}" class="{{ Request::is('project') ? 'active' : '' }}"><span>Project</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url('/project_on')}}" class="{{ Request::is('project_on') ? 'active' : '' }}">Progress</a></li>
              <li><a href="{{url('/project_ct')}}" class="{{ Request::is('project_ct') ? 'active' : '' }}">Completed</a></li>
            </ul>
          </li>
          <li><a href="{{url('/career')}}" class="{{ Request::is('career') ? 'active' : '' }}">Career</a></li>
          <li><a href="{{url('/contact')}}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>

  </div>

</header>

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>RCHO</h3>
            <p>
                Registered with Ministry of Economy (MoE) - Afghanistan. Registration# 5485 <br>
                Registered with Ministry of Public Health (MoPH) - Afghanistan. Registration# 794
                <br><br>

              <strong>Phone:</strong> +93(0) 700-088-276<br>
              <strong>Email:</strong> info@rcho.af<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/reports') }}">Reports</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/career') }}">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services/humanitarian') }}">Humanitarian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services/Agriculture') }}">Agriculture  </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services/Nutrition') }}">Nutrition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services/Health') }}">Health</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Stay connected with us! Follow our official social media accounts for the latest updates, news, and insights:</p>
            <div class="social-links mt-3">
              <a href="https://x.com/RCHO177016" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61559738920399" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/RCHO_afghanistan/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ url('/') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/in/RCHO-afghanistan-96239030b/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-2">
      <div class="copyright">
        &copy; Copyright <strong><span>RCHO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="{{ url('/') }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

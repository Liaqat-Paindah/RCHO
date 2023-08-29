<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MgtWell Consulting Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
  
</head>
<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <span class="logo"> <img src="assets/img/logo.png" alt="" srcset=""> </span>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li class="dropdown"><a href="{{url('/about')}}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/firm')}}">Firm History</a></li>
              <li><a href="{{url('/about')}}">About Mgtwell</a></li>
              <li><a href="{{url('/partners')}}">Our Partners</a></li>
              <li><a href="{{url('/team')}}">Our Team</a></li>
              <li><a href="{{url('/approach')}}">Our Approach</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{url('/gallary')}}"><span>Gallary</span> </a>   </li>
          <li class="dropdown"><a href="{{url('/services')}}"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{url('/monitoring')}}"><span> Monitoring & Evaluation Services</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Third-Party Monitoring</a></li>
                  <li><a href="#">M&E System & Framework Development</a></li>
                  <li><a href="#">Field Monitoring and Data Collection Services</a></li>
                  <li><a href="#">Baseline and Endline Surveys</a></li>
                  <li><a href="#">Program Performance Evaluation</a></li>
                  <li><a href="#">Impact Evaluation and Assessment</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="{{url('management')}}"><span>Management Consulting Services</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Business Development Services</a></li>
                  <li><a href="#">SME Consulting & Mentoring</a></li>
                  <li><a href="#">Capacity Building</a></li>
                  <li><a href="#">Business Planning</a></li>
                  <li><a href="#">HR Consulting</a></li>
                  <li><a href="#">Operations Consulting</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="projects"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/projects')}}">MgtWell Projects</a></li>
              <li><a href="{{url('/projects')}}">List of Projects</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{url('events')}}">Events</a></li>

          <li class="dropdown"><a href="{{url('/careers')}}"><span>Careers</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/careers')}}">Vacancies</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{url('contact')}}">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{url('we_do')}}">What-We-do</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  @yield('content')
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Contact Us</h3>
              <p>

                House#43, Pule Sorkh, Karte 3, PD#6, Kabul Afghanistan <br><br>
                <strong>Phone:</strong> +93(0) 781-266-164<br>
                <strong>Email:</strong> info@mgtwell.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/mgtwell/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.skype.com/ulfat85" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://wa.link/213swv" class="google-plus"><i class="bx bxl-whatsapp"></i></a>

                <a href="https://www.linkedin.com/company/mgtwell-consulting-services/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/services')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/contact')}}">Contact Us</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Business Development Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">HR Consulting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business Planning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Capacity Building</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Operations Consulting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SME Consulting & Mentoring</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>MgtWell Consulting Services</h4>
          <p>MgtWell Consulting Services is an international development management consulting firm that was
              established in 2013. The firm is registered with the Government of Afghanistan and the United States of
              America, and has been providing support to the international development and cooperation sector for over a
              decade.</p>
            <span class="logo">
              <div class="row">
              <div class="col-sm-3"></div>
            <img class="col-sm-6" src="assets/img/logo-footer.png" alt="">
            </div>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2023 <strong><span>MgtWell Consulting Services</span></strong>. All Rights Reserved. Designed by <a
          href="">MgtWell</a>
      </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>
</body>
</html>
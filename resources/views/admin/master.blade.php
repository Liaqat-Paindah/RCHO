<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mgtwell Consulting Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets_admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets_admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="assets_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets_admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/favicon.png" alt="">
        <span class="d-none d-lg-block">Mgtwell</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->



        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number"></span>
          </a><!-- End Messages Icon -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{Auth::user()->profile_photo_path}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name}}</h6>
              <span>{{Auth::user()->email}} </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            @if(Route::has('login'))
            @auth
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('profile')}}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="dropdown-item d-flex align-items-center">
                <i class="bi bi-box-arrow-right"></i>
                    {{ __('Log Out') }}
                </button>
            </form>

            </li>
            @endif
            
            @endif

  

          </ul><!-- End Profile Dropdown Items -->




        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('team_member')}}">
          <i class="bi bi-person"></i>
          <span> Manage Teams  </span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{url('event_list')}}">
          <i class="bi bi-journal-text"></i><span>Manage Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed"  href="service_list">
          <i class="bi bi-bar-chart"></i><span>Manage Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('img_list')}}">
          <i class="bi bi-bar-chart"></i><span>Manage Gallary</span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <i class="bi bi-bar-chart"></i><span>Manage Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Charts Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

   <!-- End Page Title -->
    @yield('contents')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Mgtwell</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Mgtwell</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_admin/vendor/chart.js/chart.umd.js"></script>
  <script src="assets_admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets_admin/vendor/quill/quill.min.js"></script>
  <script src="assets_admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets_admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets_admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_admin/js/main.js"></script>

</body>

</html>
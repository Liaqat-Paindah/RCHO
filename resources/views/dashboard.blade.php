<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
       <!-- Favicons -->
    <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('admin_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('admin_assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('admin_assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin_assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('admin_assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ url('admin_assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <title> Dashboard</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
	    <div class="dashboard-header">
	        <nav class="navbar navbar-expand-lg bg-rcho fixed-top">
        <img src="{{url('assets/img/logo.png')}}" alt="" style="margin-left:15px;width:10%">

	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse " id="navbarSupportedContent">
	                <ul class="navbar-nav ml-auto navbar-right-top">
	                    <li class="nav-item">
	                        <div id="custom-search" class="top-search-bar">
	                            <input class="form-control" type="text" placeholder="Search..">
	                        </div>
	                    </li>
	                    <li class="nav-item dropdown nav-user">
	                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin_assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
	                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
	                            <div class="nav-user-info">
	                                <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }} </h5>
	                                <span class="status"></span><span class="ml-2">{{ Auth::user()->email }}</span>
	                            </div>
	                            <a class="dropdown-item" href="{{ url('/profile')}}"><i class="fas fa-user mr-2"></i>Account</a>
	                            <a class="dropdown-item" href="{{ url('/profile')}}"><i class="fas fa-cog mr-2"></i>Setting</a>
	                            <a class="dropdown-item" href="{{ url('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	    </div>
	    <div class="nav-left-sidebar sidebar-dark">
	        <div class="menu-list">
	            <nav class="navbar navbar-expand-lg navbar-light">
	                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <!-- Dashboard Link -->
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard_view') ? 'active' : '' }}" href="{{ url('/dashboard_view') }}">
                                    <i class="fa fa-home"></i> Dashboard
                                </a>
                            </li>
                            <!-- Jobs Link -->
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dm_jobs') ? 'active' : '' }}" href="{{ url('/dm_jobs') }}">
                                    <i class="fa fa-briefcase"></i> Jobs
                                </a>
                            </li>
                            <!-- Applicants Link -->
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('applicants') || Request::is('applicants/*') || Request::is('applicants_*') ? 'active' : '' }}" href="{{ url('/applicants') }}">
                                    <i class="fas fa-fw fa-inbox"></i> Applicants
                                </a>
                            </li>
                            <!-- Services Link -->
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                                    <i class="fa fa-stethoscope"></i> Services
                                </a>
                            </li>

                            <!-- Contact Us Link -->
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">
                                    <i class="fa fa-fw fa-phone"></i> Contact Us
                                </a>
                            </li>
                        </ul>

	                </div>
	            </nav>
	        </div>
	    </div>
	    <div class="dashboard-wrapper">
            @yield('content')

	    <div class="footer">
	                                <div class="container-fluid">
	                                    <div class="row">
	                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
	                                           Copyright © 2024 Concept. All rights reserved. </a>
	                                        </div>
	                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
	                                            <div class="text-md-right footer-links d-none d-sm-block">
	                                                <a href="javascript: void(0);">Support</a>

	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	        </div>
	            </div>
	                    </div>
	                    <script src="admin_assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	                    <!-- bootstap bundle js -->
	                    <script src="admin_assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	                    <!-- slimscroll js -->
	                    <script src="admin_assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	                    <!-- main js -->
	                    <script src="admin_assets/libs/js/main-js.js"></script>
	                    <!-- morris-chart js -->
	                    <script src="admin_assets/vendor/charts/morris-bundle/raphael.min.js"></script>
	                    <script src="admin_assets/vendor/charts/morris-bundle/morris.js"></script>
	                    <script src="admin_assets/vendor/charts/morris-bundle/morrisjs.html"></script>
	                    <!-- chart js -->
	                    <script src="admin_assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
	                    <script src="admin_assets/vendor/charts/charts-bundle/chartjs.js"></script>
	                    <!-- dashboard js -->
	                    <script src="admin_assets/libs/js/dashboard-influencer.js"></script>
</body>

</html>

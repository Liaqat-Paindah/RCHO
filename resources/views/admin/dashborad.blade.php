<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="Smarthr - Bootstrap Admin Template">
  <meta name="keywords"
    content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>HRMIS</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_admin/img/favicon.png')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/line-awesome.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/select2.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/bootstrap-datetimepicker.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_admin/css/style.css')}}">

  <!--[if lt IE 9]>
			<script src="{{ url('assets_admin/js/html5shiv.min.js')}}"></script>
			<script src="{{ url('assets_admin/js/respond.min.js')}}"></script>
		<![endif]-->
</head>

<body>

  <div class="main-wrapper">

    <div class="header">

      <div class="header-left">
        <a href="index.html" class="logo">
          <img src="{{ url('assets_admin/img/logo.png')}}" width="40" height="40" alt="">
        </a>
      </div>

      <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>

      <div class="page-title-box">
        <h3>ARDHO</h3>
      </div>

      <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

      <ul class="nav user-menu">

        <li class="nav-item">
          <div class="top-nav-search">
            <a href="javascript:void(0);" class="responsive-search">
              <i class="fa fa-search"></i>
            </a>
            <form action="search.html">
              <input class="form-control" type="text" placeholder="Search here">
              <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </li>



        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
          </a>
          <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
              <span class="notification-title">Notifications</span>
              <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media">
                      <span class="avatar">
                        <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}')}}">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span
                            class="noti-title">Patient appointment booking</span></p>
                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media">
                      <span class="avatar">
                        <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}')}}">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name
                          <span class="noti-title">Appointment booking with payment gateway</span></p>
                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media">
                      <span class="avatar">
                        <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span
                            class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span>
                          to project <span class="noti-title">Doctor available module</span></p>
                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media">
                      <span class="avatar">
                        <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span
                            class="noti-title">Patient and Doctor video conferencing</span></p>
                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="activities.html">
                    <div class="media">
                      <span class="avatar">
                        <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span
                            class="noti-title">Private chat module</span></p>
                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="activities.html">View all Notifications</a>
            </div>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
          </a>
          <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
              <span class="notification-title">Messages</span>
              <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">
                          <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                        </span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Richard Miles </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">
                          <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                        </span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">John Doe</span>
                        <span class="message-time">6 Mar</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">
                          <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                        </span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Tarah Shropshire </span>
                        <span class="message-time">5 Mar</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">
                          <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                        </span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Mike Litorus</span>
                        <span class="message-time">3 Mar</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">
                          <img alt="" src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}">
                        </span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Catherine Manseau </span>
                        <span class="message-time">27 Feb</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="chat.html">View all Messages</a>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown has-arrow main-drop">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img src="{{ url('assets_admin/img/profiles/liaqat.jpg')}}" alt="">
              <span class="status online"></span></span>
            <span>Liaqat</span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
          </div>
        </li>
      </ul>


      <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
            class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="profile.html">My Profile</a>
          <a class="dropdown-item" href="settings.html">Settings</a>
          <a class="dropdown-item" href="login.html">Logout</a>
        </div>
      </div>

    </div>


    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="menu-title">
            </li>
            <li class="submenu">
              <a href="{{ url('/admin')}}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="submenu">
              <a href="{{ url('/employee')}}"><i class="la la-user"></i> <span>Employee</span></a>
            </li>

            <li>
              <a href="{{ url('/profile')}}"><i class="la la-home"></i> <span>Departments</span></a>
            </li>
            <li>
              <a href="{{ url('/attendance_admin')}}"><i class="la la-edit"></i> <span>Attendance</span></a>
            </li>
            <li>
              <a href="leads.html"><i class="la la-money"></i> <span>Payroll</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-bell"></i> <span>Leave</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-pie-chart"></i> <span>Reports</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-cog"></i> <span>Performance</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-user-plus"></i> <span>Users</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-cog"></i> <span>Settings</span></a>
            </li>


        </div>
      </div>
    </div>
  </div>
  @yield('contents')
  




        <script src="{{ url('assets_admin/js/jquery-3.5.1.min.js')}}"></script>

        <script src="{{ url('assets_admin/js/popper.min.js')}}"></script>
        <script src="{{ url('assets_admin/js/bootstrap.min.js')}}"></script>

        <script src="{{ url('assets_admin/js/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ url('assets_admin/js/select2.min.js')}}"></script>

        <script src="{{ url('assets_admin/js/moment.min.js')}}"></script>
        <script src="{{ url('assets_admin/js/bootstrap-datetimepicker.min.js')}}"></script>

        <script src="{{ url('assets_admin/js/app.js')}}"></script>
</body>

</html>
<?php
// Include database configuration file
require_once 'config.php';

// PHP logic for CRUD operations
// Here, you'll need to implement the PHP code to handle CRUD operations
// This includes connecting to the database, handling form submissions, and querying the database

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIMAFRI</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="welcome.php" class="b-brand">
                    <div class="b-bg">
                        <img class="rounded-circle" style="width:68px;" src="assets/images/user/fribg.png" alt="activity-user">
                        
                    </div>
                    
                </a>
           
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
                
            </div>
            <div class="navbar-content scroll-div">
            <li class="nav-item pcoded-menu-caption">
            <span class="b-title"><a href="profile.php">Admin</a></span>
            </li>
                <ul class="nav pcoded-inner-navbar">
                
                    <li class="nav-item pcoded-menu-caption">
                        
                        <label>Dashboard</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project">
                        <a href="welcome.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Aset Laboratorium FRI</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Aset Lab</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">PC</a></li>
                            <li class=""><a href="bc_badges.html" class="">Proyektor</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Meja</a></li>
                            <li class=""><a href="bc_collapse.html" class="">Kursi</a></li>
                            <li class=""><a href="bc_tabs.html" class="">Mouse and keyboard</a></li>
                            <li class=""><a href="bc_typography.html" class="">Cables</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Denah Laboratorium FRI</label>
                    </li>
                    <li data-username="Maps Google"  class="nav-item active"><a href="denah_fri.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Denah Ruangan</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Logout</span></a></li>

                </ul>
                <!-- Di dalam navigasi dashboard -->


            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>username</span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="reset_password.php" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card Recent-Users">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Denah Laboratorium</h5>
                        <div>
                            <a href="#!" class="label theme-bg2 text-white f-12">Add room</a>
                            <a href="#!" class="label theme-bg2 text-white f-12 ml-2">Change Room Photo</a>
                        </div>
                    </div>
                    <div class="card-block px-0 py-3">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/figpie.png" alt="Description of image" style="max-width: 300px; max-height: 300px;">
                            <!-- rest of your table code -->
                        </div>
                    </div>
                    <div class="card-block px-0 py-3">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/labroom.png" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Integra 6 (0806)</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-muted">Last used today 16:08</h6>
                                        </td>
                                        <td class="text-right"><a href="#!" class="label theme-bg2 text-white f-12">Check</a></td>
                                    </tr>
                                                        <!-- Menambahkan baris komplain untuk Meja, Kursi, Mouse and Keyboard -->
                                                        <!-- Sesuaikan dengan informasi yang relevan -->
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/labroom.png" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Integra 8 (08012)</h6>
                                                            </td>
                                                            <td>
                                                            <h6 class="text-muted">Last used today 14:08</h6>
                                                            </td>
                                                            <td class="text-right"><a href="#!" class="label theme-bg2 text-white f-12">Check</a></td>
                                                        </tr>
                                                        <!-- ... -->
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/labroom.png" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Integra 5 (0805)</h6>
                                                            </td>
                                                            <td>
                                                            <h6 class="text-muted">Last used today 12:30</h6>
                                                            </td>
                                                            <td class="text-right"><a href="#!" class="label theme-bg2 text-white f-12">Check</a></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/labroom.png" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Integra 7 (0810)</h6>
                                                            </td>
                                                            <td>
                                                            <h6 class="text-muted">Last used today 12:30</h6>
                                                            </td>
                                                            <td class="text-right"><a href="#!" class="label theme-bg2 text-white f-12">Check</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->
                                
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>

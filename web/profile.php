<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile - Dhafin Fauzan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- Gaya dari kode yang Anda berikan -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Script dari kode yang Anda berikan -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</head>

<body>
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
                        
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="welcome.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
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
                        <label>Denah Komputer FRI</label>
                    </li>
                    <li data-username="Maps Google" class="nav-item"><a href="denah_fri.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Denah Ruangan</span></a></li>
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
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>

                </ul>
                <!-- Di dalam navigasi dashboard -->


            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- Navigasi dan bagian header -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
    
        <!-- ... Konten dari bagian header ... -->
    </header>

    <!-- Main Content -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <!-- ... Konten utama ... -->
                <!-- Contoh: Menampilkan informasi profil -->
                <div class="main-body">
                    <h1>Profil Pengguna</h1>
                    <div class="card">
                        <div class="card-header">
                            <h5>Admin</h5>
                        </div>
                        <div class="card-block px-0 py-3">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <!-- Informasi profil -->
                                        <tr>
                                            <td>Nama</td>
                                            <td>Admin</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>adminfri@gmail.com</td>
                                        </tr>
                                        <!-- Informasi lainnya -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

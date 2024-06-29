<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HexaDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="/admin/assets/vendor_assets/css/wickedpicker.min.css">

    <link rel="stylesheet" href="/admin/style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="/admin/img/favicon.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body class="layout-light side-menu">
<div class="mobile-search">
    <form action="/public" class="search-form">
        <img src="/admin/img/svg/search.svg" alt="search" class="svg">
        <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
    </form>
</div>
<div class="mobile-author-actions"></div>
<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <a class="navbar-brand" href="#">
                    <img class="dark" src="/admin/img/logo-dark.png" alt="logo">
                    <img class="light" src="/admin/img/logo-white.png" alt="logo">
                </a>
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src=/admin/img/svg/align-center-alt.svg" alt="img">
                </a>
            </div>
        </div>
        <!-- ends: navbar-left -->
        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-search">
                    <a href="#" class="search-toggle">
                        <i class="uil uil-search"></i>
                        <i class="uil uil-times"></i>
                    </a>
                    <form action="/public" class="search-form-topMenu">
                        <span class="search-icon uil uil-search"></span>
                        <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                    </form>
                </li>
                <li class="nav-message">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle icon-active">
                            <img class="svg" src="/admin/img/svg/message.svg" alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ms-1">2</span></h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ends: nav-message -->
                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:void(0);" class="nav-item-toggle icon-active">
                            <img class="svg" src="/admin/img/svg/alarm.svg" alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ms-1">4</span></h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-notification -->
                <li class="nav-settings">
                    <div class="dropdown-custom">
                        <a href="javascript:void(0);" class="nav-item-toggle">
                            <img src="/admin/img/setting.png" alt="setting">
                        </a>
                    </div>
                </li>

                <li class="nav-author">
                    <div class="dropdown-custom">
                        <form method="post" action="{{ route('logout') }}">
                            <i class="fe-log-out"></i>
                            <span>
                                    @csrf
                                    <button class="btn btn-danger">Chiqish</button>
                                </span>
                        </form>
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>
<main class="main-content">

    <div class="sidebar-wrapper">
        <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
                <ul class="sidebar_nav">
                    <li class="active">
                        <a href="/admin/dashboard">Dashboard</a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span class="nav-icon uil uil-window-section"></span>
                            <span class="menu-text">Layouts</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class="l_sidebar">
                                <a href="#" data-layout="light">Light Mode</a>
                            </li>
                            <li class="l_sidebar">
                                <a href="#" data-layout="dark">Dark Mode</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/service" class="">
                            <img src="/admin/img/svg/bar-chart-2.svg" alt="bar-chart-2" class="svg nav-icon">
                            <span class="menu-text">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/portfolio" class="">
                            <span class="nav-icon uil uil-database"></span>
                            <span class="menu-text">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/blog" class="">
                            <span class="nav-icon uil uil-images"></span>
                            <span class="menu-text">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/brend" class="">
                            <span class="nav-icon uil uil-arrow-growth"></span>
                            <span class="menu-text">Brands</span>
                        </a>
                    </li>

{{--                    <li class="has-child">--}}
{{--                        <a href="#" class="">--}}
{{--                            <span class="nav-icon uil uil-images"></span>--}}
{{--                            <span class="menu-text">Blog</span>--}}
{{--                            <span class="toggle-icon"></span>--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li class="">--}}
{{--                                <a href="blog.html">style 1</a>--}}
{{--                            </li>--}}
{{--                            <li class="">--}}
{{--                                <a href="blog2.html">Style 2</a>--}}
{{--                            </li>--}}
{{--                            <li class="">--}}
{{--                                <a href="blog3.html">Style 3</a>--}}
{{--                            </li>--}}
{{--                            <li class="">--}}
{{--                                <a href="blog-details.html">Details</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>

    {{ $slot }}


    <footer class="footer-wrapper">
        <div class="footer-wrapper__inside">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p><span>© 2023</span><a href="#">Sovware</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-end">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<div id="overlayer">
    <div class="loader-overlay">
        <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
        </div>
    </div>
</div>
<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>
<!-- inject:js-->
<script src="/admin/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery/jquery-ui.js"></script>
<script src="/admin/assets/vendor_assets/js/bootstrap/popper.js"></script>
<script src="/admin/assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
<script src="/admin/assets/vendor_assets/js/moment/moment.min.js"></script>
<script src="/admin/assets/vendor_assets/js/accordion.js"></script>
<script src="/admin/assets/vendor_assets/js/apexcharts.min.js"></script>
<script src="/admin/assets/vendor_assets/js/autoComplete.js"></script>
<script src="/admin/assets/vendor_assets/js/Chart.min.js"></script>
<script src="/admin/assets/vendor_assets/js/daterangepicker.js"></script>
<script src="/admin/assets/vendor_assets/js/drawer.js"></script>
<script src="/admin/assets/vendor_assets/js/dynamicBadge.js"></script>
<script src="/admin/assets/vendor_assets/js/dynamicCheckbox.js"></script>
<script src="/admin/assets/vendor_assets/js/footable.min.js"></script>
<script src="/admin/assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
<script src="/admin/assets/vendor_assets/js/google-chart.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery.countdown.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery.filterizr.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery.peity.min.js"></script>
<script src="/admin/assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
<script src="/admin/assets/vendor_assets/js/leaflet.js"></script>
<script src="/admin/assets/vendor_assets/js/leaflet.markercluster.js"></script>
<script src="/admin/assets/vendor_assets/js/loader.js"></script>
<script src="/admin/assets/vendor_assets/js/message.js"></script>
<script src="/admin/assets/vendor_assets/js/moment.js"></script>
<script src="/admin/assets/vendor_assets/js/muuri.min.js"></script>
<script src="/admin/assets/vendor_assets/js/notification.js"></script>
<script src="/admin/assets/vendor_assets/js/popover.js"></script>
<script src="/admin/assets/vendor_assets/js/select2.full.min.js"></script>
<script src="/admin/assets/vendor_assets/js/slick.min.js"></script>
<script src="/admin/assets/vendor_assets/js/trumbowyg.min.js"></script>
<script src="/admin/assets/vendor_assets/js/wickedpicker.min.js"></script>
<script src="/admin/assets/theme_assets/js/apexmain.js"></script>
<script src="/admin/assets/theme_assets/js/charts.js"></script>
<script src="/admin/assets/theme_assets/js/drag-drop.js"></script>
<script src="/admin/assets/theme_assets/js/footable.js"></script>
<script src="/admin/assets/theme_assets/js/full-calendar.js"></script>
<script src="/admin/assets/theme_assets/js/googlemap-init.js"></script>
<script src="/admin/assets/theme_assets/js/icon-loader.js"></script>
<script src="/admin/assets/theme_assets/js/jvectormap-init.js"></script>
<script src="/admin/assets/theme_assets/js/leaflet-init.js"></script>
<script src="/admin/assets/theme_assets/js/main.js"></script>
<!-- endinject-->
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
    <meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Geekfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="../../../css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="../../../css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="../../../css2-1?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="main-bg">



<!-- ==================== Start Loading ==================== -->

<div class="loader-wrap">
    <svg viewbox="0 0 1000 1000" preserveaspectratio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    </div>
</div>

<!-- ==================== End Loading ==================== -->


<div class="cursor"></div>


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->

<div id="smooth-wrapper">

    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg bord main-bg">
        <div class="container">

            <!-- Logo -->
            <a class="logo icon-img-100" href="/">
                <img src="assets/imgs/logo-dark.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><span class="rolling-text">Home</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="rolling-text">DORA®</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('about')}}">About</a>
                            <a class="dropdown-item" href="{{route('about')}}">Mission</a>
                            <a class="dropdown-item" href="{{route('partnerships')}}">Partners</a>
                            <a class="dropdown-item" href="{{'portfolio'}}l">Our Team</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}"><span class="rolling-text">Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portfolio')}}"><span class="rolling-text">Portfolio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}"><span class="rolling-text">Blog</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"><span class="rolling-text">Contact</span></a>
                    </li>
                </ul>
            </div>

            <div class="search-form">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search">
                    <button><span class="pe-7s-search"></span></button>
                </div>
                <div class="search-icon">
                    <span class="pe-7s-search open-search"></span>
                    <span class="pe-7s-close close-search"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    <div id="smooth-content">

        <main class="sub-bg">


            <!-- ==================== Start Slider ==================== -->

            <header class="page-header section-padding pb-0">
                <div class="container mt-80">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="caption">
                                <h6 class="sub-title">DORA®</h6>
                                <h1 class="fz-55">Career with us.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 offset-lg-4">
                            <div class="text mt-30">
                                <p>We help our clients succeed by creating brand identities, digital experiences,
                                    and print materials that communicate clearly, achieve marketing goals, and look
                                    fantastic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-marq xlrg section-padding pb-0">
                    <div class="slide-har st1">
                        <div class="box">
                            <div class="item">
                                <h4>Marketing</h4>
                            </div>
                            <div class="item">
                                <h4>Marketing</h4>
                            </div>
                            <div class="item">
                                <h4>Marketing</h4>
                            </div>
                            <div class="item">
                                <h4>Marketing</h4>
                            </div>
                            <div class="item">
                                <h4>Marketing</h4>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <h4>Career</h4>
                            </div>
                            <div class="item">
                                <h4>Career</h4>
                            </div>
                            <div class="item">
                                <h4>Career</h4>
                            </div>
                            <div class="item">
                                <h4>Career</h4>
                            </div>
                            <div class="item">
                                <h4>Career</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ==================== End Slider ==================== -->



            <!-- ==================== Start Section ==================== -->

            <section class="career-serv section-padding">
                <div class="container">
                    <div class="img mb-80">
                        <img src="assets/imgs/background/20.jpg" alt="">
                    </div>
                    <div class="row lg-marg mt-40">
                        <div class="col-lg-4">
                            <div class="office md-mb50">
                                <h3 class="mb-10">Services and <br> Products</h3>
                                <p class="mb-10">Advanced services combined with a large collection of new optio</p>
                                <ul class="rest">
                                    <li>
                                        <span class="icon pe-7s-user"></span>
                                        <span>Simple Management</span>
                                    </li>
                                    <li>
                                        <span class="icon pe-7s-config"></span>
                                        <span>Advanced Management</span>
                                    </li>
                                    <li>
                                        <span class="icon pe-7s-note2"></span>
                                        <span>Essentials Solutions</span>
                                    </li>
                                    <li>
                                        <span class="icon pe-7s-wallet"></span>
                                        <span>Pricing and Fees</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cont">
                                <h4 class="mb-30">Our roots are in Melbourne, Australia’s cultural
                                    capital and one of its most liveable cities. For
                                    many years, the majority of themes employees
                                    ventured into our heritage - listed office in the
                                    natural park of country. </h4>

                                <p>As we move into a new world of work, themes is hiring all roles to be based
                                    anywhere in Oceania. We often
                                    welcome applicants based all around Australia & New Zealand, with the choice to
                                    be fully remote, or work
                                    from our hometown of Melbourne. No matter where our employees are based, we are
                                    keeping our inclusive
                                    culture front of mind and working through ways for our remote-first employees to
                                    connect with fellow
                                    Envatians in person.</p>

                                <a href="#0" class="main-color3 mt-30">
                                        <span>See Open Roles <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                            </svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Section ==================== -->



            <!-- ==================== Start Section ==================== -->

            <section class="career-box section-padding main-bg bord-thin-top">
                <div class="container">
                    <div class="row mb-80">
                        <div class="col-lg-4">
                            <div class="title text-center md-mb50">
                                <h4>Engineering</h4>
                                <p>Advanced services combined with a large collection of new options.</p>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="list-item mb-20">
                                <h5>Engineering Manager</h5>
                                <p>Knowledge sharing with the broader development ecosystem.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <span class="butn main-colorbg3">HQ</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item mb-20">
                                <h5>Senior Data Engineer</h5>
                                <p>Enabling teams to find solutions quickly and validate market impact.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item mb-20">
                                <h5>Manager, Software Engineer</h5>
                                <p>Knowledge sharing with the broader development ecosystem.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item">
                                <h5>Senior Web Developer</h5>
                                <p>Enabling teams to find solutions quickly and validate market impact.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <span class="butn main-colorbg3">HQ</span>
                                    <span class="butn">Remote</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-80">
                        <div class="col-lg-4">
                            <div class="title text-center md-mb50">
                                <h4>Product Design</h4>
                                <p>Advanced services combined with a large collection of new options.</p>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="list-item mb-20">
                                <h5>Mobile Engineer - iOS</h5>
                                <p>Knowledge sharing with the broader development ecosystem.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <span class="butn main-colorbg3">HQ</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item mb-20">
                                <h5>Product Designer</h5>
                                <p>Enabling teams to find solutions quickly and validate market impact.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item">
                                <h5>Senior Security Engineer</h5>
                                <p>Enabling teams to find solutions quickly and validate market impact.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <span class="butn main-colorbg3">HQ</span>
                                    <span class="butn">Remote</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="title text-center md-mb50">
                                <h4>Digital Marketing</h4>
                                <p>Advanced services combined with a large collection of new options.</p>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="list-item mb-20">
                                <h5>Head of Global Marketing</h5>
                                <p>Knowledge sharing with the broader development ecosystem.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <span class="butn main-colorbg3">HQ</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                            <div class="list-item">
                                <h5>Social Media Manager</h5>
                                <p>Enabling teams to find solutions quickly and validate market impact.</p>
                                <div class="d-flex align-items-center mt-30">
                                    <span class="butn">Birmingham, UK</span>
                                    <a href="/page-single-service.html" class="main-color3 ml-auto">
                                            <span>Job Description Page <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Section ==================== -->


        </main>


        <!-- ==================== Start call to action ==================== -->

        <section class="call-action-img">
            <div class="container">
                <div class="sec-bg-img bg-img" data-background="assets/imgs/background/2.jpg"></div>
                <div class="sec-lg-head section-padding">
                    <div class="row ontop">
                        <div class="col-11 d-flex align-items-center">
                            <div class="valign">
                                <h2 class="fz-50 d-rotate wow">
                                    <span class="rotate-text">Have a project in mind?</span>
                                    <span class="rotate-text">Let’s <span class="sub-font">get to
                                                work</span>.</span>
                                </h2>
                            </div>
                            <div class="ml-auto">
                                <a href="#0" class="butn-circle d-flex align-items-center text-center m-auto">
                                    <div class="full-width">
                                            <span><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                        <span class="full-width">Get In Touch</span>
                                    </div>
                                    <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End call to action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        <footer class="pt-80">
            <div class="container pb-80">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="colum md-mb50">
                            <div class="tit mb-20">
                                <h6>Address</h6>
                            </div>
                            <div class="text">
                                <p>Germany — 785 15h Street, Office 478 Berlin, De 81566</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="colum md-mb50">
                            <div class="tit mb-20">
                                <h6>Say Hello</h6>
                            </div>
                            <div class="text">
                                <p class="mb-10">
                                    <a href="#0">hello@design.com</a>
                                </p>
                                <h5>
                                    <a href="#">+1 840 841 25 69</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 md-mb50">
                        <div class="tit mb-20">
                            <h6>Social</h6>
                        </div>
                        <ul class="rest social-text">
                            <li>
                                <a href="#0">Facebook</a>
                            </li>
                            <li>
                                <a href="#0">Twitter</a>
                            </li>
                            <li>
                                <a href="#0">LinkedIn</a>
                            </li>
                            <li>
                                <a href="#0">Instagram</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="tit mb-20">
                            <h6>Newsletter</h6>
                        </div>
                        <div class="subscribe">
                            <form action="contact.php">
                                <div class="form-group rest">
                                    <input type="email" placeholder="Type Your Email">
                                    <button type="submit">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer pt-40 pb-40 bord-thin-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="#0">
                                    <img src="assets/imgs/logo-light.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="copyright d-flex">
                                <div class="ml-auto">
                                    <p class="fz-13">© 2023 Geekfolio is Proudly Powered by <span class="underline"><a href="https://themeforest.net/user/ui-themez" target="_blank">Ui-ThemeZ</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>
</div>







<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

<!-- plugins -->
<script src="assets/js/plugins.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/smoother-script.js"></script>

<!-- custom scripts -->
<script src="assets/js/scripts.js"></script>

</body>

</html>
<x-layouts.main>
<main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding pb-0 sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h6 class="sub-title">DORA®</h6>
                            <h1 class="fz-55">What Can We Do ?</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 offset-lg-4">
                        <div class="text mt-30">
                            <p>We help our clients succeed by creating brand identities, digital experiences, and print materials that communicate clearly, achieve marketing goals, and look fantastic.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-marq xlrg section-padding pb-0">
                <div class="slide-har st1">
                    <div class="box">
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                        <div class="item">
                            <h4>Services</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="serv-box section-padding">
            <div class="container">
                <div class="sec-lg-head mb-80">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="position-re">
                                <h6 class="dot-titl-non mb-10">Featured Services</h6>
                                <h2 class="fz-60 fw-700">Our Services</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $servc)
                        <div class="col-lg-4">
                            <div class="serv-item md-mb50 radius-10">
                                <div class="icon-img-60 mb-40">
                                    <img src="{{ asset('storage/) . $servc->image' }}" alt="">
                                </div>
                                <h5 class="mb-30 pb-30 bord-thin-bottom">{{ $servc->title }}</h5>
                                <p>{{ $servc->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="portfolio-fixed">
            <div class="container-fluid rest">
                <div class="row">
                    <div class="col-lg-6 rest">
                        <div class="left" id="sticky_item">
                            <div id="tab-1" class="img bg-img" data-background="/front/assets/imgs/portfolio/gallery/1.jpg">
                            </div>
                            <div id="tab-2" class="img bg-img" data-background="/front/assets/imgs/portfolio/gallery/2.jpg">
                            </div>
                            <div id="tab-3" class="img bg-img" data-background="/front/assets/imgs/portfolio/gallery/3.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sub-bg right">
                        <div class="cont active" data-tab="tab-1">
                            <div class="img-hiden">
                                <img src="/front/assets/imgs/portfolio/gallery/1.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">01. Digital</span>
                            <h2 class="mb-30">Luxury Glassware.</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="/page-career.html" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="/front/assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-2">
                            <div class="img-hiden">
                                <img src="/front/assets/imgs/portfolio/gallery/2.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">02. Marketing</span>
                            <h2 class="mb-30">Brand Identity.</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="/page-career.html" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="/front/assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-3">
                            <div class="img-hiden">
                                <img src="/front/assets/imgs/portfolio/gallery/3.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">03. Design</span>
                            <h2 class="mb-30">Roseville Pottery.</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewbox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="/page-career.html" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="/front/assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start services tabs ==================== -->

        <section class="services-tab section-padding">
            <div class="container">
                <div class="row" id="tabs">
                    <div class="col-lg-6 order2">
                        <div class="serv-tab-cont mb-80">
                            <div class="tab-content current" id="tabs-1">
                                <div class="item">
                                    <div class="img">
                                        <img src="/front/assets/imgs/sass-img/serv/1.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="/front/assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#0" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-2">
                                <div class="item">
                                    <div class="img">
                                        <img src="/front/assets/imgs/sass-img/serv/1.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="/front/assets/imgs/serv-icons/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#0" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-3">
                                <div class="item">
                                    <div class="img">
                                        <img src="/front/assets/imgs/sass-img/serv/1.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="/front/assets/imgs/serv-icons/2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#0" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-4">
                                <div class="item">
                                    <div class="img">
                                        <img src="/front/assets/imgs/sass-img/serv/1.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="/front/assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#0" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 valign order1">
                        <div class="serv-tab-link tab-links full-width md-mb50">
                            <div class="sec-lg-head mb-80">
                                <h6 class="dot-titl-non mb-15">Services</h6>
                                <p>We help you to go online and increase your conversion rate Better design for your
                                    digital products. </p>
                            </div>
                            <ul class="rest">
                                <li class="item-link current mb-15" data-tab="tabs-1"><span>01</span> UI/UX Design</li>
                                <li class="item-link mb-15" data-tab="tabs-2"><span>02</span> Branding</li>
                                <li class="item-link mb-15" data-tab="tabs-3"><span>03</span> Development</li>
                                <li class="item-link" data-tab="tabs-4"><span>04</span> Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End services tabs ==================== -->



        <!-- ==================== Start about ==================== -->

        <section class="intro-corp section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-head mb-40">
                            <h6 class="sub-title">FAQ.</h6>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cont">
                            <div class="text">
                                <h2 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Watch the creative process</span>
                                    </span>
                                    <span class="sideup-text">
                                        <span class="up-text"><span>behind our digital marketing</span>.</span>
                                    </span>
                                </h2>
                            </div>
                            <div class="accordion bord mt-40">

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".1s">
                                    <div class="title">
                                        <h6 class="fz-18">The Power of Influencer Marketing</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="title">
                                        <h6 class="fz-18">Unique and Influential Design</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                                <div class="item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="title">
                                        <h6 class="fz-18">We Build and Activate Brands</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->

    </main>
</x-layouts.main>
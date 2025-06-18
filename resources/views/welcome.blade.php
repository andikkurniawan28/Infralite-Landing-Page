<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ ENV('APP_NAME') }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/lite-version/assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="/lite-version/assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="/lite-version/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="/lite-version/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/lite-version/assets/css/animate.css" />
    <link rel="stylesheet" href="/lite-version/assets/css/main.css" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- ========================= header start ========================= -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('welcome') }}">
                                <h1><span>InfraLite</span></h1>
                                {{-- <img src="/lite-version/assets/images/logo/logo.svg" alt="Logo" /> --}}
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <div class="ms-auto">
                                    <ul id="nav" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll active" href="#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#feature-1">Features</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="" href="#0">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" href="#0">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" href="#0">Team</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="header-btn">
                                <a href="#0" class="main-btn btn-hover">Download</a>
                            </div> --}}
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10">
                    <div class="hero-content">
                        <h1><span>InfraLite</span></h1>
                        <p>Your all-in-one web-based toolkit for IT — run backups, resolve drivers, and manage daily support tasks without installing a thing.</p>
                        <a href="#feature-1" class="main-btn btn-hover">Explore the Web App</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 offset-xxl-1">
                    <div class="hero-image text-center text-lg-start">
                        <img src="/lite-version/assets/images/pexels-divinetechygirl-1181354.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 1 - InfraLite-DBT -->
    <section id="feature-1" class="feature-section-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="feature-image text-center text-lg-start">
                        <img src="/lite-version/assets/images/pexels-cookiecutter-1148820.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-content-wrapper">
                        <div class="section-title">
                            <h2 class="mb-20">InfraLite-DBT</h2>
                            <p class="mb-30">InfraLite Database Backup Tool helps IT support and product owners
                                schedule fast and reliable database backups — no DevOps skills required.</p>
                            <ul>
                                <li>🕒 Set daily/weekly/monthly backups in seconds</li>
                                <li>🛡️ Local or cloud-ready</li>
                                <li>⚡ Lightweight, zero-config</li>
                            </ul>
                            <br>
                            <a href="#0" class="main-btn btn-hover border-btn">Try InfraLite-DBT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 2 - Driver Resolver -->
    <section id="feature-2" class="feature-section-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="feature-content-wrapper">
                        <div class="section-title">
                            <h2 class="mb-30">InfraLite-DriverResolver</h2>
                            <p class="mb-30">Find missing drivers quickly without bloatware. Designed for busy IT
                                support and field technicians.</p>
                            <ul>
                                <li>🔍 Scan & resolve driver issues instantly</li>
                                <li>💡 Open source and community friendly</li>
                                <li>⚙️ Minimal UI, fast execution</li>
                            </ul>
                            <br>
                            <a href="#0" class="main-btn btn-hover border-btn">Try InfraLite-DriverResolver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-image text-lg-end">
                        <img src="/lite-version/assets/images/pexels-tanasovich-2588757.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 3 - InfraLite Suite -->
    <section id="feature-3" class="feature-section-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="feature-image text-center text-lg-start">
                        <img src="/lite-version/assets/images/pexels-field-engineer-147254-442150.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-content-wrapper">
                        <div class="section-title">
                            <h2 class="mb-20">InfraLite Suite</h2>
                            <p class="mb-30">All essential tools in one suite — built for those who want results, not
                                distractions.</p>
                            <ul>
                                <li>📦 Combine DBT & Driver Resolver in one installation</li>
                                <li>💼 Ideal for IT field teams and small businesses</li>
                                <li>🧩 Easily expandable</li>
                            </ul>
                            <br>
                            <a href="#0" class="main-btn btn-hover border-btn">Try InfraLite-Suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= cta-section start ========================= -->
    {{-- <section id="cta" class="cta-section pt-120">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5">
                        <div class="cta-title section-title">
                            <h2>Subscribe <br class="d-block">
                                Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="subscribe-form-wrapper">
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button class="main-btn btn-hover">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========================= cta-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-160">
        <div class="shape">
            <img src="/lite-version/assets/images/footer/shape-1.svg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3>Follow On</h3>
                        <ul class="social-links">
                            <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="#0"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="#0"><i class="lni lni-twitter-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3>About Us</h3>
                        <ul class="links">
                            <li><a href="#0">Home</a></li>
                            {{-- <li><a href="#0">About</a></li> --}}
                            <li><a href="#0">Features</a></li>
                            {{-- <li><a href="#0">Pricing</a></li>
                            <li><a href="#0">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                    {{-- <div class="footer-widget">
                        <h3>Services</h3>
                        <ul class="links">
                            <li><a href="#0">SaaS Focused</a></li>
                            <li><a href="#0">Awesome Design</a></li>
                            <li><a href="#0">Ready to Use</a></li>
                            <li><a href="#0">Essential Selection</a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="{{ route('welcome') }}">
                            {{-- <img src="/lite-version/assets/images/logo/logo.svg" alt="logo"> --}}
                            <h1><span>InfraLite</span></h1>
                            </a>
                        </div>
                        <p class="desc">Your all-in-one web-based toolkit for IT — run backups, resolve drivers, and manage daily support tasks without installing a thing.</p>
                        {{-- <p class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod
                            tempor invidunt.</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <p>Design and Developed By <a href="https://uideck.com/" rel="nofollow" target="_blank">UIdeck</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/lite-version/assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="/lite-version/assets/js/tiny-slider.js"></script>
    <script src="/lite-version/assets/js/wow.min.js"></script>
    <script src="/lite-version/assets/js/polyfill.js"></script>
    <script src="/lite-version/assets/js/main.js"></script>
</body>

</html>

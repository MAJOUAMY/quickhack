<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Owl Carousel Theme Default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Box Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicon.min.css') }}">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">

    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Dark CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Title -->
    <title>Jovie - Job Board & Portal HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
</head>

<body>
    <!-- Pre-loader Start -->
    {{-- <div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-circle">
                        <div class="sk-circle1 sk-child"></div>
                        <div class="sk-circle2 sk-child"></div>
                        <div class="sk-circle3 sk-child"></div>
                        <div class="sk-circle4 sk-child"></div>
                        <div class="sk-circle5 sk-child"></div>
                        <div class="sk-circle6 sk-child"></div>
                        <div class="sk-circle7 sk-child"></div>
                        <div class="sk-circle8 sk-child"></div>
                        <div class="sk-circle9 sk-child"></div>
                        <div class="sk-circle10 sk-child"></div>
                        <div class="sk-circle11 sk-child"></div>
                        <div class="sk-circle12 sk-child"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Pre-loader End -->

    <!-- Navbar Area Start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('/logo.png') }}" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link  ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('postReport') }}" class="nav-link ">Post a Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="/communes" class="nav-link ">Communes</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        <div class="other-option">
                            <a href="{{ route('register') }}" class="signup-btn">Sign Up</a>
                            <a href="{{ route('login') }}" class="signin-btn">Sign In</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar Area End -->
</body>

</html>

@yield('main')
<!-- Footer Section Start -->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                        </a>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore
                        et dolore magna. Sed eiusmod tempor incididunt ut.</p>

                    <div class="footer-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-60">
                    <h3>For Candidate</h3>
                    <ul>
                        <li>
                            <a href="job-grid.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Browse Jobs
                            </a>
                        </li>
                        <li>
                            <a href="account.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="catagories.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Browse Categories
                            </a>
                        </li>
                        <li>
                            <a href="resume.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Resume
                            </a>
                        </li>
                        <li>
                            <a href="job-list.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Job List
                            </a>
                        </li>
                        <li>
                            <a href="sign-up.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Sign Up
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-60">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="index.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="faq.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="pricing.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Pricing
                            </a>
                        </li>
                        <li>
                            <a href="privacy.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <i class='bx bx-chevrons-right bx-tada'></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget footer-info">
                    <h3>Information</h3>
                    <ul>
                        <li>
                            <span>
                                <i class='bx bxs-phone'></i>
                                Phone:
                            </span>
                            <a href="tel:882569756">
                                +101 984 754
                            </a>
                        </li>

                        <li>
                            <span>
                                <i class='bx bxs-envelope'></i>
                                Email:
                            </span>
                            <a href="mailto:info@jovie.com">
                                info@jovie.com
                            </a>
                        </li>

                        <li>
                            <span>
                                <i class='bx bx-location-plus'></i>
                                Address:
                            </span>
                            123, Denver, USA
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-text text-center">
    <p>© Jovie is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
<!-- Footer Section End -->

<!-- Back To Top Start -->
<div class="top-btn">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
<!-- Back To Top End -->

<!-- jQuery first, then Bootstrap JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Subscriber Form JS -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Form Validation JS -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact Form -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="en">


<!-- Mirrored from excavahire.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 08:15:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excavahire - Construction Machine Renting Website HTML Template</title>
    <link rel="stylesheet" href="{{ asset('excavahire.vercel.app/assets/css/bootstrap-custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('excavahire.vercel.app/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/%40tabler/icons-webfont%40latest/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('excavahire.vercel.app/assets/css/nice-select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('excavahire.vercel.app/assets/css/main.css') }}">
</head>
{{-- {{ asset('assets/excavahire.vercel.app/') }} --}}
<body>
    <!-- loader -->
    <div class="loader loader--active">
        <div class="loader__icon">
            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                <path opacity="0.2" fill="#000"
                    d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z">
                </path>
                <path fill="#000"
                    d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z">
                </path>
                <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20"
                    to="360 20 20" dur="0.5s" repeatCount="indefinite"></animateTransform>
            </svg>
        </div>
        <div class="loader__tile"></div>
        <div class="loader__tile"></div>
        <div class="loader__tile"></div>
        <div class="loader__tile"></div>
        <div class="loader__tile"></div>
    </div>
    <!-- header section-->
    <header class="d-none d-lg-flex header position-fixed w-100 justify-content-between">
        <div class="d-flex align-items-center gap-4 logo">
            <a href="index.html">
                <img src="{{ asset('excavahire.vercel.app/assets/images/logo.png') }}" class="d-none d-sm-block" alt="">
                <img src="{{ asset('excavahire.vercel.app/assets/images/logo-icon.png') }}" class="d-sm-none" alt="">
            </a>
            <form class="align-items-center gap-1 d-none d-xl-flex">
                <i class="ti ti-search fs-5"></i>
                <input type="text" placeholder="Search..." class="bg-transparent border-0">
            </form>
        </div>
        <div class="d-flex align-items-center">
            <div class="gap-3 pe-3 d-none d-4xl-flex">
                <a href="tel:+2095550104" class="d-flex align-items-center gap-1"><i class="ti ti-phone fs-4"></i>
                    Call <span class="text-primary float-text" data-text="+(209)
                    555-0104">+(209) 555-0104</span></a>
                <a href="mailto:sender@example.com" class="d-flex align-items-center gap-1"><i
                        class="ti ti-mail fs-4"></i> Write <span class="text-primary float-text"
                        data-text="sender@example.com">sender@example.com</span></a>
            </div>
            <a href="cart.html" class="cart d-flex align-items-center gap-2 border-0 fs-4">
                <i class="ti ti-shopping-cart-plus"></i>
                <span>0</span>
            </a>
            <a href="equipment.html" class="list text-uppercase border-0 font-medium d-none d-md-block">
                list your equipment
            </a>
            <a href="collection.html"
                class="collection text-uppercase border-0 d-none d-md-flex align-items-center gap-2 font-medium">
                <i class="ti ti-layout-grid fs-4"></i> our collection
            </a>

            <a
                class="list text-uppercase nav__bar border-0 d-flex flex-column align-items-center justify-content-center">
                <i class="ti ti-menu-deep fs-3"></i>
                <span>Menu</span>
            </a>
        </div>
    </header>
    <div class="nav__items-wrapper">
        <div class="nav__items">
            <div class="nav__items-head d-flex align-items-center justify-content-between">
                <a href="index.html" class="nav__item">
                    <img src="{{ asset('excavahire.vercel.app/assets/images/logo.png') }}" alt="">
                </a>
                <button class="nav__close border-0">
                    <i class="close icon"></i>
                </button>
            </div>
            <ul class="list-unstyled">
                <li><a class="nav__item active" href="index.html">Home</a></li>
                <li><a class="nav__item" href="about.html">About</a></li>
                <li><a class="nav__item" href="contact.html">Contact</a></li>
                <li><a class="nav__item" href="services.html">Service</a></li>
                <li><a class="nav__item" href="services-details.html">Service Details</a></li>
                <li><a class="nav__item" href="product-details.html">Product Details</a></li>
                <li><a class="nav__item" href="information.html">Cart Info</a></li>
                <li><a class="nav__item" href="shipping.html">Shipping Details</a></li>
                <li><a class="nav__item" href="payment.html">Payment</a></li>
                <li><a class="nav__item" href="order-complete.html">Payment Success</a></li>
                <li><a class="nav__item" href="result.html">Search Result</a></li>
                <li><a class="nav__item" href="terms.html">Terms Of Service</a></li>
                <li><a class="nav__item" href="error.html">Not Found</a></li>
            </ul>
        </div>
    </div>
    <div class="backdrop"></div>
    <!-- Mobile menu -->
    <nav class="mobile-menu">
        <a href="index.html" class="active">
            <i class="ti ti-home"></i>
            <span>Home</span>
        </a>
        <a href="cart.html">
            <i class="ti ti-shopping-cart"></i>
            <span>Cart</span>
        </a>
        <a href="collection.html">
            <i class="ti ti-layout-grid"></i>
            <span>Collections</span>
        </a>
        <a href="#" class="nav__bar">
            <i class="ti ti-menu-2"></i>
            <span>Menu</span>
        </a>
    </nav>

    <!-- Mobile search -->
    <div class="mobile-search d-lg-none">
        <div class="content" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="ti ti-search"></i>
            <div class="flex-grow-1">
                <h6>Choose Machine</h6>
                <span>Category • Type • Location</span>
            </div>
            <i class="ti ti-adjustments-horizontal"></i>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="text-white border-0 bg-transparent" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="inner flex-column">
                            <div class="select-box">
                                <i class="ti ti-backhoe"></i>
                                <div class="flex-grow-1">
                                    <select name="category" id="categorym" class="selectize">
                                        <option value="0">Select Category</option>
                                        <option value="1">Excavator</option>
                                        <option value="2">Hydraulic Breaker</option>
                                        <option value="3">Bulldozer</option>
                                        <option value="4">Backhoe Loader</option>
                                        <option value="5">Payloader</option>
                                        <option value="6">Rottary Rig</option>
                                        <option value="7">Crawler Crane </option>
                                    </select>
                                    <p>Select Your Category</p>
                                </div>
                            </div>
                            <div class="select-box">
                                <i class="ti ti-bulldozer"></i>
                                <div class="flex-grow-1">
                                    <select name="type" id="type" class="selectize">
                                        <option value="0">Equipment Name</option>
                                        <option value="1">Track Loader</option>
                                        <option value="2">Backhoe</option>
                                        <option value="3">Dozer</option>
                                        <option value="4">Double Drum</option>
                                        <option value="5">Pad Foot</option>
                                        <option value="6">Towable Boom Lift</option>
                                        <option value="7">Tower Crane </option>
                                    </select>
                                    <p>Select Your Equipment</p>
                                </div>
                            </div>
                            <div class="select-box">
                                <i class="ti ti-map-pin-filled"></i>
                                <div class="flex-grow-1">
                                    <select name="location" id="locationm" class="selectize">
                                        <option value="0">Your Location</option>
                                        <option value="1">Chicago, IL, USA</option>
                                        <option value="2">Dallas, TX, USA</option>
                                        <option value="3">Houston, TX, USA</option>
                                        <option value="4">Los Angeles, CA, USA</option>
                                        <option value="5">Miami, FL, USA</option>
                                        <option value="6">New York, NY, USA</option>
                                    </select>
                                    <p>Select Your Location</p>
                                </div>
                            </div>
                            <div class="select-box">
                                <i class="ti ti-calendar-due"></i>
                                <div class="flex-grow-1">
                                    <input class="bg-transparent w-100 border-0 text-white picker" type="date">
                                    <p>Select Your Date</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar section -->
    <div class="sidebar d-none d-lg-flex flex-column justify-content-end align-items-center">
        <ul class="social list-unstyled">
            <li><a href="#"><i class="ti ti-brand-facebook"></i></a></li>
            <li><a href="#"><i class="ti ti-brand-instagram"></i></a></li>
            <li><a href="#"><i class="ti ti-brand-discord"></i></a></li>
            <li><a href="#"><i class="ti ti-brand-wikipedia"></i></a></li>
        </ul>
        <div class="hline"></div>
        <div class="vline"></div>
        <div class="position-relative">
            <div class="d-flex flex-column">
                <button id="plusbtn" class="plus bg-primary fs-5"><i class="ti ti-plus"></i></button>
                <button id="sharebtn" class="share text-primary"><i class="ti ti-share"></i></button>
            </div>
            <div id="social-popup" class="social-popup">
                <ul>
                    <li><a href="#"><i class="ti ti-brand-twitter-filled"></i></a></li>
                    <li><a href="#"><i class="ti ti-brand-pinterest"></i></a></li>
                    <li><a href="#"><i class="ti ti-brand-youtube"></i></a></li>
                    <li><a href="#"><i class="ti ti-brand-meta"></i></a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Banner Slider -->
    <section class="slider-area">
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="container">
                        <div class="row g-5 g-xl-0">
                            <div class="circle d-none d-lg-block"></div>
                            <div class="col-12 col-lg-6 col-xl-5 content">
                                <h6 class="text-primary fw-bold float-text" data-text="Machine Marketplace">
                                    Machine&nbsp;Marketplace</h6>
                                <h1 class="fw-bold mb-3">Rent Your <span class="text-secondary">Ideal</span> Equipment
                                </h1>
                                <p>Rolling Roads is not just for experts we love
                                    enthusiasts too!</p>
                                <a href="#" class="explore-btn">Start Explore</a>
                            </div>
                            <div class="col-lg-6 col-xl-7 slider-bg"
                                style="background-image: url({{ asset('excavahire.vercel.app/assets/images/hero-1.png') }});">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="container">
                        <div class="row g-5 g-xl-0">
                            <div class="circle d-none d-lg-block"></div>
                            <div class="col-12 col-lg-6 col-xl-5 content">
                                <h6 class="text-primary fw-bold float-text" data-text="Machine Marketplace">
                                    Machine&nbsp;Marketplace</h6>
                                <h1 class="fw-bold">Equipment Rental <span class="text-secondary">Solution</span></h1>
                                <p>Rolling Roads is not just for experts we love
                                    enthusiasts too!</p>
                                <a href="#" class="explore-btn">Start Explore</a>
                            </div>
                            <div class="col-lg-6 col-xl-7 slider-bg"
                                style="background-image: url({{ asset('excavahire.vercel.app/assets/images/hero-2.png') }});">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="container">
                        <div class="row g-5 g-xl-0">
                            <div class="circle d-none d-lg-block"></div>
                            <div class="col-12 col-lg-6 col-xl-5 content">
                                <h6 class="text-primary fw-bold float-text" data-text="Machine Marketplace">
                                    Machine&nbsp;Marketplace</h6>
                                <h1 class="fw-bold">Rent Your <span class="text-secondary">Ideal</span> Equipment</h1>
                                <p>Rolling Roads is not just for experts we love
                                    enthusiasts too!</p>
                                <a href="#" class="explore-btn">Start Explore</a>
                            </div>
                            <div class="col-lg-6 col-xl-7 slider-bg"
                                style="background-image: url({{ asset('excavahire.vercel.app/assets/images/hero-3.png') }});">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="container">
                        <div class="row g-5 g-xl-0">
                            <div class="circle d-none d-lg-block"></div>
                            <div class="col-12 col-lg-6 col-xl-5 content">
                                <h6 class="text-primary fw-bold float-text" data-text="Machine Marketplace">
                                    Machine&nbsp;Marketplace</h6>
                                <h1 class="fw-bold">Find Your <span class="text-secondary">Equipment</span> Here</h1>
                                <p>Rolling Roads is not just for experts we love
                                    enthusiasts too!</p>
                                <a href="#" class="explore-btn">Start Explore</a>
                            </div>
                            <div class="col-lg-6 col-xl-7 slider-bg slider-bg-4"
                                style="background-image: url({{ asset('excavahire.vercel.app/assets/images/hero-4.png') }});">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="swiper-nav text-white">
                <div class="button-prev">
                    <i class="ti ti-chevron-left"></i>
                </div>
                <div class="button-next">
                    <i class="ti ti-chevron-right"></i>
                </div>
            </div>
            <span class="slide-number">01</span>
            <div class="pagination"></div>
            <div class="pagination2"></div>
        </div>
    </section>

    <!-- bottom bar -->
    <div class="bottom-bar">
        <form class="inner">
            <div class="select-box">
                <i class="ti ti-backhoe"></i>
                <div class="flex-grow-1">
                    <select name="category" id="category">
                        <option value="0">Select Category</option>
                        <option value="1">Excavator</option>
                        <option value="2">Hydraulic Breaker</option>
                        <option value="3">Bulldozer</option>
                        <option value="4">Backhoe Loader</option>
                        <option value="5">Payloader</option>
                        <option value="6">Rottary Rig</option>
                        <option value="7">Crawler Crane </option>
                    </select>
                    <p>Select Your Category</p>
                </div>
            </div>
            <div class="select-box">
                <i class="ti ti-bulldozer"></i>
                <div class="flex-grow-1">
                    <select name="category1" id="category1" class="">
                        <option value="0">Equipment Name</option>
                        <option value="1">Excavator</option>
                        <option value="2">Hydraulic Breaker</option>
                        <option value="3">Bulldozer</option>
                        <option value="4">Backhoe Loader</option>
                        <option value="5">Payloader</option>
                        <option value="6">Rottary Rig</option>
                        <option value="7">Crawler Crane </option>
                    </select>
                    <p>Select Your Equipment</p>
                </div>
            </div>
            <div class="select-box">
                <i class="ti ti-map-pin-filled"></i>
                <div class="flex-grow-1">
                    <select name="location" id="location">
                        <option value="0">Your Location</option>
                        <option value="1">Chicago, IL, USA</option>
                        <option value="2">Dallas, TX, USA</option>
                        <option value="3">Houston, TX, USA</option>
                        <option value="4">Los Angeles, CA, USA</option>
                        <option value="5">Miami, FL, USA</option>
                        <option value="6">New York, NY, USA</option>
                    </select>
                    <p>Select Your Location</p>
                </div>
            </div>
            <div class="select-box">
                <i class="ti ti-calendar-due"></i>
                <div class="flex-grow-1">
                    <input type="text" name="dates" />
                    <p>Select Your Date</p>
                </div>
            </div>
            <div>
                <a href="result.html" class="search-btn"><i class="ti ti-search"></i></a>
            </div>
        </form>

    </div>
	{{-- {{ asset('assets/excavahire.vercel.app/') }} --}}
    <script src="{{ asset('code.jquery.com/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('cdn.jsdelivr.net/momentjs/latest/moment.min.js') }}"></script>
    <script src="{{ asset('cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('cdn.jsdelivr.net/npm/bootstrap%405.3.1/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js') }}"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('excavahire.vercel.app/assets/js/nice-select2.js') }}"></script>
    <script src="{{ asset('excavahire.vercel.app/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from excavahire.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 08:16:22 GMT -->
</html>
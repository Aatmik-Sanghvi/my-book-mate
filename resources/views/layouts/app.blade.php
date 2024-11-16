<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-impromptu.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <link href="{{ asset('assets/css/datepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/png" />

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/lineIcons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Scripts -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_api.api_key') }}&loading=async&libraries=places"
        async></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans antialiased">
    @if (Route::currentRouteName() != 'login')
        <div class="justify-content-end">
            {{-- @include('layouts.navigation') --}}
            {{-- </div>
    @endif --}}

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
            <!--====== PRELOADER PART ENDS ======-->

            <!--====== HEADER PART START ======-->
            <header class="header-area">
                <div class="navbar-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand" href="index.html">
                                        <img src="" hidden alt="Logo" width="80px" height="80px"
                                            alt="My Book Mate" />
                                        <p>My book mate</p>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="toggler-icon"> </span>
                                        <span class="toggler-icon"> </span>
                                        <span class="toggler-icon"> </span>
                                    </button>

                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul id="nav" class="navbar-nav ms-auto">
                                            <li class="nav-item">
                                                <a class="page-scroll active" href="#home">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="page-scroll" href="#features">Features</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="page-scroll" href="#about">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="page-scroll" href="#why">Why? </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>
                                            <!-- <li class="nav-item">
                        <a href="javascript:void(0)">Blog</a>
                      </li> -->
                                        </ul>
                                    </div>
                                    <!-- navbar collapse -->

                                    <!-- <div class="navbar-btn d-none d-sm-inline-block">
                    <a class="main-btn" data-scroll-nav="0" href="https://uideck.com/templates/basic/" rel="nofollow">
                      Download Now
                    </a>
                  </div> -->
                                </nav>
                                <!-- navbar -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
                <!-- navbar area -->

                <div id="home" class="header-hero bg_cover"
                    style="background-image: url(assets/images/header/banner-bg.svg)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="header-hero-content text-center">
                                    <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s"
                                        data-wow-delay="0.2s">
                                        My Book Mate
                                    </h3>
                                    <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s"
                                        data-wow-delay="0.5s">
                                        Expand Your Library, Share Your Stories!
                                    </h2>
                                    <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                        Join a growing community of readers. Share books, discover new favorites, and
                                        unlock a world of literary
                                        adventures.
                                    </p>
                                    <a href="javascript:void(0)" class="main-btn wow fadeInUp"
                                        data-wow-duration="1.3s" data-wow-delay="1.1s">
                                        Get Started
                                    </a>
                                </div>
                                <!-- header hero content -->
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                                    data-wow-delay="1.4s">
                                    <img src="assets/images/header/header-hero.png" alt="hero" />
                                </div>
                                <!-- header hero image -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                    <div id="particles-1" class="particles"></div>
                </div>
                <!-- header hero -->
            </header>
            <!--====== HEADER PART ENDS ======-->

            <!--====== BRAND PART START ======-->
            <div class="brand-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div
                                class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                                <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <img src="assets/images/brands/uideck.svg" alt="brand" />
                                </div>
                                <!-- single logo -->
                                <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.2s">
                                    <img src="assets/images/brands/ayroui.svg" alt="brand" />
                                </div>
                                <!-- single logo -->
                                <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.3s">
                                    <img src="assets/images/brands/graygrids.svg" alt="brand" />
                                </div>
                                <!-- single logo -->
                                <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.4s">
                                    <img src="assets/images/brands/lineicons.svg" alt="brand" />
                                </div>
                                <!-- single logo -->
                                <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">
                                    <img src="assets/images/brands/ecommerce-html.svg" alt="brand" />
                                </div>
                                <!-- single logo -->
                            </div>
                            <!-- brand logo -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!--====== BRAND PART ENDS ======-->

            <!--====== SERVICES PART START ======-->
            <section id="features" class="services-area pt-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title text-center pb-40">
                                <div class="line m-auto"></div>
                                <h3 class="title">
                                    Simple, intuitive, and ready to use —
                                    <span> all you need to start sharing and discovering books effortlessly!</span>
                                </h3>
                            </div>
                            <!-- section title -->
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-7 col-sm-8">
                            <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                                data-wow-delay="0.2s">
                                <div class="services-icon">
                                    <img class="shape" src="assets/images/services/services-shape.svg"
                                        alt="shape" />
                                    <img class="shape-1" src="assets/images/services/services-shape-1.svg"
                                        alt="shape" />
                                    <i class="lni lni-baloon"> </i>
                                </div>
                                <div class="services-content mt-30">
                                    <h4 class="services-title">
                                        <a href="javascript:void(0)">Easy Book Sharing</a>
                                    </h4>
                                    <p class="text">
                                        Borrow and share physical books with just a few clicks. Simply search for books
                                        available in your city,
                                        request them, and arrange a convenient pick-up.
                                    </p>
                                    <!-- <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i></a> -->
                                </div>
                            </div>
                            <!-- single services -->
                        </div>
                        <div class="col-lg-4 col-md-7 col-sm-8">
                            <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <div class="services-icon">
                                    <img class="shape" src="assets/images/services/services-shape.svg"
                                        alt="shape" />
                                    <img class="shape-1" src="assets/images/services/services-shape-2.svg"
                                        alt="shape" />
                                    <i class="lni lni-cog"> </i>
                                </div>
                                <div class="services-content mt-30">
                                    <h4 class="services-title">
                                        <a href="javascript:void(0)">Referral Rewards</a>
                                    </h4>
                                    <p class="text">
                                        Invite your friends, family, or anyone you know to join the My Book Mate
                                        community, and earn exciting
                                        rewards as they help grow your local book-sharing network.
                                    </p>
                                    <!-- <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i></a> -->
                                </div>
                            </div>
                            <!-- single services -->
                        </div>
                        <div class="col-lg-4 col-md-7 col-sm-8">
                            <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                                data-wow-delay="0.8s">
                                <div class="services-icon">
                                    <img class="shape" src="assets/images/services/services-shape.svg"
                                        alt="shape" />
                                    <img class="shape-1" src="assets/images/services/services-shape-3.svg"
                                        alt="shape" />
                                    <i class="lni lni-bolt-alt"> </i>
                                </div>
                                <div class="services-content mt-30">
                                    <h4 class="services-title">
                                        <a href="javascript:void(0)">Exclusive Recommendations</a>
                                    </h4>
                                    <p class="text">
                                        Based on your reading preferences, receive personalized book recommendations
                                        through our AI enabled
                                        feature.
                                    </p>
                                    <!-- <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i></a> -->
                                </div>
                            </div>
                            <!-- single services -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!--====== SERVICES PART ENDS ======-->

            <section id="about">
                <!--====== ABOUT PART START ======-->
                <div class="about-area pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title">
                                            <!-- Quick & Easy <span>to Use Bootstrap Template</span> -->
                                            Our Passion for Books
                                        </h3>
                                    </div>
                                    <!-- section title -->
                                    <p class="text">
                                        At My Book Mate, we are driven by our love for the written word. Books hold the
                                        power to transport us,
                                        inspire us, and connect us to one another. We know that the experience of
                                        holding a book, feeling its
                                        pages, and losing yourself in its world is something digital alternatives can
                                        never fully replicate. Our
                                        mission is to preserve that magic by creating a community where book lovers can
                                        share this joy with one
                                        another, effortlessly and endlessly.
                                        <!-- <br>
                    Join us in building a vibrant, book-sharing community that brings people closer through the love of
                    reading. -->
                                    </p>
                                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                                </div>
                                <!-- about content -->
                            </div>
                            <div class="col-lg-6">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <img src="assets/images/about/about1.svg" alt="about" />
                                </div>
                                <!-- about image -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                    <div class="about-shape-1">
                        <img src="assets/images/about/about-shape-1.svg" alt="shape" />
                    </div>
                </div>
                <!--====== ABOUT PART ENDS ======-->

                <!--====== ABOUT PART START ======-->
                <div class="about-area pt-70">
                    <div class="about-shape-2">
                        <img src="assets/images/about/about-shape-2.svg" alt="shape" />
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-last">
                                <div class="about-content ms-lg-auto mt-50 wow fadeInLeftBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title">
                                            <!-- Modern design <span> with Essential Features</span> -->
                                            Connecting People Through Stories
                                        </h3>
                                    </div>
                                    <!-- section title -->
                                    <p class="text">
                                        We believe that books bring people together. With My Book Mate, you’re not just
                                        subscribing to a
                                        book-sharing service — you’re joining a community of like-minded individuals.
                                        Each book shared carries a
                                        piece of its reader’s soul, and every exchange is a chance to connect over
                                        shared passions. Our platform
                                        fosters friendships, conversations, and a sense of belonging, built around the
                                        stories that shape us.
                                    </p>
                                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                                </div>
                                <!-- about content -->
                            </div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <img src="assets/images/about/about2.svg" alt="about" />
                                </div>
                                <!-- about image -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
                <!--====== ABOUT PART ENDS ======-->

                <!--====== ABOUT PART START ======-->
                <div class="about-area pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title">
                                            <!-- <span>Crafted for</span> SaaS, App and Software Landing Page -->
                                            Sustainable Reading for a Better World
                                        </h3>
                                    </div>
                                    <!-- section title -->
                                    <p class="text">
                                        Books have always been a source of wisdom and growth, but they can also become a
                                        burden when left to
                                        gather dust. My Book Mate gives books a new life and reduces waste through a
                                        circular,
                                        subscription-based sharing model. Together, we can make a difference by reducing
                                        our environmental
                                        impact while enriching our minds. By subscribing, you’re not just choosing a
                                        service — you’re choosing
                                        to make reading a sustainable, collective experience that benefits everyone.
                                    </p>
                                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                                </div>
                                <!-- about content -->
                            </div>
                            <div class="col-lg-6">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <img src="assets/images/about/about3.svg" alt="about" />
                                </div>
                                <!-- about image -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                    <div class="about-shape-1">
                        <img src="assets/images/about/about-shape-1.svg" alt="shape" />
                    </div>
                </div>
                <!--====== ABOUT PART ENDS ======-->
            </section>

            <!--====== VIDEO COUNTER PART START ======-->
            <section id="why" class="video-counter pt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-lg-last">
                            <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s"
                                data-wow-delay="0.8s">
                                <div class="counter-content">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title">Why <span> My book mate?</span></h3>
                                    </div>
                                    <!-- section title -->
                                    <!-- <p class="text"> -->
                                    <ol>
                                        <li>
                                            <b>Free Access to Books:</b> At My Book Mate, we believe books should be
                                            accessible to everyone. No
                                            fees, no
                                            subscriptions—just books, shared by readers like you.
                                        </li>
                                        <br>
                                        <li>
                                            <b>Local Connections:</b> Discover books from your own neighborhood, and
                                            meet people who share your
                                            passion for
                                            reading. My Book Mate makes it easy to connect and exchange with book lovers
                                            near you.
                                        </li>
                                        <br>
                                        <li>
                                            <b>Sustainability:</b> Why buy new when you can share what you already have?
                                            Our platform promotes the
                                            sharing
                                            of physical books, reducing waste and encouraging a sustainable way of
                                            reading.
                                        </li>
                                        <br>
                                    </ol>
                                    <!-- </p> -->
                                </div>
                                <!-- counter content -->
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <div
                                            class="
                          single-counter
                          counter-color-1
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                            <div class="counter-items text-center">
                                                <span class="count countup text-uppercase" cup-end="125"></span>

                                                <p class="text">Shared Books</p>
                                            </div>
                                        </div>
                                        <!-- single counter -->
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="
                          single-counter
                          counter-color-2
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                            <div class="counter-items text-center">
                                                <span class="count countup text-uppercase" cup-end="87"></span>
                                                <p class="text">Active Users</p>
                                            </div>
                                        </div>
                                        <!-- single counter -->
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                            <div class="counter-items text-center">
                                                <span class="count countup text-uppercase" cup-end="59"></span>
                                                <p class="text">Average Rating</p>
                                            </div>
                                        </div>
                                        <!-- single counter -->
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- counter wrapper -->
                        </div>
                        <div class="col-lg-6">
                            <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img class="dots" src="assets/images/video/dots.svg" alt="dots" />
                                <div class="video-wrapper">
                                    <div class="video-image">
                                        <img src="assets/images/video/video.png" alt="video" />
                                    </div>
                                    <div class="video-icon">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw"
                                            class="video-popup glightbox">
                                            <i class="lni lni-play"> </i>
                                        </a>
                                    </div>
                                </div>
                                <!-- video wrapper -->
                            </div>
                            <!-- video content -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </section>
            <!--====== VIDEO COUNTER PART ENDS ======-->

            <!--======== PRICING ===========-->

            <!-- Pricing -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Subscription Plans</h2>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Choose the plan that better fits your needs.</p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="mt-12 grid sm:grid-cols-1 lg:grid-cols-3 gap-6 lg:items-center">
                    <!-- Card -->
                    <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Monthly</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                            <span class="font-bold text-2xl -me-2">$</span>
                            100
                        </span>
                        <p class="mt-2 text-sm text-gray-500">No commitments. Cancel anytime.</p>

                        {{-- <a href="{{ route('checkout', ['plan' => 'price_1PzySaGVUboZM7HFfol9Nc7H']) }}" --}}
                        <a href="#"
                            class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-100 text-indigo-800 hover:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-indigo-900 dark:text-indigo-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div
                        class="flex flex-col border-2 border-indigo-600 text-center shadow-xl rounded-xl p-8 dark:border-indigo-700">
                        <p class="mb-3"><span
                                class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-indigo-100 text-indigo-800 dark:bg-indigo-600 dark:text-white">Most
                                popular</span></p>
                        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Yearly</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                            <span class="font-bold text-2xl -me-2"></span>
                            200
                        </span>
                        <p class="mt-2 text-sm text-gray-500">Save 30% with full access for 1 year.</p>

                        {{-- <a href="{{ route('checkout', ['plan' => 'price_1PzySaGVUboZM7HFfyCTl9ER']) }}" --}}
                        <a href="#"
                            class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Lifetime</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                            <span class="font-bold text-2xl -me-2">$</span>
                            300
                        </span>
                        <p class="mt-2 text-sm text-gray-500">Pay once. Lifetime access.</p>

                        {{-- <a href="{{ route('checkout', ['plan' => 'price_1PzySaGVUboZM7HFsjHmjsLd']) }}" --}}
                        <a href="#"
                            class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-100 text-indigo-800 hover:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-indigo-900 dark:text-indigo-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Pricing -->

            <!--======== PRICING END ========-->

            <!--====== FOOTER PART START ======-->
            <footer id="footer" class="footer-area pt-120">
                <div class="container">
                    <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="subscribe-content mt-45">
                                    <h2 class="subscribe-title">
                                        Subscribe Our Newsletter <span>get reguler updates</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="subscribe-form mt-50">
                                    <form action="#">
                                        <input type="text" placeholder="Enter eamil" />
                                        <button class="main-btn">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- subscribe area -->
                    <div class="footer-widget pb-100">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <a class="logo" href="#home">
                                        <!-- <img src="assets/images/logo/logo.png" alt="logo" /> -->
                                        <h1>My Book Mate</h1>
                                    </a>
                                    <p class="text">
                                        "My Book Mate" is a community-driven, book-sharing platform that promotes free
                                        access to physical books
                                        among readers within the same city
                                    </p>
                                    <ul class="social">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="lni lni-facebook-filled"> </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="lni lni-twitter-filled"> </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="lni lni-instagram-filled"> </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="lni lni-linkedin-original"> </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- footer about -->
                            </div>
                            <div class="col-lg-5 col-md-7 col-sm-12">
                                <div class="footer-link d-flex mt-50 justify-content-sm-between">
                                    <div class="link-wrapper wow fadeIn" data-wow-duration="1s"
                                        data-wow-delay="0.4s">
                                        <div class="footer-title">
                                            <h4 class="title">Quick Link</h4>
                                        </div>
                                        <ul class="link">
                                            <li><a href="javascript:void(0)">Road Map</a></li>
                                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                            <li><a href="javascript:void(0)">Refund Policy</a></li>
                                            <li><a href="javascript:void(0)">Terms of Service</a></li>
                                            <li><a href="javascript:void(0)">Pricing</a></li>
                                        </ul>
                                    </div>
                                    <!-- footer wrapper -->
                                    <div class="link-wrapper wow fadeIn" data-wow-duration="1s"
                                        data-wow-delay="0.6s">
                                        <div class="footer-title">
                                            <h4 class="title">Resources</h4>
                                        </div>
                                        <ul class="link">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#features">Features</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#why">Why</a></li>
                                            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                                        </ul>
                                    </div>
                                    <!-- footer wrapper -->
                                </div>
                                <!-- footer link -->
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12">
                                <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0.8s">
                                    <div class="footer-title">
                                        <h4 class="title">Contact Us</h4>
                                    </div>
                                    <ul class="contact">
                                        {{-- <li>+91 7405294376</li> --}}
                                        <li>info.mybookmate@gmail.com</li>
                                        <li>www.mybookmate.in</li>
                                        <li>
                                            Ahmedabad, India.
                                        </li>
                                    </ul>
                                </div>
                                <!-- footer contact -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- footer widget -->
                    <!-- <div class="footer-copyright">
            <div class="row">
              <div class="col-lg-12">
                <div class="copyright d-sm-flex justify-content-between">
                  <div class="copyright-content">
                    <p class="text">
                      Designed and Developed by
                      <a href="https://uideck.com" rel="nofollow">UIdeck</a> -->
                    <!-- </p>
                  </div> -->
                    <!-- copyright content -->
                    <!-- </div> -->
                    <!-- copyright -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- row -->
                    <!-- </div> -->
                    <!-- footer copyright -->
                </div>
                <!-- container -->
                <div id="particles-2"></div>
            </footer>
            <!--====== FOOTER PART ENDS ======-->

            <!--====== BACK TOP TOP PART START ======-->
            <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
            <!--====== BACK TOP TOP PART ENDS ======-->
        </div>
    @endif
    <!-- Page Content -->
    @yield('content')

    @include('layouts.js')
</body>
<!--====== Javascript Files ======-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @elseif (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @elseif (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
</script>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {{-- "{{ asset() }}" --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    @yield('head')
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

    <!--pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pe-icon-7-stroke.css') }}" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="58" class="scrollspy-example">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index.html">
                <img src="{{ asset('images/logo-light.png') }}" alt="" class="logo-light" height="18" />
                <img src="{{ asset('images/logo-dark.png') }}" alt="" class="logo-dark" height="18" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="mySidenav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#demo" class="nav-link">Demos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('merchants.create') }}" class="nav-link bg-success ">Switch to Merchant</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            {{-- <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image"
                                class="rounded-circle"> --}}
                            <span class="pro-user-name ms-1 bg-success">
                                {{ Auth::user()->name }} 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
    
                            <!-- item-->
                            <a href="contacts-profile.html" class="dropdown-item notify-item">
                               
                                <span>My Account</span>
                            </a>
    
                            <!-- item-->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <div class="dropdown-divider"></div>
    
                            <!-- item-->
                            
                                <span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </span>
                           
    
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- home start -->
    <section class="bg-home bg-gradient" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="home-title">
                                <h5 class="mb-3 text-white-50">Discover Adminto Today</h5>
                                <h2 class="mb-4 text-white">Make your Site Amazing & Unique with Adminto</h2>
                                <p class="text-white-50 home-desc font-16 mb-5">Adminto is a fully featured premium
                                    Landing template built on top of awesome Bootstrap 4.3.1, modern web technology
                                    HTML5, CSS3 and jQuery. </p>
                                <div class="watch-video mt-5">
                                    <a href="#" class="btn btn-custom me-4">Get Started <i
                                            class="mdi mdi-chevron-right ms-1"></i></a>
                                    <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i
                                            class="mdi mdi-play play-icon-circle me-2"></i> <span>Watch The
                                            Video</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-sm-6">
                            <div class="home-img mo-mt-20">
                                <img src="{{ asset('images/home-img.png') }}" alt=""
                                    class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- features start -->
    <section class="features" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code"
                                role="tab" aria-controls="pills-code" aria-selected="true">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-notebook tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Quality Code</h5>
                                        <p>At vero eos et accusam et</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-customize-tab" data-bs-toggle="pill"
                                href="#pills-customize" role="tab" aria-controls="pills-customize"
                                aria-selected="false">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-edit tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Easy to customize</h5>
                                        <p>Sed ut unde iste error sit</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-support-tab" data-bs-toggle="pill" href="#pills-support"
                                role="tab" aria-controls="pills-support" aria-selected="false">
                                <div class="features-icon float-end">
                                    <h1><i class="pe-7s-headphones tab-icon"></i></h1>
                                </div>
                                <div class="d-none d-lg-block me-4">
                                    <h5 class="tab-title">Awesome Support</h5>
                                    <p>It will be as simple as fact</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    @yield('content')
                    <!-- end tab-content -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- features end -->

    <!-- services start -->
    <section class="section bg-light" id="services">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h6 class="text-primary small-title">Services</h6>
                        <h4>What we do</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/layers.png') }}" alt="">
                        </div>
                        <h5>Responsive Layouts</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">The new common language will be more simple and regular than the
                                existing European languages.</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/core.png') }}" alt="">
                        </div>
                        <h5>Based on Bootstrap UI</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">If several languages coalesce the grammar language is more than that
                                of indual languages.</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/paperdesk.png') }}" alt="">
                        </div>
                        <h5>Creative Design</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">It will be as simple as occidental it will be to an english person.
                                It will be as simple as occidental</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/solarsystem.png') }}" alt="">
                        </div>
                        <h5>Awesome Support</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam nisi ut</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/datatext.png') }}" alt="">
                        </div>
                        <h5>Easy to customize</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">Everyone realizes why a new common language would be one could refuse
                                to pay translators.</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="services-box p-4 bg-white mt-4">
                        <div class="services-img float-start me-4">
                            <img src="{{ asset('images/icons/browserscript.png') }}" alt="">
                        </div>
                        <h5>Quality Code</h5>
                        <div class="overflow-hidden">
                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis deleniti atque</p>
                            <a href="#" class="text-custom">Read more...</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- services end -->

    <!-- Demo start -->
    <section class="section" id="demo">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h6 class="text-primary small-title">Demos</h6>
                        <h4>Available Demos</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-1.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Light Layouts</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-2.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Horizontal Layouts</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-3.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Semi Dark Layout</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-4.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Semi Dark Horizontal</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-5.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Landing Page</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="demo-box text-center p-3 mt-4">
                        <a href="#" class="text-dark">
                            <div class="position-relative demo-content">
                                <div class="demo-img">
                                    <img src="{{ asset('images/demo/demo-6.jpg') }}" alt=""
                                        class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="demo-overlay">
                                    <div class="overlay-icon">
                                        <i class="pe-7s-expand1 h1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="font-18">Dark Sidebar</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-4">
                        <button class="btn btn-custom">More Demos <i class="mdi mdi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- Demo end -->

    <!-- clients start -->
    <section class="section bg-light" id="clients">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Clients</h6>
                        <h4>What our Users Says</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" The designer of this theme delivered a quality product. I am not a
                            front-end developer and I hate when the theme I download has glitches or needs minor tweaks
                            here and there. This worked for my needs just out of the boxes. Also, it is fast and
                            elegant."</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('images/testi/img-1.png') }}" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Adminto User</p>
                        <h5 class="font-18">Xpanta</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" Extremely well designed and the documentation is very well done.
                            Super happy with the purchase and definitely recommend this! "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('images/testi/img-2.png') }}" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Adminto User</p>
                        <h5 class="font-18">G_Sam</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" We used this theme to save some design time but... wow it has
                            everything you didn't realize you would need later. I highly recommend this template to get
                            your web design headed in the right direction quickly. "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('images/testi/img-3.png') }}" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Adminto User</p>
                        <h5 class="font-18">Isaacfab</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mt-5 pt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="client-images">
                        <img src="{{ asset('images/clients/1.png') }}" alt="logo-img"
                            class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="client-images">
                        <img src="{{ asset('images/clients/2.png') }}" alt="logo-img"
                            class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="client-images">
                        <img src="{{ asset('images/clients/3.png') }}" alt="logo-img"
                            class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="client-images">
                        <img src="{{ asset('images/clients/4.png') }}" alt="logo-img"
                            class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- clients end -->

    <!-- counter start -->
    <section class="section bg-gradient">
        <div class="container-fluid">
            <div class="row" id="counter">
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-add-user display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="1200">0</h2>
                            <h5 class="counter-name text-white">Fans</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-cart display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="mb-3 text-white"><span class="counter_value" data-target="1500">10</span> +
                            </h2>
                            <h5 class="counter-name text-white">Total Sales</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-smile display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="6931">608</h2>
                            <h5 class="counter-name text-white">Happy Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-medal display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="800">2</h2>
                            <h5 class="counter-name text-white">Won Prices</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- counter end -->

    <!-- pricing start -->
    <section class="section bg-light" id="pricing">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Pricing</h6>
                        <h4>Our Pricing plans</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-plans bg-white text-center p-4 mt-4">
                        <h5 class="plan-title mt-2 mb-4">Single</h5>

                        <div class="plan-price">
                            <h4 class="mb-3 price"><sup><small>$</small></sup>24</h4>
                            <h5 class="plan-duration text-muted font-18">Per license</h5>
                        </div>

                        <div class="pricing-content p-4 text-muted mb-2">
                            <p>Number of end products 1</p>
                            <p>Customer support</p>
                            <p>Free Updates</p>
                            <p>Monthly updates</p>
                            <p>24 x 7 Support</p>
                        </div>

                        <div class="pt-4">
                            <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-plans bg-white text-center p-4 mt-4">
                        <h5 class="plan-title mt-2 mb-4">Multiple</h5>

                        <div class="plan-price">
                            <h4 class="mb-3 price"><sup><small>$</small></sup>120</h4>
                            <h5 class="plan-duration text-muted font-18">Per license</h5>
                        </div>

                        <div class="pricing-content p-4 text-muted mb-2">
                            <p>Number of end products 1</p>
                            <p>Customer support</p>
                            <p>Free Updates</p>
                            <p>Monthly updates</p>
                            <p>24 x 7 Support</p>
                        </div>

                        <div class="pt-4">
                            <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-plans bg-white text-center p-4 mt-4">
                        <h5 class="plan-title mt-2 mb-4">Extended</h5>

                        <div class="plan-price">
                            <h4 class="mb-3 price"><sup><small>$</small></sup>999</h4>
                            <h5 class="plan-duration text-muted font-18">Per license</h5>
                        </div>

                        <div class="pricing-content p-4 text-muted mb-2">
                            <p>Number of end products 1</p>
                            <p>Customer support</p>
                            <p>Free Updates</p>
                            <p>Monthly updates</p>
                            <p>24 x 7 Support</p>
                        </div>

                        <div class="pt-4">
                            <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- pricing end -->

    <!-- contact start -->
    <section class="section" id="contact">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="text-primary small-title">Contact</h6>
                        <h4>Have any Questions ?</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="get-in-touch">
                        <h5>Get in touch</h5>
                        <p class="text-muted mb-5">At solmen va esser necessi far</p>

                        <div class="mb-3">
                            <div class="get-touch-icon float-start me-3">
                                <h2><i class="pe-7s-mail text-primary"></i></h2>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">E-mail</h5>
                                <p class="text-muted">example@abc.com</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="get-touch-icon float-start me-3">
                                <h2><i class="pe-7s-phone text-primary"></i></h2>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">Phone</h5>
                                <p class="text-muted">012-345-6789</p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="get-touch-icon float-start me-3">
                                <h2> <i class="pe-7s-map-marker text-primary"></i></h2>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">Address</h5>
                                <p class="text-muted">20 Rollins Road Cotesfield, NE 68829</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form bg-white">
                        <span id="error-msg"></span>
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Enter your name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Enter your email...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input name="subject" id="subject" type="text" class="form-control"
                                            placeholder="Enter Subject...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send"
                                        class="submitBnt btn btn-custom" value="Send Message" />
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                    <!-- end custom-form -->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->

    <!-- footer start -->
    <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="footer-logo mb-3">
                            <img src="{{ asset('images/logo-light.png') }}" alt="" height="20">
                        </div>
                        <ul class="list-inline footer-list text-center mt-5">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">Services</a></li>
                            <li class="list-inline-item"><a href="#">Clients</a></li>
                            <li class="list-inline-item"><a href="#">Pricing</a></li>
                            <li class="list-inline-item"><a href="#">Contact</a></li>
                        </ul>
                        <ul class="list-inline social-links mb-4 mt-5">
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                        </ul>
                        <p class="text-white-50 mb-4">2016 - 2020 © Adminto. Design by <a href="#"
                                target="_blank" class="text-white-50">Coderthemes</a> </p>

                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- counter js -->
    <script src="{{ asset('js/counter.int.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    @yield('script')
</body>

</html>

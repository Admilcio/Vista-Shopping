<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.ico')}}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="VistaShop">
    <meta name="keywords" content="VistaShop">
    <meta name="author" content="Admilcio">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>VistaShop</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
 {{--    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick-theme.css') }}"> --}}
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css') }}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    @stack('styles')

</head>

<body class="theme-color4 light ltr">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{route('index')}}">
                                        <img src="{{ asset('assets/images/v.logo.png')}}" class="h-logo img-fluid lazyload"
                                            alt="logo">
                                    </a>
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="{{route('index')}}" class="nav-link menu-title">Home</a></li>
                                            <li><a href="{{route('shop')}}" class="nav-link menu-title">Shop</a></li>
                                            <li><a href="{{route('cart')}}" class="nav-link menu-title">Cart</a></li>
                                            <li><a href="about-us.html" class="nav-link menu-title">About Us</a></li>
                                            <li><a href="contact-us.html" class="nav-link menu-title">Contact Us</a>
                                            </li>
                                            <li><a href="blog.html" class="nav-link menu-title">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box theme-bg-color">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist/list.html">
                                                <i class="fa-solid fa-heart"></i>
                                                <span id="wishlist-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="{{route('cart')}}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span id="cart-count" class="label label-theme rounded-pill">
                                                    {{Cart::instance('cart')->content()->count()}}
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media name-usr">
                                            @auth
                                            <span>{{ Auth::user()->name }}</span>
                                            @endauth<i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                @if (Route::has('login'))
                                                    @auth 
                                                        @if (Auth::user()->utype === 'ADM')
                                                        <li> <a href="{{route('admin.index')}}" class="d-block">Dashboard</a></li>
                                                        @else
                                                        <li><a href="{{route('user.index')}}" class="d-block">My account</a></li>
                                                        @endif
                                                        <li>
                                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('frmlogout').submit();" class="d-block">Logout</a>
                                                            <form id="frmlogout" action="{{route('logout')}}" method="POST">
                                                            @csrf
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{route('login')}}" class="d-block">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('register')}}" class="d-block">Register</a>
                                                        </li>
                                                    @endauth
                                          
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <form method="GET" class="search-full" action="http://localhost:8000/search">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" name="q" class="form-control search-type"
                                            placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>

    @yield('content')

    <div id="qvmodal"></div>

    <footer class="footer-sm-space mt-5">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.htm" class="footer-logo float-start">
                                    <img src="{{ asset('assets/images/v.logo.png')}}" class="f-logo img-fluid lazyload"
                                        alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists" style="clear:both;">
                                <li>
                                    <span><b>phone:</b> <span class="font-light"> +1 0000000000</span></span>
                                </li>
                                <li>
                                    <span><b>Address:</b><span class="font-light"> Lisbon, Odivelas</span></span>
                                </li>
                                <li>
                                    <span><b>Email:</b><span class="font-light"> admydamata@gmail.com</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop')}}" class="font-dark">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop.html" class="font-dark">Latest Shoes</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Branded Jeans</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">New Jackets</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Colorfull Hoodies</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Shiner Goggles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="#" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Track Orders</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Your Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Shopping FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Let’s stay in touch</h3>
                            <div class="form-newsletter">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control color-4" placeholder="Your Email Address">
                                    <span class="input-group-text" id="basic-addon4"><i
                                            class="fas fa-arrow-right"></i></span>
                                </div>
                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid lazyload"
                                        alt="payment icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 font-dark">© 2024, Admilcio da Mata.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product/details.html">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <div class="bg-overlay"></div>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/feather/feather.min.js')}}"></script>
    <script src="{{ asset('assets/lazysizes.min.js')}}"></script>
    <script src="{{ asset('assets/slick/slick.js')}}"></script>
    <script src="{{ asset('assets/slick/slick-animation.min.js')}}"></script>
    <script src="{{ asset('assets/slick/custom_slick.js')}}"></script>
    <script src="{{ asset('assets/price-filter.js')}}"></script>
    <script src="{{ asset('assets/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('assets/filter.js')}}"></script>
    <script src="{{ asset('assets/newsletter.js')}}"></script>
    <script src="{{ asset('assets/cart_modal_resize.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('assets/theme-setting.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
  /*       $(".toggle-nav, .sidebar-toggle").on("click", function () {
        $(".nav-menu").css("right", "0px");
        $(".mobile-poster").css("right", "0px");
        $(".bg-overlay").addClass("show");
    });
    $(".back-btn, .bg-overlay").on("click", function () {
        $(".nav-menu").css("right", "-410px");
        $(".mobile-poster").css("right", "-410px");
        $(".bg-overlay").removeClass("show");
    }); */
    </script>
    @stack('scripts')
</body>

</html>
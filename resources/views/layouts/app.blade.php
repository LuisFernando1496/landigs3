<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>Seguridad privada S3</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('doob/images/logo/logo_s3.png')}}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{asset('doob/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/feature.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/magnify.min.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/plugins/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('doob/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Top Area  -->

        <!-- End Header Top Area  -->
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{asset('doob/images/logo/logo_s3.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('doob/images/logo/logo_s3.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li class="with-megamenu has-menu-child-item position-relative"><a
                                            href="{{route('home')}}">Inicio</a></li>

                                    <li class="has-droupdown has-menu-child-item"><a href="#">Nuestro personal</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('personal')}}">Guardias</a></li>
                                            <!-- <li><a href="portfolio-three-column.html">Reclutamiento y confiabilidad</a>
                                            </li> -->

                                        </ul>
                                    </li>

                                    <li class="has-menu-child-item"><a href="{{route('servicios')}}">Servicios</a>
                                    </li>

                                    <li><a href="{{route('contacto')}}">Cotizar</a>
                                    </li>
                                    <li><a href="{{route('contacto')}}">Ubicanos</a></li>
                                </ul>


                            </nav>

                            <!-- Start Header Btn  -->
                            <!-- <div class="header-btn">
                                <a class="btn-default btn-small round" target="_blank"
                                    href="https://themeforest.net/checkout/from_item/34133466?license=regular">BUY
                                    NOW</a>
                            </div> -->
                            <!-- End Header Btn  -->

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="{{asset('doob/images/icons/sun-01.svg')}}"
                                                alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="{{asset('doob/images/icons/vector.svg')}}"
                                                alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{asset('doob/images/logo/logo_s3.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('doob/images/logo/logo_s3.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="position-relative"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="with-megamenu has-menu-child-item"><a href="#">Nuestro personal</a>
                        <div class="rainbow-megamenu">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="{{route('personal')}}">Guardias</a></li>
                                            <!-- <li><a href="service.html">Reclutamiento y confiabilidad</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a href="{{route('servicios')}}">Servicios</a>
                    </li>

                    <li><a href="{{route('contacto')}}">Cotizar</a></li>
                    <li><a href="{{route('contacto')}}">Ubicanos</a></li>
                </ul>







            </div>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->

       @yield('content')

        <!-- Start Footer Area  -->
        <!-- <footer class="rainbow-footer footer-style-default footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="logo">
                                    <a href="index.html">
                                        <img class="logo-light" src="{{asset('doob/images/logo/logo.png')}}" alt="Corporate Logo">
                                        <img class="logo-dark" src="{{asset('doob/images/logo/logo-dark.png')}}"
                                            alt="Corporate Logo">
                                    </a>
                                </div>
                                <h3 class="text-big">Create Website By Doob So Quick Download And Make Your Site.</h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                    <h4 class="title">Services</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="testimonial.html">Testiminial</a></li>
                                            <li><a href="index-company.html">Company</a></li>
                                            <li><a href="index-marketing-agency.html">Marketing</a></li>
                                            <li><a href="index-startup.html">Startup</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-menu-bottom">
                                    <h4 class="title">Products</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="service.html">Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                    <h4 class="title">Company</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="index-corporate.html">Corporate</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="index-seo-agency.html">SEO Agency</a></li>
                                            <li><a href="index-web-agency.html">Web Agency</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-menu-bottom">
                                    <h4 class="title">Solutions</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="service.html">Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Newsletter</h4>
                                <div class="inner">
                                    <h6 class="subtitle">2000+ Our clients are subscribe Around the World</h6>
                                    <form class="newsletter-form" action="#">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter Your Email Here">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn-default" type="submit">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <ul class="ft-menu link-hover">
                                <li>
                                    <a href="privacy-policy.html">Aviso de privacidad</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    @php
                    $year = Carbon\Carbon::now()->year;
                    @endphp
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">© Servicio de seguridad privada S3 {{$year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>
    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS


============================================ -->

    <script>
        function openVideoModal() {
            const videoUrl = "https://www.youtube.com/embed/EFj-gyzruHU?autoplay=1";
            document.getElementById('videoFrame').src = videoUrl;
            document.getElementById('videoModal').style.display = "flex";
        }

        function closeVideoModal() {
            document.getElementById('videoFrame').src = "";
            document.getElementById('videoModal').style.display = "none";
        }

    </script>

    <script src="{{asset('doob/js/vendor/modernizr.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/counterup.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/feather.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/sal.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/masonry.js')}}"></script>
    <script src="{{asset('doob/js/vendor/imageloaded.js')}}"></script>
    <script src="{{asset('doob/js/vendor/magnify.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/lightbox.js')}}"></script>
    <script src="{{asset('doob/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('doob/js/vendor/easypie.js')}}"></script>
    <script src="{{asset('doob/js/vendor/text-type.js')}}"></script>
    <script src="{{asset('doob/js/vendor/jquery.style.swicher.js')}}"></script>
    <script src="{{asset('doob/js/vendor/js.cookie.js')}}"></script>
    <script src="{{asset('doob/js/vendor/jquery-one-page-nav.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('doob/js/main.js')}}"></script>
</body>

</html>

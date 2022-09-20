<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>XB XSIS BERKARYA</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="portfolio_company/assets/images/faviconxb.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="portfolio_company/assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="portfolio_company/assets/images/logoxb.jpg" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="page-scroll" href="/">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/service">Services</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/portfolio">Portfolio</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/blog">Blog</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">My Services</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
                
            <div class="row justify-content-center">
                @foreach ($service as $service)
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <img src="/image/{{ $service->image }}" alt="" class="img-fluid" width="100">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">{{ $service->title }}</a></h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                @endforeach
            </div> <!-- row -->

                            {{-- <div class="service-content">
                                <h4 class="service-title"><a href="#">Web Design</a></h4>
                                <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                            </div>
                        </div> <!-- single service -->
                    </div>
            </div> <!-- row --> --}}
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="portfolio_company/assets/images/logoxb.jpg" alt="Logo">
                            </a>
                            <p class="mt-">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © 2022. Template Crafted by <a href="https://uideck.com" rel="nofollow">XSIS Berkarya</a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="portfolio_company/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="portfolio_company/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="portfolio_company/assets/js/bootstrap.min.js"></script>
    <script src="portfolio_company/assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="portfolio_company/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="portfolio_company/assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="portfolio_company/assets/js/waypoints.min.js"></script>
    <script src="portfolio_company/assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="portfolio_company/assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="portfolio_company/assets/js/scrolling-nav.js"></script>
    <script src="portfolio_company/assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="portfolio_company/assets/js/main.js"></script>

</body>

</html>

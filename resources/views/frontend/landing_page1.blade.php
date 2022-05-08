@php
use \App\Http\Controllers\HomeController;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructionproducts.ae</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link href="{{ static_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ static_asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ static_asset('assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ static_asset('assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ static_asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{ static_asset('assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ static_asset('assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ static_asset('assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ static_asset('assets/css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ static_asset('assets/css/magnific-popup.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ static_asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ static_asset('assets/css/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ static_asset('assets/css/footer.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ static_asset('assets/css/index.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ static_asset('assets/css/theme-color/default.css') }}" rel="stylesheet" type="text/css" id="theme-color" />

    <script type="text/javascript"  src="{{ static_asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript"  src="{{ static_asset('assets/js/tether.min.js') }}"></script>
    <script type="text/javascript"  src="{{ static_asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Easing Effect Js -->
    <script  src="{{ static_asset('assets/js/jquery.easing.js') }}" type="text/javascript"></script>

    <!-- fancybox Js -->
    <script  src="{{ static_asset('assets/js/jquery.mousewheel-3.0.6.pack.js') }}" type="text/javascript"></script>
    <script  src="{{ static_asset('assets/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <!-- carousel Js -->
    <script  src="{{ static_asset('assets/js/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- parallax Js -->
    <script  src="{{ static_asset('assets/js/jquery.parallax-1.1.3.js') }}" type="text/javascript"></script>

    <!-- parallax Js -->
    <script  src="{{ static_asset('assets/js/jquery.stellar.js') }}" type="text/javascript"></script>
    <!-- masonry,isotope Effect Js -->
    <script  src="{{ static_asset('assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script  src="{{ static_asset('assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script  src="{{ static_asset('assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script  src="{{ static_asset('assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <!-- popup -->
    <script  src="{{ static_asset('assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- custom Js -->
    <script  src="{{ static_asset('assets/js/custom.js') }}" type="text/javascript"></script>
    <script src="https://theembazaar.com/hosting_popup/js/hots_popup.js') }}') }}"></script>

    <!-- Global site tag (gtag.js') }}) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-119595512-1');
    </script>
     <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    

</head>
<body>
    <!--loader-->
    <div id="preloader">
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

    <!--loader-->
    <!-- HEADER -->
    <!-- HEADER -->
    <header id="header" class="header header-1 header_bg">
        <div id="top-bar" class="top-bar-section top-bar-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="top_loction pull-left">
                            <ul>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-map-marker"></i> Office 203 Post Box 9100<br>
                                        Hamdan Street Abu Dhabi – UAE
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@OwlConstruction.com"><i class="fa fa-envelope"></i> constructionproducts.ae@outlook.com</a>
                                </li>
                                <li>
                                    <a href="tel:1234567890"><i class="fa fa-phone"></i> +97152-9999-480</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="top-social-icon icons-hover-black">
                            <div class="icons-hover-black">
                                <a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a>
                                <a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a>
                                <a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a>
                                <a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a>
                                <a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="nav-wrap">
            <div class="reletiv_box1" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="javascript:avoid(0);">
                                    <img src="{{ static_asset('assets/images/logo3.png') }}" class="hidden-sm-down" alt="">
                                    <img  src="{{ static_asset('assets/images/logo3.png') }}" class="vissible-sm-down hidden-md-up" alt="">
                                </a>
                            </div>
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu hidden-md-up"></button>
                        </div>
                        <div class="col-md-9 nav-bg">
                            <nav class="navigation">
                                <ul>
                                    <li>
                                        <a href="javascript:avoid(0);" class="active">Home</a>

                                    </li>
                                    <li>
                                        <a href="https://constructionproducts.org/aboutus">About us</a>
                                    </li>
                                    <li>
                                        <a href="javascript:avoid(0);">services</a>

                                    </li>
                                    <!--	<li>
                                            <a href="javascript:avoid(0);">Categories</a><i class="fa fa-caret-down hidden-md-up"></i>
                                            <ul class="sub-nav">
                                                <li>
                                                    <a href="project.html">Category 1</a>
                                                </li>
                                                <li>
                                                    <a href="project-details.html">project-details</a>
                                                </li>

                                            </ul>
                                        </li>-->
                                    <li>
                                        <a href="javascript:avoid(0);">blog</a>

                                    </li>

                                    <li>
                                        <a href="https://constructionproducts.org/users/login">login</a>
                                    </li>




                                    <!--<li>
                                        <a href="javascript:avoid(0);">contact us</a>
                                    </li>-->

                                    <li>
                                        <a class="gotostoreTopMenu" href="https://constructionproducts.org/home">GO TO Store</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <!--  Main Banner Start Here-->
    <div class="banner_static">
        <div class="banner_content">
            <div class="banner_slide">
                <div class="slide_box">
                    <div>
                        <h1>Welcome to Our Company!</h1>
                        <p>
                           <b>Constructionproducts.ae</b> is a one stop shop where we connect you through our e-Commerce platform to purchase  Quality Products and Services  from Manufacturers, Distributors and Skilled Trade Companies.

                        </p>
                        <a href="https://constructionproducts.org/home" class="btn btn-text dark_btn mt-15">Purchase constructionproducts</a>
                    </div>
                </div>

                <div class="slide_box">
                    <div class="">
                       <h1>Welcome to Our Company!</h1>
                        <p>
                           <b>Constructionproducts.ae</b> is a one stop shop where we connect you through our e-Commerce platform to purchase  Quality Products and Services  from Manufacturers, Distributors and Skilled Trade Companies.

                        </p>
                        <a href="https://constructionproducts.org/home" class="btn btn-text dark_btn mt-15">Purchase constructionproducts</a>
                    </div>
                </div>
                <div class="slide_box">
                    <div class="">
                        <h1>Welcome to Our Company!</h1>
                        <p>
                           <b>Constructionproducts.ae</b> is a one stop shop where we connect you through our e-Commerce platform to purchase  Quality Products and Services  from Manufacturers, Distributors and Skilled Trade Companies.

                        </p>
                        <a href="https://constructionproducts.org/home" class="btn btn-text dark_btn mt-15">Purchase constructionproducts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Main Banner End Here-->
    <!-- about -->
    <section class="padding ptb-xs-40">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2>WHAT WE DO</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-xs-30">
                    <div class="about_comp">
                        <span><b>Constructionproducts.ae</b> help you to source Quality Products of major Brands faster and easier at your convenience 24/7.<br>We empower the Construction Industry with an opportunity to access Quality Products and Services as a one

stop shop through our E commerce Platform from Manufacturers, Distributors and Technical Applicators.

Our business model enables the customer to source Quality products faster and easier.</span>
                        <h3> Values </h3>
                        <p>
                         We strive to improve Customer experience with Integrity and Trust for our Customers, Suppliers, Partners and Employees.


                        </p>
                        <a hidden href="#!" class="btn btn-text bg_btn mt-15">About Company</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-sm-30 mb-xs-30">
                    <div class="about_box">
                        <figure>
                            <img  src="{{ static_asset('assets/images/about_2.jpg') }}" alt="" />
                        </figure>
                        <div class="about_col">
                            <h4>Management</h4>
                            <p>
                               We run our business on 3 core values: Quality Products, Market Experience and Passion for Customer Service.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-sm-30">
                    <div class="about_box">
                        <figure>
                            <img  src="{{ static_asset('assets/images/about_1.jpg') }}" alt="" />
                        </figure>
                        <div class="about_col">
                            <h4>Organisation</h4>
                            <p>
                               One E-commerce Platform, many Quality Brands, local Manufacturers, Distributors and Technical Applicators.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- about_End -->
    <!-- Counter Section -->
    <!-- Counter Section End-->
    <!-- Service -->
    <section id="service" class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2>Provide Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12 mb-30 mb-sm-30 mb-xs-30">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-1.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Construction Management</a></h3>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12 mb-60 mb-sm-30 mb-xs-30">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-2.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Reconstruction Services</a></h3>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12 mb-60 mb-sm-30 mb-xs-30">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-3.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Building Information</a></h3>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12 mb-sm-30 mb-xs-30">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-4.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Project Partnering</a></h3>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12 mb-xs-30">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-5.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Roofing & Flooring Services</a></h3>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box hvr-float">
                        <div class="image">
                            <img  src="{{ static_asset('assets/images/service/services-6.jpg') }}" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="#!">Program Management</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service End-->
    <!-- Project_sec
    <section class="we-best">
        <div class="booking-section">
            <div class="left-block bg-color d-flex align-items-center">
                <div class="treatment light-color">
                    <div class="project_slide">
                        <div class="project_item">
                            <div class="tital_projct">
                                <span>01</span>
                                <p>We create designs and technology</p>
                            </div>
                            <div class="project_ditail  text-center">
                                <h2>We provide high quality & cost effective services</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#!" class="btn btn-text bg_btn">Project Detail</a>
                            </div>
                        </div>

                        <div class="project_item">
                            <div class="tital_projct">
                                <span>02</span>
                                <p>We create designs and technology</p>
                            </div>
                            <div class="project_ditail  text-center">
                                <h2>We provide high quality & cost effective services</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#!" class="btn btn-text bg_btn">Project Detail</a>
                            </div>
                        </div>

                        <div class="project_item">
                            <div class="tital_projct">
                                <span>03</span>
                                <p>We create designs and technology</p>
                            </div>
                            <div class="project_ditail  text-center">
                                <h2>We provide high quality & cost effective services</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#!" class="btn btn-text bg_btn">Project Detail</a>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
            <div class="right-block bg-side"> </div>
        </div>
    </section>

    <section class="latest__block padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-sm-30 mb-xs-30">
                    <div class="img-scale">
                        <figure>
                            <img  src="{{ static_asset('assets/images/blog/home_blog-1.jpg') }}" alt="">
                        </figure>
                        <div class="latest__block-post">
                            <div class="meta-post">
                                Jan, 24th 2018
                            </div>
                            <h3 class="latest__block-title"><a href="blog-single.html">Better Nature For Better World</a></h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="flat-link flat-arrow sm  ">
                                <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-sm-30 mb-xs-30">
                    <div class="img-scale">
                        <figure>
                            <img  src="{{ static_asset('assets/images/blog/home_blog-2.jpg') }}" alt="">
                        </figure>
                        <div class="latest__block-post">
                            <div class="meta-post">
                                Jan, 24th 2018
                            </div>
                            <h3 class="latest__block-title"><a href="blog-single.html">Better Nature For Better World</a></h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="flat-link flat-arrow sm  ">
                                <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-scale">
                        <figure>
                            <img  src="{{ static_asset('assets/images/blog/home_blog-3.jpg') }}" alt="">
                        </figure>
                        <div class="latest__block-post">
                            <div class="meta-post">
                                Jan, 24th 2018
                            </div>
                            <h3 class="latest__block-title"><a href="blog-single.html">Better Nature For Better World</a></h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="flat-link flat-arrow sm  ">
                                <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-block__section padding ptb-xs-40">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2>Our Tetstimonial</h2>
                    </div>
                </div>
            </div>

            <div id="testimonial" class="nf-carousel-theme nf-carousel-arrow">
                <div class="testimonial-box row">
                    <div class="col-md-5">
                        <img  src="{{ static_asset('assets/images/testimonial/1.jpg') }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="quote-box">
                            <div class="quote-icon quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                            <div class="quote-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="quote-icon quote-right">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <strong class="quote-author">John Smith, Eng.</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box row">
                    <div class="col-md-5">
                        <img  src="{{ static_asset('assets/images/testimonial/2.jpg') }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="quote-box">
                            <div class="quote-icon quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                            <div class="quote-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="quote-icon quote-right">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <strong class="quote-author">John Smith, Eng.</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>-->
    <!--End Testimonial-->
    <!-- Project-->
    <section class=" padding ptb-xs-40 project_bg">
        <div class="container">
            <div class="row pb-50 pb-xs-15 pb-sm-30">
                <div class="col-lg-4">
                    <div class="sec-title mb-sm-30">
                        <h2>Our Project</h2>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-end">
                    <ul class="container-filter categories-filter">
                        <li>
                            <a class="categories active" data-filter="*">All Projects</a>
                        </li>
                        <li>
                            <a class="categories" data-filter=".branding">Office Building</a>
                        </li>
                        <li>
                            <a class="categories" data-filter=".design">Shopping Mall</a>
                        </li>
                        <li>
                            <a class="categories" data-filter=".photo">Private Estate</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="row container-grid nf-col-3">
                        <div class="nf-item branding design spacing">
                            <div class="item-box">
                                <a href="{{ static_asset('images/service/services-1.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-1.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Branding</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="nf-item photo design spacing">
                            <div class="item-box">
                                <a href="{{ static_asset('images/service/services-2.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-2.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Photo</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="nf-item branding photo spacing">
                            <div class="item-box">
                                <a href="{{ static_asset('images/service/services-3.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-3.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Branding</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="nf-item spacing branding">
                            <div class="item-box">
                                <a href="{{ static_asset('images/service/services-4.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-4.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Branding</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="nf-item branding spacing photo">
                            <div class="item-box">
                                <a href="{{ static_asset('images/service/services-5.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-5.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Branding</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="nf-item design spacing">
                            <div class="item-box">
                                <a href="assets/images/service/services-6.jpg') }}" class="popup-btn" data-fancybox-group="light"> <img alt="1"  src="{{ static_asset('assets/images/service/services-6.jpg') }}" class="item-container"> </a>

                                <div class="gallery-heading">
                                    <h4><a href="#">Branding</a></h4>
                                    <p>
                                        At vero eos et rebum
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Project End-->
    <!-- FOOTER -->
    <!-- Start Feedback -->
    <div>
        <a style="writing-mode: vertical-rl;text-orientation: upright;position: fixed;bottom: 50%;right: 0;background: #d9534f;padding: 15px;color: white;font-weight: bold;font-size: 17px;" href="https://constructionproducts.org/feedback/">FEEDBACK</a>
    </div>
    <!-- End Feedback -->

    <footer class="footer pt-80 pt-xs-60">
        <div class="container">
            <!--Footer Info -->
            <div class="row footer-info mb-60">
                <div class="col-lg-4 col-md-4 col-xs-12 mb-sm-30">
                    <h4 class="mb-30">contact Us</h4>
                    <address>
                        <i class="fa fa-map-marker fa-icons"></i> Office 203 Post Box 9100
                        Hamdan Street Abu Dhabi – UAE
                    </address>
                    <ul class="link-small">
                        <!--<li>
                            <a href="mailto:business@support.com"><i class="fa fa-envelope fa-icons"></i>constructionproducts.ae@outlook.com</a>
                        </li>-->
                        <li>
                            <a><i class="fa fa-phone fa-icons"></i>+97152-9999-480</a>
                        </li>
                    </ul>
                    <div class="icons-hover-black">
                        <a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-xs-12 mb-sm-30">
                    <h4 class="mb-30">Links</h4>
                    <ul class="link blog-link">
                        <li>
                            <a href="https://constructionproducts.org/aboutus"><i class="fa fa-angle-double-right"></i> About Us</a>
                        </li>
                        <li>
                            <a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Services</a>
                        </li>
                        <li>
                            <a href="https://constructionproducts.org/privacypolicy"><i class="fa fa-angle-double-right"></i> Privacy policy</a>
                        </li>
                        <li>
                            <a href="https://constructionproducts.org/terms"><i class="fa fa-angle-double-right"></i> Terms &amp; condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5 col-xs-12 mb-sm-30" hidden>
                    <h4 class="mb-30">Latest Blog</h4>
                    <div class="widget-details link">
                        <div class="post-type-post media">
                            <div class="entry-thumbnail media-left">
                                <img  src="{{ static_asset('assets/images/blog/blog-small-img2.jpg') }}" alt="Image">
                            </div>
                            <!-- /.entry-thumbnail -->
                            <div class="post-content media-body">
                                <p class="entry-title">
                                    <a href="javascript:avoid(0);">Ut enim ad minim veniam, quis nostrud exercitation</a>
                                </p>
                                <div class="post-meta">
                                    On
                                    <time datetime="2016-02-10">
                                        10 Feb, 2016
                                    </time>
                                </div>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <div class="post-type-post media">
                            <div class="entry-thumbnail media-left">
                                <img  src="{{ static_asset('assets/images/blog/blog-small-img1.jpg') }}" alt="Image">
                            </div>
                            <!-- /.entry-thumbnail -->
                            <div class="post-content media-body">
                                <p class="entry-title">
                                    <a href="javascript:avoid(0);">Ut enim ad minim veniam, quis nostrud exercitation</a>
                                </p>
                                <div class="post-meta">
                                    On
                                    <time datetime="2016-02-10">
                                        10 Feb, 2016
                                    </time>
                                </div>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-content -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30">
                    <div class="newsletter">
                        <h4 class="mb-30">Newsletter Signup</h4>
                        <p>
                            Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
                        </p>
                        <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                            <input type="hidden" name="_token" value="IeDKhPJCtK85ippNBE4LZgXA11yqZpuiT7ClHvXh">									<input type="email" class="form-control newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email" name="email">
                            <button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
                                <i class="fa fa-angle-right mr-0"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Footer Info -->
        </div>
        <!-- Copyright Bar -->
        <div class="copyright">
            <div class="container">
                <p class="">
                    &#169 2021 <a><b>constructionproducts.org</b></a>. All Rights Reserved.
                </p>
            </div>
        </div>
        <!-- End Copyright Bar -->
    </footer>
    <!-- END FOOTER -->

</body>
</html>


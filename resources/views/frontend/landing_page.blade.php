@php
use \App\Http\Controllers\HomeController;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ConstructionProducts.ae</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css Fils -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <link rel="shortcut icon" href="https://constructionproducts.org/public/uploads/all/ZLPnagfbqeGKCAig1eNlb2BCWQtOsff65fc072ax.png" type="image/x-icon">
 
    <link rel="stylesheet" href="{{ static_asset('assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/flaticon-34.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/jquery.mCustomScrollbar.min.css') }}">

    <link href="{{ static_asset('assets/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ static_asset('assets/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ static_asset('assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

    <link rel="stylesheet" href="{{ static_asset('assets/css/style-38.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/responsive-38.css') }}">
    
    <!-- Poppins / Roboto / Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Nunito+Sans:wght@300;400;600;700;800;900&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End Poppins / Roboto / Nunito-Sans / Fonts -->
     <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    @if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
 
     <style>
        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }
        :root{
            --primary: {{ get_setting('base_color', '#e62d04') }};
            --hov-primary: {{ get_setting('base_hov_color', '#c52907') }};
            --soft-primary: {{ hex2rgba(get_setting('base_color','#e62d04'),.15) }};
        }

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
        .category-menu-icon-box{display:none !important;}
    </style>
@php
    echo get_setting('header_script');
@endphp
 <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>
   
</head>

<body>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Preloader
        <div class="preloader"></div> -->
        <!-- End Preloader -->
        <!-- Consultio Header Style -->
        <header class="main-header onepager-header">
           @include('frontend.inc.nav')

        </header>
        <!-- End Consultio Header Style -->
     
        <!-- Author Slider Section -->
        <section class="author-slider-section" id="home">

            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial owl owl-theme">

                <!-- Author Slider Block -->
                <div class="author-slider-block" style="background-image:url('../public/assets/img/consult-3/main-slider/image-1.jpg')">
                    <div class="auto-container">
                        <div class="inner-box">
                            <h1>Welcome to <br> Constructionproducts</h1>
                            <div class="text">
                                This is a one stop shop where we connect you through our e-Commerce platform to purchase  Quality Products and Services  from Manufacturers, Distributors and Skilled Trade Companies.

                            </div>
                            <a class="theme-btn btn-style-one" href="https://constructionproducts.org/home" target="_blank" style="padding:15px;border-radius: 5px;background-color: #d9534f !important;"><span class="txt">Go to Store</span></a>
                        </div>
                    </div>
                </div>



            </div>

            <!-- Product Thumbs Carousel -->

        </section>
        <!-- End Author Slider Section -->
        <!-- Services Section -->
        <section class="services-section" id="services">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="sec-title-inner">
                        <div class="title">
                            <!-- Circles Box -->
                            <div class="circles-box">
                                <span class="circle"></span>
                                <span class="circle"></span>
                                <span class="circle"></span>
                            </div>
                            What We Do?
                        </div>
                        <h2>We've many services to <br> solve your problems.</h2>
                        <div class="text">Constructionproducts.ae help you to source Quality Products of major Brands <br>  faster and easier at your convenience 24/7.</div>
                    </div>
                </div>
                <!-- End Sec Title -->

                <div class="services-carousel owl-carousel owl-theme">

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="color-layer" style="background-image:url('../public/assets/img/consult-3/background/pattern-1.png')"></div>
                            <div class="icon-one" style="background-image:url('../public/assets/img/consult-3/icons/arrow-1.png')"></div>
                            <span class="icon flaticon-idea-1 "></span>
                            <h4>Values</h4>
                            <div class="text">We strive to improve Customer experience with Integrity and Trust for our Customers, Suppliers, Partners and Employees.</div>


                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="color-layer" style="background-image:url('../public/assets/img/consult-3/background/pattern-1.png')"></div>
                            <div class="icon-one" style="background-image:url('../public/assets/img/consult-3/icons/arrow-1.png')"></div>
                            <span class="icon flaticon-web-analysis"></span>
                            <h4>Management</h4>
                            <div class="text">We run our business on 3 core values: Quality Products, Market Experience and Passion for Customer Service.</div>

                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="color-layer" style="background-image:url('../public/assets/img/consult-3/background/pattern-1.png')"></div>
                            <div class="icon-one" style="background-image:url('../public/assets/img/consult-3/icons/arrow-1.png')"></div>
                            <span class="icon flaticon-friend"></span>
                            <h4>Organisation</h4>
                            <div class="text">One E-commerce Platform, many Quality Brands, local Manufacturers, Distributors and Technical Applicators.</div>



                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Services Section -->
        <!-- About Section -->
        <section class="about-section" id="about">
            <div class="pattern-layer-one" style=""></div>
            <div class="auto-container">

                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title-inner">
                                    <div class="title">
                                        <!-- Circles Box -->
                                        <div class="circles-box">
                                            <span class="circle"></span>
                                            <span class="circle"></span>
                                            <span class="circle"></span>
                                        </div>
                                        About Our Company
                                    </div>
                                    <h2>Made to measure: <br> Getting design <br>leadership.</h2>
                                    <div class="text">We empower the Construction Industry with an opportunity to access Quality Products and Services as a one stop shop through our E commerce Platform from Manufacturers, Distributors and Technical Applicators. Our business model enables the customer to source Quality products faster and easier. </div>
                                </div>
                            </div>
                            <!-- End Sec Title -->
                            <div class="btn-box">
                                <a class="theme-btn btn-style-one" href="https://constructionproducts.org/home"><span class="txt"><i class="flaticon-space-rocket-launch"></i> Go to Store</span></a>
                            </div>
                            <ul class="consultio-list">
                                <li><span>We </span>help to choose the right product</li>
                                <li>Quality Assured</li>
                                <li>On time delivery & post sales support from Authorized Sellers</li>
                                <li>Compare different products</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="pattern-layer-two"></div>
                        <div class="inner-column">
                            <div class="color-layer"></div>
                            <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{ static_asset('assets/img/consult-3/resource/about.jpg') }}" alt="" />
                                <div class="pattern-layer" style="background-image:url("{{ asset('assets/img/consult-3/background/pattern-3.png') }}")"></div>
                            </div>

                            <!-- Experiance Box -->
                            <div class="experiance-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h4>TRANSPARENCY <br> Leads to TRUST</h4>
                                <div class="text">Customers should be empowered to choose the right products and services.</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- Clients Section -->
        <section class="clients-section" id="clients" style="margin-top: -120px;">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="sec-title-inner">
                        <div class="title">
                            <!-- Circles Box -->
                            <div class="circles-box">
                                <span class="circle"></span>
                                <span class="circle"></span>
                                <span class="circle"></span>
                            </div>

                        </div>
                        <h2>Increase your Business<br>Become a Seller</h2>
                        <div class="text">We provide an opportunity for businesses to market their products & solutions in specific categories and locations of UAE </div>
                    </div>
                </div>
                <!-- End Sec Title -->



            </div>
        </section>
        <!-- End Clients Section -->
        <!-- Support Section -->
        <section class="support-section" style="background-image:url('../public/assets/img/consult-3/background/1.jpg');margin-top:-60px">
            <div class="auto-container">
                <div class="content-box">
                    <div class="color-layer" style=""></div>
                    <div class="box-inner">
                        <div class="available">
                            Get the right
                            <span>Customers</span>
                        </div>
                        <div class="call-title">Connect with</div>
                        <a class="phone" href="#">people looking for your products</a>
                        <a class="chat-btn theme-btn" href="https://constructionproducts.org/shops/create"> <strong>Connect Your Business</strong> </a>
                        <div class="support">with us</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Support Section -->
        <!-- Steps Section -->
        <section class="steps-section" style="margin-bottom: -77px;">
            <div class="pattern-layer"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title-inner">
                        <div class="title">
                            <!-- Circles Box -->
                            <div class="circles-box">
                                <span class="circle"></span>
                                <span class="circle"></span>
                                <span class="circle"></span>
                            </div>
                            Steps to start
                        </div>
                        <h2>Some easy steps <br> to get started!</h2>
                    </div>
                </div>
                <!-- End Sec Title -->

                <div class="row clearfix">

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="step-number">1</div>
                            <div class="icon"><img src="{{ static_asset('assets/img/consult-3/icons/step-1.png')}}" alt="" /></div>
                            <h5>Create an account in our website, it's fast & free!!!</h5>
                            <div class="text">Next, click on <b>CONNECT YOUR BUSINESS </b> </div>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="step-number">2</div>
                            <div class="icon"><img src="{{ static_asset('assets/img/consult-3/icons/step-2.png')}}" alt="" /></div>
                            <h5>Review the different package options and select the desired package!!!</h5>
                            <div class="text">Once choosen the appropriate package (Silver,Gold,Diamond or Platinum), upload the necessary documents in order to finish the process and complete the payment details </div>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="step-number">3</div>
                            <div class="icon"><img src="{{ static_asset('assets/img/consult-3/icons/step-3.png')}}" alt="" /></div>
                            <h5>We will verify your account and confirm for you to start selling!!! </h5>
                            <div class="text">You can then manage your profile by uploading necessary products and start connecting with your customers </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Steps Section -->
        <!-- Pricing Section -->
        <section class="pricing-section" id="pricing">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="sec-title-inner">
                        <div class="title">
                            <!-- Circles Box -->
                            <div class="circles-box">
                                <span class="circle"></span>
                                <span class="circle"></span>
                                <span class="circle"></span>
                            </div>
                            SELLER PACKAGES
                        </div>
                        <h2>We have offered the best <br> pricing for you.</h2>
                       <div class="icon"> <img class="packagelist" src="{{ static_asset('assets/img/Mockup_packages_headonly.jpg')}}" alt="" /></div>
                        <div class="text">You have the option to sell at set prices or discounts based on quantity or to give the choice for the customer to negotiate directly. <br> You can have the full control over enquiry, negotiation, payment terms and delivery options, in a way that best suits your business needs.</div>
                    </div>
                </div>
                <!-- End Sec Title -->

                <div class="pricing-tabs tabs-box" style="margin-top:-30px;">

                    <!-- Discount -->
                    <div class="discount">** Get a huge discount for annual package!</div>
                    <!-- End Discount -->
                    <!-- Tabs Container -->
                   
                    <!--Tab Btns-->
                    <div class="inner-box">
                        <a class="theme-btn btn-style-one pricingbtncenter" href="https://constructionproducts.org/shops/create" style="padding:15px;border-radius: 5px;background-color: #d9534f !important;"><span class="txt">CONNECT YOUR BUSINESS</span></a>

</div>
                    </div>

                </div>
        </section>
        <!-- End Pricing Section -->
        <!-- Map Section -->
        <!-- <section class="contact-map-section">
     <div class="auto-container">
         <div class="clearfix">
             <div class="map-content-box">
                 <div class="title-box">
                     <div class="title-inner">
                         <span class="globe-icon flaticon-tourism"></span>
                         <h6>Office Locations</h6>
                     </div>
                 </div>
                 <div class="title-text">We have many brunches to help you!</div> -->
        <!-- Accordion Box -->
        <!--<ul class="accordion-box-two">-->
        <!-- Block -->
        <!--<li class="accordion block">
        <div class="acc-btn">Australia Head Office <div class="arrow-icon fa fa-angle-right"></div></div>
        <div class="acc-content">
            <div class="content">
                <ul class="contact-list">
                    <li><span class="icon fa fa-map"></span> 30 Commercial Road, Australia</li>
                    <li><span class="icon fa fa-envelope"></span> <a href="mailto:envato@mail.com">envato@mail.com</a></li>
                    <li><span class="icon fa fa-phone"></span> <a href="tel:+1-888-452-1505">1-888-452-1505</a></li>
                </ul>
            </div>
        </div>
    </li> -->
        <!-- Block -->
        <!--<li class="accordion block">
        <div class="acc-btn">America Office <div class="arrow-icon fa fa-angle-right"></div></div>
        <div class="acc-content">
            <div class="content">
                <ul class="contact-list">
                    <li><span class="icon fa fa-map"></span> 30 Commercial Road, Australia</li>
                    <li><span class="icon fa fa-envelope"></span> <a href="mailto:envato@mail.com">envato@mail.com</a></li>
                    <li><span class="icon fa fa-phone"></span> <a href="tel:+1-888-452-1505">1-888-452-1505</a></li>
                </ul>
            </div>
        </div>
    </li> -->
        <!-- Block -->
        <!--<li class="accordion block active-block">
                        <div class="acc-btn active">UK Office <div class="arrow-icon fa fa-angle-right"></div></div>
                        <div class="acc-content current">
                            <div class="content">
                                <ul class="contact-list">
                                    <li><span class="icon fa fa-map"></span> 30 Commercial Road, Australia</li>
                                    <li><span class="icon fa fa-envelope"></span> <a href="mailto:envato@mail.com">envato@mail.com</a></li>
                                    <li><span class="icon fa fa-phone"></span> <a href="tel:+1-888-452-1505">1-888-452-1505</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </div> -->
        <!-- <div class="outer-container"> -->
        <!-- Map Boxed -->
        <!-- <div class="map-boxed">-->
        <!--Map Outer-->
        <!--  <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
            </div>
        </div>
    </div> 
        </section>
        <!-- End Map Section -->
        <footer class="main-footer" style="background-image:url('../public/assets/img/consult-3/background/pattern-14.png')">
            <div class="auto-container">
                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Big Column -->
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="{{ static_asset('assets/img/consult-3/logo.png')}}" alt="" /></a>
                                        </div>

                                        <div class=" text">constructionproducts.ae help you to source Quality Products of major Brands faster and easier at your convenience 24/7</div>
                                        <ul class="contact-list">
                                            <li hidden><span class="icon fa fa-phone"></span> <a href="tel:+1-888-452-1505">+971 52-9999-480</a></li>
                                            <li><span class="icon fa fa-envelope"></span> <a href="mailto:envato@mail.com">constructionproducts.ae@outlook.com</a></li>
                                            <li><span class="icon fa fa-map"></span>Post Box 9100, Office 216, Plot No 29,Ali Bin Khalfan Building, Umm Al Nar,  Abu Dhabi – UAE</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Column -->
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12 ">
                                    <div class="pull-left">
                                        <div class="footer-widget links-widget">
                                            <h5>Quick Links</h5>
                                            <ul class="list-link">
                                                <li><span class="icon fa fa-arrow"></span><a href="https://constructionproducts.org/technicalquery">Technical Query</a></li>
                                                <li><a href="https://constructionproducts.org/applicators">Find Applicators/Skilled Traders</a></li>
                                                <li><a href="https://constructionproducts.org/blog">Blog/News Room</a></li>
                                                <li><a href="https://constructionproducts.org/faq">FAQ</a></li>
                                                <!--<li><a href="#">News</a></li>-->
                                                <!--<li><a href="#">Contact</a></li>-->
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <!-- Footer Column -->
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12 ">
                                    <div class="pull-left">
                                        <div class="footer-widget links-widget">
                                            <h5>Legal</h5>
                                            <ul class="list-link">

                                                <li><a href="https://constructionproducts.org/terms">Terms & Conditions</a></li>
                                                <li><a href="https://constructionproducts.org/privacypolicy">Privacy Policy</a></li>
                                                <li><a href="https://constructionproducts.org/supportpolicy">Support Policy</a></li>
                                                <li><a href="https://constructionproducts.org/returnpolicy">Return Policy</a></li>
                                                <!--<li><a href="#">News</a></li>-->
                                                <!--<li><a href="#">Contact</a></li>-->
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                      

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="clearfix">
                        <div class="">
                            <div class="copyright">&copy; copyright © 2022 constructionproducts.ae</div>
                        </div>
                        <div class="pull-right" hidden>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fab fa-facebook-f"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-dribbble"></a></li>
                                <li><a href="#" class="fab fa-behance"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       

    </div>
    <!-- End Page Wrapper -->
    <!-- For Js Library -->
    <script src="{{ static_asset('assets/js/jquery.js') }}"></script>
    <script src="{{ static_asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ static_asset('assets/js/appear.js') }}"></script>
    <script src="{{ static_asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ static_asset('assets/js/owl-2.js') }}"></script>
    <script src="{{ static_asset('assets/js/pagenav.js') }}"></script>
    <script src="{{ static_asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ static_asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ static_asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ static_asset('assets/plugins/revolution/js/main-slider-script.js') }}"></script>
    <!-- For Js Library -->

    <script src="{{ static_asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ static_asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ static_asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ static_asset('assets/js/scripts-38.js') }}"></script>
    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>
    <script src="{{ static_asset('assets/js/nav_script.js') }}"></script>
    <script>

        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function(){
            search();
        });

        $('#search').on('focus', function(){
            search();
        });

        function search(){
            var searchKey = $('#search').val();
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key){
            $.post('{{ route('cart.removeFromCart') }}', {
                _token  : AIZ.data.csrf,
                id      :  key
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "{{ translate('Item has been removed from cart') }}");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }

        function addToCompare(id){
            $.post('{{ route('compare.addToCompare') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('#compare').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to compare list') }}");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }

        function addToWishList(id){
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        AIZ.plugins.notify('success', "{{ translate('Item has been added to wishlist') }}");
                    }
                    else{
                        AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
                    }
                });
            @else
                AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
            @endif
        }

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });

        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                   type:"POST",
                   url: '{{ route('products.variant_price') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){

                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if($(this).data('variation') && data.variation == $(this).data('variation')){
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                       $('#option-choice-form #chosen_price_div').removeClass('d-none');
                       $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                       $('#available-quantity').html(data.quantity);
                       $('.input-number').prop('max', data.max_limit);
                       if(parseInt(data.in_stock) == 0 && data.digital  == 0){
                           $('.buy-now').addClass('d-none');
                           $('.add-to-cart').addClass('d-none');
                           $('.out-of-stock').removeClass('d-none');
                       }
                       else{
                           $('.buy-now').removeClass('d-none');
                           $('.add-to-cart').removeClass('d-none');
                           $('.out-of-stock').addClass('d-none');
                       }
                   }
               });
            }
        }

        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                  names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                  count++;
            });

            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }

            return false;
        }

        function addToCart(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){

                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data.modal_view);
                       AIZ.extra.plusMinus();
                       updateNavCart(data.nav_cart_view,data.cart_count);
                    }
                });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function buyNow(){
            if(checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: '{{ route('cart.addToCart') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       if(data.status == 1){

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view,data.cart_count);

                            window.location.replace("{{ route('cart') }}");
                       }
                       else{
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                       }
                   }
               });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function show_purchase_history_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }


    </script>

</body>
</html>
<?php

include 'connection.php';
session_start();
$admin_id = $_SESSION['user_name'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlyNext</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- odometer css link -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- aos.css -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <div class="page-wrapper">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="preloader">
            <svg class="svg-loader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
                <path class="loader__path"
                    d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z"
                    fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                    stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />
                <path class="loader__plane"
                    d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z"
                    fill="#000033" /></svg>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <?php include 'header.php' ?>


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-section inner-banner-section bg-overlay-black bg_img"
            data-background="assets/images/bg/inner-bg.png">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12 text-center">
                        <div class="banner-content">
                            <h1 class="title">Contact Us</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <a href="#" class="scrollToTop">
            <i class="las la-dot-circle"></i>
            <span>Top</span>
        </a>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Contact
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="contact-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd"
                                style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="contact-widget">
                            <div class="contact-form-header">
                                <span class="sub-title">Luxury Charters</span>
                                <h2 class="title">How to Contact with Us?</h2>
                                <p>The first small jet-powered civil aircraft was the Morane-Saulnier MS.760 Paris,
                                    developed privately in the early 1950s from the MS.755 </p>
                            </div>
                            <ul class="contact-item-list">
                                <li>
                                    <a href="#0">
                                        <div class="contact-item-icon">
                                            <i class="icon-location-icon"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Location</h4>
                                            <p>963 heloe Ua-Torrento, CA 95448</p>
                                            <p class="text--base font-weight-bold">Find Us On google Map <span
                                                    class="ml-1"><img src="assets/images/element/element-20.png"
                                                        alt="element"></span></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Phone</h4>
                                            <p>+1 814 929 4263</p>
                                            <span class="sub-title">+1 814 929 4264</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Email</h4>
                                            <p><span class="__cf_email__" data-cfemail="fe9d91908a9f9d8abe989287909b868ad09d9193">[email&#160;protected]</span></p>
                                            <p><span class="__cf_email__" data-cfemail="ef8c80819b8e8c9bdfdeaf898396818a979bc18c8082">[email&#160;protected]</span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Contact
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Contact
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="contact-section bg--gray ptb-120">
            <div class="contact-element">
                <img src="assets/images/element/element-18.png" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-5 col-lg-5 mb-30">
                        <div class="contact-left-content" data-aos="fade-right" data-aos-duration="1200">
                            <span class="sub-title">Talk to us</span>
                            <h2 class="title">Any Question?
                                Fell Free to
                                Contact</h2>
                            <p>With a vast array of popular private planes to choose from, travelling by private jet
                                charter is the most efficient</p>
                            <ul class="contact-social">
                                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="contact-form-inner" data-aos="fade-left" data-aos-duration="1200">
                            <div class="contact-form-area">
                                <form class="contact-form">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-name_icone"></i></label>
                                            <input type="text" class="form--control" name="name" placeholder="Name"
                                                required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="las la-envelope"></i></label>
                                            <input type="email" class="form--control" name="email" placeholder="Email"
                                                required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-call_icone"></i></label>
                                            <input type="number" class="form--control" name="phone" placeholder="Phone"
                                                required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="contact-select">
                                                <select class="form--control">
                                                    <option value="1">Subject</option>
                                                    <option value="2">Subject one</option>
                                                    <option value="3">Subject two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="icon"><i class="icon-massage"></i></label>
                                            <textarea class="form--control" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn--base mt-10">Submit Now <i
                                                    class="icon-Group-2361 ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Contact
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="footer-section section--bg pt-120">
            <div class="footer-element" data-aos="fade-left" data-aos-duration="1200">
                <img src="assets/images/element/element-1.png" alt="element">
            </div>
            <div class="container">
                <div class="footer-top-area">
                    <div class="row align-items-end mb-30-none">
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a class="site-logo site-title" href="index.html"><img src="assets/images/logo.png"
                                            alt="site-logo"></a>
                                </div>
                                <p>Flynext was founded in 1991 by a group of safety-focused professionals who created
                                    The Wingman Standard for rigorously vetting air charter operators.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">EUROPE</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">Europe 45 Gloucester Road</a></li>
                                    <li><a href="#0">London DT1M 3BF</a></li>
                                    <li><a href="#0">+44 (0)20 3671 5709</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">ASIA & PACIFIC</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">2473 Red Road Ste 98</a></li>
                                    <li><a href="#0">Singapore SG</a></li>
                                    <li><a href="#0">+ 1 623 211 6319</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">NORTH AMERICA</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">Europe 45 Gloucester Road</a></li>
                                    <li><a href="#0">London DT1M 3BF</a></li>
                                    <li><a href="#0">+44 (0)20 3671 5709</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Get started</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">Private jet</a></li>
                                    <li><a href="#0">Register</a></li>
                                    <li><a href="#0">Current Jet Deals</a></li>
                                    <li><a href="#0">Flynext mobile app</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">How it works</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">How it works</a></li>
                                    <li><a href="#0">Ways to fly</a></li>
                                    <li><a href="#0">Ways to buy</a></li>
                                    <li><a href="#0">Private charter</a></li>
                                    <li><a href="#0">Private Jet Cost</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">About us</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">About us</a></li>
                                    <li><a href="#0">News & press</a></li>
                                    <li><a href="#0">Blog</a></li>
                                    <li><a href="#0">FAQs</a></li>
                                    <li><a href="#0">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Newsletter</h4>
                                <p>Flynext was founded in 1991 by a group of safety-focused professionals erators.</p>
                                <form class="subscribe-form">
                                    <label class="subscribe-icon"><i class="las la-envelope"></i></label>
                                    <input type="email" class="form--control" placeholder="Enter Email">
                                    <button type="submit" class="btn--base">Subscribe Us <i
                                            class="icon-btn-icon ml-1"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="social-area">
                        <ul class="footer-social">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <p>© 2022 Fly Next Airlines. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>




    <!-- jquery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- swipper js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- lightcase js-->
    <script src="assets/js/lightcase.js"></script>
    <!-- odometer js -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="assets/js/viewport.jquery.js"></script>
    <!-- progress js -->
    <script src="assets/js/circle-progress.min.js"></script>
    <!-- aos js file -->
    <script src="assets/js/aos.js"></script>
    <!-- nice select js -->
    <script src="assets/js/jquery.nice-select.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>


</body>


</html>
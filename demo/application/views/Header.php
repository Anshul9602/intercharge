<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ChargeSol</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
    <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script src="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
  "></script>
    <link href="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
  " rel="stylesheet">
    <style>
        .aside-btn {
            background-color: #17a398 !important;
            color: #fff !important;
        }

        @media screen and (max-width: 768px) {
            .section {
                padding: 20px 0 !important;
            }

            #header {
                height: auto !important;
                padding: 10px 0;
            }

            #header .logo img {
                max-width: 130px !important;
            }

            .mobile-nav-show {
                color: #17a398;
            }

            .mar {
                margin-left: 0px;
                margin-right: 0px;
            }

            .mmc {
                text-align: center !important;
                margin-top: 10px !important;
            }
            .container{
            width: 95% !important;
            margin: auto !important;
            }
            .splide__arrow--next {
                right: -1em !important;
            }
            .splide__arrow--prev {
                left: -1em !important;
            }
        }
    </style>
</head>

<body>


    <!-- ======= Header ======= -->
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center addclass nav-down" style="width: 100%;">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" style="max-width:250px;" alt="">
                <!-- <h1>ChargeSol<span>.</span></h1>  -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>

                    <li class="dropdown"><a href="#">Product <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('CPMS'); ?>">CPMS</a></li>
                            <li><a href="<?php echo base_url('App'); ?>">App</a></li>
                            <li><a href="<?php echo base_url('FM'); ?>">FM SaaS</a> </li>


                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Partner<i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('Fleet_Operators'); ?>">Fleet</a></li>
                            <li><a href="<?php echo base_url('Automakers'); ?>">Automaker</a></li>

                            <li><a href="<?php echo base_url('Cpo'); ?>">CPO</a> </li>
                            <li><a href="<?php echo base_url('Host'); ?>">Host</a> </li>
                            <li><a href="<?php echo base_url('Partners'); ?>">Businesses</a></li>

                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('Consulting'); ?>">Consulting</a></li>
                    <li><a href="<?php echo base_url('Chargeshare'); ?>">ChargeShare</a></li>
                    <li class="dropdown "><a href="<?php echo base_url('Mission'); ?>">About Us <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('Mission'); ?>">Mission & Vision </a></li>
                            <li><a href="<?php echo base_url('Partners'); ?>">Partners</a></li>

                            <li><a href="<?php echo base_url('Fleet_Operators'); ?>">Sustainability</a>
                            </li>

                        </ul>
                    </li>


                    <li><a href="<?php echo base_url('Contact'); ?>">Lets Connect</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
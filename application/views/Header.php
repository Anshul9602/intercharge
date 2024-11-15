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
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center addclass nav-down">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo2.png" style="max-width:250px;" alt="">
                <!-- <h1>ChargeSol<span>.</span></h1>  -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="dropdown"><a href="#">Solutions <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('Cpo'); ?>">ChargeSol for CPOs</a></li>
                            <li><a href="<?php echo base_url('OEMs'); ?>">ChargeSol OEMs</a></li>

                            <li><a href="<?php echo base_url('Fleet_Operators'); ?>">ChargeSol for Fleet Operators</a>
                            </li>
                            <li><a href="<?php echo base_url('Other'); ?>">Other Businesses</a></li>

                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Company</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>

                            <li><a href="<?php echo base_url('About_Us'); ?>"><span>About Us</span> </a>
                            </li>

                            <li><a href="<?php echo base_url('Career'); ?>">Career</a></li>


                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('Contact1'); ?>">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
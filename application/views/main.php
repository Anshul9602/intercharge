<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
  .header {
    background-color: transparent;
    position: absolute;
  }

  .navbar a,
  .navbar a:focus {
    color: #fff;
  }

  .first1 {
    opacity: 0;
    width: 0%;
    transition: 1s;
  }

  .show1 {

    width: 100%;
    opacity: 1;

  }

  .first2 {
    opacity: 0;
    width: 0%;
    transition: 1s;
  }

  .show2 {

    width: 100%;
    opacity: 1;

  }

  .first3 {
    opacity: 0;
    width: 0%;
    transition: 1s;
  }

  .show3 {

    width: 100%;
    opacity: 1;

  }

  .first4 {
    opacity: 0;
    width: 0%;
    transition: 1s;
  }

  .show4 {

    width: 100%;
    opacity: 1;

  }

  .mpb11 {
    display: none;
  }

  @media screen and (max-width: 768px) {
    .mpb11 {
      display: block;
    }

    .desk {
      display: none;
    }

    .h1f {
      font-size: 18px !important;
    }

    .fusion-title-heading {
      line-height: 20px !important;
      font-size: 13px !important;
    }

    .fusion-title-heading span {
      line-height: 20px !important;
      font-size: 13px !important;
    }

    #about .container {

      padding: 0 30px !important;
    }

  }

  .co {
    height: 90vh;
    position: relative;
  }

  .bold {
    font-weight: 600;
    color: #013220;
  }

  .auth {
    color: #203635;
    font-weight: 600;
  }

  .splide__arrow--prev {
    left: -3em;
  }

  .splide__arrow--next {
    right: -2em;
  }

  .why p {
    font-size: 15px;
  }
</style>

<main id="main">
  <section class="top p-0">
    <div style="position: relative;">
      <!-- Video Overlay -->
      <div style=" top: 0; left: 0; width: 100%; height:90vh; z-index: 1;    background: black;">
        <video id="backgroundVideo" width="100%" height="100%" muted autoplay loop preload="auto"
          style="object-fit: cover;    opacity: 0.5;">
          <source src="assets/img/Homepage.mp4" type="video/mp4">
        </video>
      </div>

      <!-- Centered Text Overlay -->
      <div
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; z-index: 2;">

        <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
          style="margin: 0; font-size: 1.5em;  line-height: 1.2;">
          <span style="letter-spacing: 2px; line-height: 36px;"> Get Started with the widest eRoaming network that will
            change</span>
        </h3>
        <h1 class="h1f mt-md-3 mt-3" style="margin: 0; font-size: 4em; --fontSize: 26; ">The way you charge your EV
          on-the-go! </h1>
      </div>

      <!-- Additional Centered Text After Video -->

    </div>

  </section>

  <section class=" wf-section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6">
          <h3 style="color: #013220;font-weight:600;">1035+</h3>
          <p>Companies connected to our platform

          </p>
        </div>
        <div class="col-md-3 col-6">
          <h3 style="color: #013220;font-weight:600;">10m+</h3>
          <p>EV drivers reached globally

          </p>
        </div>
        <div class="col-md-3 col-6">
          <h3 style="color: #013220;font-weight:600;">36m+</h3>
          <p>Charging transations every year

          </p>
        </div>
        <div class="col-md-3 col-6">
          <h3 style="color: #013220;font-weight:600;">400k+</h3>
          <p>Charging transations every year

          </p>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* Add your existing styles here */

    /* Add a class to make the section sticky */
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    /* Add classes for opacity transitions */
    .co1,
    .co2,
    .co3,
    .co4 {
      transition: opacity 3s ease;
      max-width: 100%;
      height: 100%;
    }
  </style>
  <!-- ======= Scroll Sections ======= -->
  <div class="desk" style="height: 1900px;    background-color: #afcbbb;">
    <section id="scro1" class="m-0 p-0 scro">
      <div class="charging-section wf-section pt-0" style="padding-bottom: 60px;" id="pinn">
        <div class="container co">
          <div class="row _w-1029px co1" style="position: absolute;">
            <div class=" charging-text-wrapper flex-column align-items-center justify-content-center ">
              <div class="col-12 mt-3 mb-3">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  The Current eMobility market<span class="teal"> is highly fragmented</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3">
                <p class="p text-center">
                  The EV market's fragmentation, with various Charge Point Operators (CPOs) providing their charging options, complicates consumer navigation. This multitude of choices leads to confusion, making journey planning and access to charging infrastructure challenging. Simplifying this experience is essential for boosting user adoption and satisfaction in the electric vehicle ecosystem
                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px co2" data-aos-anchor-placement="top-center" style="opacity: 0;position: absolute;">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  Need for <span class="teal">open collaboration</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3">
                <p class="p text-center">
                  With the increasing number of charge point operators each year, the eMobility market becomes more fragmented and complex. Without an open eRoaming network, navigating this landscape becomes challenging. Open collaboration is crucial for simplifying the market and ensuring seamless access to charging infrastructure for all users

                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px co3" data-aos-anchor-placement="top-center" style="opacity: 0;position: absolute;">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  Uniting the <span class="teal">EV charging market </span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3">
                <p class="p text-center">
                  ChargeSol offers EV drivers across India a seamless charging experience by bringing market players together into a consolidated and open eRoaming network
                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px co4" data-aos-anchor-placement="top-center" style="opacity: 0;position: absolute;">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  The Network <span class="teal">Effect</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3">
                <p class="p text-center">
                  Envision every charger and EV owner seamlessly connected on a single platform. With just one application download, users gain access to all. No more hesitation before purchasing a vehicle or developing charging infrastructure. With the largest user base of 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="scroup"></div>
  </div>
  <!-- ======= Scroll Sections ======= -->
  <section class="m-0 p-0 mpb11">
    <div class="charging-section wf-section " style=" padding-bottom: 60px;" id="pinn">
      <div>
        <div class="container ">
          <div class="row _w-1029px " style="margin-bottom:60px;">
            <div class=" charging-text-wrapper flex-column align-items-center justify-content-center ">
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  The Current eMobility market<span class="teal"> is highly fragmented</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <p class="p text-center">
                  The EV market's fragmentation, with various Charge Point Operators (CPOs) providing their charging options, complicates consumer navigation. This multitude of choices leads to confusion, making journey planning and access to charging infrastructure challenging. Simplifying this experience is essential for boosting user adoption and satisfaction in the electric vehicle ecosystem
                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px " data-aos-anchor-placement="top-center" style="margin-bottom:60px;">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  Need for <span class="teal">open collaboration</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <p class="p text-center">
                  With the increasing number of charge point operators each year, the eMobility market becomes more fragmented and complex. Without an open eRoaming network, navigating this landscape becomes challenging. Open collaboration is crucial for simplifying the market and ensuring seamless access to charging infrastructure for all users

                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px " data-aos-anchor-placement="top-center" style="margin-bottom:60px;">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  Uniting the <span class="teal">EV charging market </span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <p class="p text-center">
                  ChargeSol offers EV drivers across India a seamless charging experience by bringing market players together into a consolidated and open eRoaming network
                </p>
              </div>
            </div>
          </div>
          <div class="row _w-1029px " data-aos-anchor-placement="top-center">
            <div class="row flex-column align-items-center justify-content-center">
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <h2 class="h2 tc text-center" style="max-width: 100%">
                  The Network <span class="teal">Effect</span>
                </h2>
              </div>
              <div class="col-12 mt-3 mb-3" style="max-width: 800px">
                <p class="p text-center">
                  Envision every charger and EV owner seamlessly connected on a single platform. With just one application download, users gain access to all. No more hesitation before purchasing a vehicle or developing charging infrastructure. With the largest user base of EV owners, ChargeSol network offers the simplest path to expanding your business and accessing new markets.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class=" wf-section " style="background-color: #fff;">
    <div class="container">
      <div class="splide logos" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/1.png" alt="" width="100">
            </li>

            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/2.png" alt="" width="100">
            </li>

            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/3.png" alt="" width="100">
            </li>

            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/4.png" alt="" width="100">
            </li>

            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/5.png" alt="" width="100">
            </li>
            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/6.png" alt="" width="100">
            </li>
            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/7.png" alt="" width="100">
            </li>
            <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
              <img src="assets/img/clients/8.png" alt="" width="100">
            </li>


          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Why ChargeSol Section ======= -->
  <section id="about" class="whyChargeSol charging-section" style="padding:30px 0 ;">
    <div class="container py-5">
      <div class="whyChargeSol-title row">
        <div class="col">
          <h1 class="fw-bold text-start mb-4">Why <span style="color:#203635">ChargeSol</span></h1>
          <p style="font-size:18px;    font-weight: 600;">
            We aim to provide an integrated platform that builds a vast network of aggregated chargers to provide access
            to numerous eMobility partners. Our unified open roaming network aims to bridge the gap between Charge point
            operators and Vehicle manufacturers to provide a seamless charging experience that knows no geographical
            bounds and complicated negotiations.
          </p>
        </div>
      </div>

      <div class="row mt-104 d-flex justify-content-between align-items-center why">


        <div class="row  mt-3 mb-3">
          <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
            <h5 class="why-grids-title">Rapidly Growing EV Community</h5>
            <p class="p faded mt-16">
              Become a part of the largest EV Community in the country, which aims to have a <span
                class="bold">network</span> of 1,00,000 chargers and over 5 Million EV drivers
            </p>
            <hr>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
            <h5 class="why-grids-title">Data-Driven Consultation</h5>
            <p class="p faded mt-16">
              Facilitating 70% of the EV charging transactions through our platform, can empower you to make <span
                class="bold">better and learned decisions</span>
            </p>
            <hr>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
            <h5 class="why-grids-title">Simplifying the EV Charging needs</h5>
            <p class="p faded mt-16">
              Making it convenient for EV drivers to <span class="bold">communicate</span> with networks of multiple
              Charge Point Operators, <span class="bold">helping them save</span> Hundred Percent of their customer
              acquisition cost
            </p>
            <hr>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
            <h5 class="why-grids-title">Seamless Payments & Payouts</h5>
            <p class="p faded mt-16">
              <span class="bold">Realtime reconciliation</span> of payouts, with our Operating System running at the
              back-end, get credits for the charging session directly when the customer makes the payment.
            </p>
            <hr>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ======= 'One network to bridge all borders' Section ======= -->
  <div class="p-0 m-0 charging-section" style="padding-bottom: 100px;">

    <div class="row m-0">
      <div class="col-md-6 p-5" style="background-color: #44625d;">
        <h2 class="" style="width: 60px;background-color: #17a398;color:#fff; padding:10px;    border-radius: 30px;">01
        </h2>
        <h2 class="h2 tc mt-4" style="color:#fff;">
          A <span style="color:#1b1b1b;">Unified</span> network across all borders
        </h2>
        <p class="p mt-3" style="color:#fff;    font-weight: 500;">
          You’ll become a part of the community where you can connect to <span
            style="color:#1b1b1b;    font-weight: 500;">thousands of</span>
          other emobility partners, opening access to thousands of charging stations for all the <span
            style="color:#1b1b1b;    font-weight: 500;">EV
            Drivers</span>, regardless of their location. Don’t let market fragmentation get in
          your way. Charge Anywhere.

        </p>
      </div>
      <div class="col-md-6 p-5" style="background-color: #203635;">
        <h2 class="" style="width: 60px;background-color: #17a398;color:#fff; padding:10px;    border-radius: 30px;">02
        </h2>
        <h2 class="h2 tc mt-4" style="color: #fff;">
          Charge Anywhere and<br />
          <span style="color:#1b1b1b;    font-weight: 500;"> Everywhere</span>
        </h2>
        <p class="p mt-3" style="color:#fff;">

          Delivering a seamless charging experience to the EV Drivers is the biggest motivation to create more
          options for charging. Charging operators and EV Drivers can expect a future of ease, anywhere and
          everywhere.
        </p>
      </div>
    </div>
  </div>
  <section class="charging-section wf-section ">
    <div class="container">
      <div class="hed">
        <h1 class="text-center pb-5" style="color:#203635;    font-weight: 600;">
          Read the reviews
        </h1>
      </div>
      <div class="splide testi mt-0" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="dec p-3">
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum debitis fugit praesentium!
                  Iusto omnis hic, ipsa dicta dolor tempore soluta natus velit"</p>
                <div class="auth mt-3">
                  Ingrid Correa
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="dec p-3">
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum debitis fugit praesentium!
                  Iusto omnis hic, ipsa dicta dolor tempore soluta natus velit"</p>
                <div class="auth mt-3">
                  Ingrid Correa
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="dec p-3">
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum debitis fugit praesentium!
                  Iusto omnis hic, ipsa dicta dolor tempore soluta natus velit"</p>
                <div class="auth mt-3">
                  Ingrid Correa
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= Charging Section ======= -->

  <!-- ======= 3-Products-Scroll-Down Section ======= -->
  <div class="section-3 wf-section">
    <div>
      <div class="container ">
        <div class="row justify-content-between items-center">
          <div class="col-md-7">
            <h2 class="aside-title">
              Join the ChargeSol <span class="teal">Revolution</span>: Powering the future of Electric Mobility
            </h2>
            <p class="aside-p">
              Gain a competitive advantage by joining the world’s largest
              eRoaming network.
            </p>
            <a href="<?php echo base_url('Contact'); ?>" data-w-id="c17c272e-a5d2-ba46-c5b9-42170fb868df"
              class="aside-btn button w-button">Get Started Today</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- End #main -->



  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    var splide = new Splide('.logos', {
      perPage: 6,
      rewind: true,

      autoplay: true,
      type: 'loop',
      gap: '1rem',
      breakpoints: {
        767: {
          perPage: 2, // Adjust perPage for mobile screens (screens with a width less than 767px)
        }
      }
    });

    splide.mount();


    var splide = new Splide('.testi', {
      perPage: 3,
      rewind: true,
      gap: '4rem',
      autoplay: true,
      type: 'loop',
      breakpoints: {
        767: {
          perPage: 1, // Adjust perPage for mobile screens (screens with a width less than 767px)
        }
      }

    });

    splide.mount();

    AOS.init({
      offset: 120, // offset (in px) from the original trigger point

      duration: 10000,
    }

    );



    var controller = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
      triggerElement: '.first1',
      duration: 250,
      triggerHook: .4

    })
      .setClassToggle('.first1', 'show1')

      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);
    new ScrollMagic.Scene({
      triggerElement: '.first2',
      duration: 250,
      triggerHook: .4

    })
      .setClassToggle('.first2', 'show2')

      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);
    new ScrollMagic.Scene({
      triggerElement: '.first3',
      duration: 250,
      triggerHook: .4

    })
      .setClassToggle('.first3', 'show3')

      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);


    new ScrollMagic.Scene({
      triggerElement: '.first4',
      duration: 250,
      triggerHook: .4

    })
      .setClassToggle('.first4', 'show4')

      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);
  </script>
  <script>
    // Wait for the document to be ready
    $(document).ready(function () {
      // Initialize the previous scroll position
      var prevScrollPosition = $(window).scrollTop();

      // Add a scroll event listener
      $(window).scroll(function () {
        // Get the current scroll position
        var scrollPosition = $(window).scrollTop();

        // Check the scroll direction
        var scrollDirection = scrollPosition > prevScrollPosition ? 'down' : 'up';

        // Update the previous scroll position
        prevScrollPosition = scrollPosition;

        // Check if the scroll position is greater than or equal to the section offset
        if (scrollPosition >= $(".scro").offset().top) {
          // Add a class to make the section sticky
          $(".scro").addClass("sticky");

          // Check scroll position for opacity transitions
          if (scrollPosition >= 700) {
            $(".co1, .co3, .co4").css("opacity", 0);
            $(".co2").css("opacity", 1);
          }

          if (scrollPosition >= 1200) {
            $(".co1, .co2, .co4").css("opacity", 0);
            $(".co3").css("opacity", 1);
          }

          if (scrollPosition >= 1700) {
            $(".co1, .co2, .co3").css("opacity", 0);
            $(".co4").css("opacity", 1);
          }
          if (scrollPosition >= 2200) {
            $(".scro").removeClass("sticky");
          }

        }

      });
    });
    // Assuming scrollDirection and scrollPosition are defined elsewhere in your code
    // Also, make sure to wrap your code inside a document ready function or use it after the DOM is loaded.

    // Store the initial offset of the .scro element and the height of the scro1 element
    var scroOffsetTop = $(".scro").offset().top;
    var scro1Height = $("#scro1").outerHeight();

    $(window).scroll(function () {
      var scrollDirection = getScrollDirection(); // You need to define the getScrollDirection function
      var scrollPosition = $(window).scrollTop();

      if (scrollDirection === 'up' && scrollPosition > scroOffsetTop) {
        console.log("In scroll up ==>");
        // Add the sticky class if scrolling up and below the top position
        $("#scro1").addClass("sticky");
      } else {
        // Remove the sticky class if scrolling down or not at the top position
        $("#scro1").removeClass("sticky");
      }

      // Check if scrolling has reached the end of the "scro" section
      var scroEndPosition = scroOffsetTop + $(".scro").outerHeight();
      if (scrollPosition + $(window).height() >= scroEndPosition) {
        // Perform actions when scrolling reaches the end of the "scro" section
        console.log("Reached the end of 'scro' section");
        // Show additional content or perform any other actions here
      }
    });

    // Function to get the scroll direction (you can customize this based on your needs)
    function getScrollDirection() {
      var lastScrollTop = 0;
      var currentScrollTop = $(window).scrollTop();

      if (currentScrollTop > lastScrollTop) {
        return 'down';
      } else if (currentScrollTop < lastScrollTop) {
        return 'up';
      }

      lastScrollTop = currentScrollTop;
    }

  </script>
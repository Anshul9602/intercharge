<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<style>
  .splide__arrow--prev {
    left: -3em;
  }

  .splide__arrow--next {
    right: -2em;
  }

  .wf-section {
    padding-top: 96px;
    padding-bottom: 96px;
  }

  .col-md-4 {
    padding-bottom: 60px;
  }

  .flip-card-front h4 {
    font-weight: 600;
    font-size: 20px;
  }

  .row.d-flex.h-677.mt-144 {
    padding-bottom: 100px !important;
  }




  .bgg {

    background-image: linear-gradient(180deg, #0a0f1a 7%, rgba(13, 17, 23, 0) 20%), radial-gradient(circle farthest-side at -25% 150%, #0a0f1a 48%, rgba(13, 17, 23, 0) 65%), radial-gradient(circle farthest-corner at -25% -125%, rgba(13, 17, 23, 0) 50%, #0a0f1a 70%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 0 -50%, #0a0f1a 32%, hsla(0, 0%, 100%, 0) 62%), radial-gradient(circle farthest-side at 0 -25%, #007252 50%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 50% -100%, #05f 26%, rgba(13, 17, 23, 0) 72%);
    background-position: 0 0, 0 0, 0 0, 0 0, 0 0, 0 0;
    background-size: auto, auto, auto, auto, auto, auto
  }

  .card {
    background-color: #afcbbb;
  }
</style>
<style>
  .col-nn {
    width: 8.6%;
  }

  .col-nn1 {
    width: 4%;
  }

  .tab {
    overflow: hidden;

    background-color: #eef5db;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    border-right: 1px solid #afcbbb;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #afcbbb;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #afcbbb;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #afcbbb;
    border-top: none;
    background-color: #afcbbb;
  }
</style>
<section class="top p-0 bgg">
  <div class=" ">
    <div>
      <div class="container">
        <div class="row d-flex mt-144" style="    align-items: center;">
          <div class="col-md-6 z-1 text-white">
            <h1 class="hero-title">We pioneer
              <span class="orange">Change</span>
            </h1>
            <p class="p mt-32 _w-582">Advancing eMobility is the core of our mission. We combine industry expertise with
              consulting methods and tools to help our clients succeed. </p>
            <div class="hero-btn-wrapper">
              <a href="<?php echo base_url('Contact'); ?>" data-w-id="f4f18225-2f7a-1018-3f68-7b938e7cc7fd"
                class="button _50 w-button aside-btn mt-0">Start today</a>

            </div>
          </div>
          <div class="col-md-6 ">
            <div class="hero-img-wrapper">

              <img src="assets/img/clients/cpms1.png">
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
</section>
<section style="background-color: #eef5db;">
  <div class="container">
    <div class="main mt-4 pb-5">
      <h2 class="text-center" style="font-weight: 700;">What can we do for you</h2>

    </div>
    <div class="sl mt-4">
      <div class="container" style="max-width: 90%; margin:auto;">
        <div class="card p-md-5 p-3 ">
          <div class="icon">
            <img src="assets/img/con1.svg" alt="">
          </div>
          <h2 class="mt-md-4 mt-2 pb-md-3 pb-2" style="font-weight: 600;">Advance with strategy</h2>
          <p>Hubject Consulting simplifies the process of entering and scaling up in the EV charging industry – no
            matter
            what market sector or location our clients originate in. Using industry expertise combined with
            issue-specific
            benchmarks and assessments, we help our clients to strategize and prioritize. </p>
        </div>
        <div class="card p-md-5 p-3 mt-3">
          <div class="icon">
            <img src="assets/img/con3.svg" alt="">
          </div>
          <h2 class="mt-md-4 mt-2 pb-md-3 pb-2" style="font-weight: 600;">Harness new technologies</h2>
          <p>Successfully navigating the eMobility industry means embracing innovation. Our consultants specialise in
            the
            newest technologies defining the industry: from Plug&Charge to smart charging, our clients are ahead of the
            curve in implementing new technologies to advance the field. </p>
        </div>
        <div class="card p-md-5 p-3 mt-3">
          <div class="icon">
            <img src="assets/img/con2.svg" alt="">
          </div>
          <h2 class="mt-md-4 mt-2 pb-md-3 pb-2" style="font-weight: 600;">Streamline your operations</h2>
          <p>We bring in detailed data and valuable insights to help our clients manage the complexity of their
            operations
            in the eMobility sector. We find and resolve business-critical maintenance and performance issues and help
            our
            clients achieve smooth operations that guarantee their success.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="background-color: #eef5db;">
  <div class="container">
    <h2 style="font-weight: 800;">Our service offering</h2>
    <div class="tab">
      <button class="tablinks active " onclick="openCity(event, 'tab1')" style="padding: 30px 20px;">Market analysis &
        expansion</button>
      <button class="tablinks" onclick="openCity(event, 'tab2')" style="padding: 30px 20px;">Investment analysis &
        pricing strategy</button>
      <button class="tablinks" onclick="openCity(event, 'tab3')" style="padding: 30px 20px;">Strategy
        development</button>
      <button class="tablinks" onclick="openCity(event, 'tab4')" style="padding: 30px 20px;">Regulatory & policy
        analysis</button>
    </div>

    <div id="tab1" class="tabcontent p-md-5 p-2" style="display: block;">
      <div class="row">


        <div class="col-md-6 mt-3">
          <h2 style="font-weight: 600;">Your guideline through the eMobility ecosystem</h2>
          <p>We provide a comprehensive view on the value pools across the eMobility ecosystem and identify value
            potential for both newcomers and ecosystem partners.</p>
        </div>
        <div class="col-md-6 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Positioning strategy for eMobility
            newcomers </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span>Feasibility analysis of business models and products</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span>Competitive market analysis</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span>Identification and analysis of value potentials and revenue forecasting </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span>Market forecasting </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span>V2G-based business strategy </h6>
          
        </div>
        <div class="col-md-6 mt-3">
          <h2 style="font-weight: 600;">Your guideline through the eMobility ecosystem</h2>
          <p>We provide a comprehensive view on the value pools across the eMobility ecosystem and identify value
            potential for both newcomers and ecosystem partners.</p>
        </div>
        <div class="col-md-6 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Positioning strategy for eMobility
            newcomers </h6>
        </div>
      </div>

      <div id="tab2" class="tabcontent p-md-5 p-2">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
      </div>

      <div id="tab3" class="tabcontent p-md-5 p-2">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>
      <div id="tab4" class="tabcontent p-md-5 p-2">
        <h3>Tokyo1</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>
    </div>
</section>

<section class="wh">
  <div class="container">
    <div class="hed mt-4 pb-5 ">
      <h2 class="text-center" style="font-weight: 700;">Why ChargeSol Fast Charging?</h2>
    </div>
    <div class="row mt-4" style="justify-content: space-between;">
      <div class="col-md-6">
        <img src="assets/img/clients/ab2.webp" alt="" width="100%">
      </div>
      <div class="col-md-5">
        <h2 style="font-weight: 600;">ChargeSol Is One Of The Nation's Largest Public Fast Charging Networks</h2>
        <div
          class="prose mt-4 max-w-none text-theme-base prose-headings:text-theme-base prose-strong:font-bold prose-strong:text-theme-base">
          <ul>
            <li>
              <p>Attract new visitors, build brand loyalty, and future-proof your business</p>
            </li>
            <li>
              <p>With more 50kW+ locations than any other public fast charging network in the India, you can partner
                with
                the nation's leading experts</p>
            </li>
            <li>
              <p>Enhance the sustainability of your operations and help meet environmental, social and corporate
                governance goals</p>
            </li>
            <li>
              <p>Avoid capital spend and ongoing maintenance with ChargeSol turnkey charging solutions</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container">
  <div class="row" style="align-items: center;    justify-content: space-between;">
    <div class="col-md-4">
      <h2 style="font-weight: 600;">Fast Charging is Convenient for Your Customers</h2>
      <p class="mt-3"><strong class="font-bold">EVgo Fast Chargers take only minutes (vs hours) to charge</strong>,
        giving customers just enough time to shop at your business.</p>
      <a href="" class="button _50 w-button aside-btn mt-3">Contact Now</a>

    </div>
    <div class="col-md-7">
      <img src="assets/img/clients/pp2.webp" alt="" width="100%">
    </div>

  </div>
</section>

<section class="container">
  <div class="row" style="align-items: center;    justify-content: space-between;">
    <div class="col-md-6">
      <img src="assets/img/clients/pp3.webp" alt="" width="100%">
    </div>
    <div class="col-md-6">
      <h2 style="font-weight: 600;">Site Host Spotlight: Lazy Acres Natural Market</h2>
      <p class="mt-3">"Having the EVgo fast chargers has been a premium experience. The EVgo group has offered great
        support. We're happy to say the chargers can really bring some added value to your customer base."</p>
      <p class="mt-4">David Schaefer, Store Director, Lazy Acres Natural Market</p>


    </div>


  </div>
</section>

<section class="container">
  <div class="main pb-4">
    <h1 class="text-center" style="font-weight: 600;">No Upfront Cost or Maintenance Expenses</h1>
    <p class="mt-3 text-center">EVgo manages everything from permitting and installation to maintenance and
      industry-leading customer care. Turnkey Fast Charging with No Upfront Cost or Maintenance Expenses</p>
  </div>
  <div class="row mt-5">
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu1.svg" alt="">
      <p class="text-center pt-3">Initial
        Consultation</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu2.svg" alt="">
      <p class="text-center pt-3">Site
        Design</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu3.svg" alt="">
      <p class="text-center pt-3">Equipment
        Procurement</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu4.svg" alt="">
      <p class="text-center pt-3">Site
        Construction</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu5.svg" alt="">
      <p class="text-center pt-3">Utility
        Interconnection</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu6.svg" alt="">
      <p class="text-center pt-3">Site
        Commissioning</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu7.svg" alt="">
      <p class="text-center pt-3">Ongoing
        Maintenance</p>
    </div>
    <div class="col-nn1 text-center" style="display: flex;align-items: center;    justify-content: center;">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#7582e1" style="width: 50px;">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#7a7ef0" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        </g>
      </svg>

    </div>
    <div class="col-nn text-center">
      <img src="assets/img/clients/nu8.svg" alt="">
      <p class="text-center pt-3">Customer
        Care</p>
    </div>
  </div>
</section>
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
<script>
  var splide = new Splide('.logos', {
    perPage: 6,
    rewind: true,
    autoplay: true,
    type: 'loop',

  });

  splide.mount();
</script>
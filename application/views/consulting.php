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

  .sl11 .splide__arrows {
    position: absolute;
    right: 5%;
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
          <p>ChargeSol Consulting simplifies the process of entering and scaling up in the EV charging industry – no
            matter
            what market sector or location our clients originate in. Using industry expertise combined with
            issue-specific
            benchmarks and assessments, we help our clients to strategize and prioritize. </p>
        </div>
        <div class="card p-md-5 p-3 mt-3">
          <div class="icon">
            <img src="assets/img/cou3.svg" alt="">
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
    <h2 class="pb-md-5 pb-3 text-center" style="font-weight: 800;">Our service offering</h2>
    <div class="tab">
      <button class="tablinks active " onclick="openCity(event, 'tab1')"
        style="padding: 30px 20px 10px; min-height:95px;    width: 25%;">Market analysis &
        expansion</button>
      <button class="tablinks" onclick="openCity(event, 'tab2')"
        style="padding: 30px 20px 10px; min-height:95px;    width: 25%;">Investment analysis &
        pricing strategy</button>
      <button class="tablinks" onclick="openCity(event, 'tab3')"
        style="padding: 30px 20px 10px; min-height:95px;    width: 25%;">Strategy
        development</button>
      <button class="tablinks" onclick="openCity(event, 'tab4')"
        style="padding: 30px 20px 10px; min-height:95px;    width: 25%;">Regulatory & policy
        analysis</button>
    </div>

    <div id="tab1" class="tabcontent p-md-5 p-2" style="display: block;">
      <div class="row" style="justify-content: space-between;">


        <div class="col-md-4 mt-3">
          <h2 style="font-weight: 600;">Your guideline through the eMobility ecosystem</h2>
          <p>We provide a comprehensive view on the value pools across the eMobility ecosystem and identify value
            potential for both newcomers and ecosystem partners.</p>
          <a href="" class="button _50 w-button aside-btn mt-3">Get started</a>
        </div>
        <div class="col-md-7 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Positioning strategy for eMobility
            newcomers </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Feasibility analysis of business models
            and
            products</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Competitive market analysis</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Identification and analysis of value
            potentials and revenue forecasting </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Market forecasting </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> V2G-based business strategy </h6>

        </div>


      </div>
    </div>

    <div id="tab2" class="tabcontent p-md-5 p-2">
      <div class="row" style="justify-content: space-between;">
        <div class="col-md-4 mt-3">
          <h2 style="font-weight: 600;">Make data-based investment decisions</h2>
          <p>Use ChargeSol’s wealth of real-world data to make smart decisions on pricing tariffs, investment and
            value-added services. </p>
          <a href="" class="button _50 w-button aside-btn mt-3">Get started</a>
        </div>
        <div class="col-md-7 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Utilization ramp-up model as an investment
            decision-aid </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Evaluation of make or buy scenarios for
            our
            client’s product offerings</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Roadmap for pricing tariffs and product
            features</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Development of tailored product bundles
          </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Identification and benchmarking of
            value-added services</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Site analysis based on real-world data
          </h6>

        </div>

      </div>
    </div>

    <div id="tab3" class="tabcontent p-md-5 p-2">
      <div class="row" style="justify-content: space-between;">
        <div class="col-md-4 mt-3">
          <h2 style="font-weight: 600;">Scale your business strategically</h2>
          <p>We find synergies between our client’s existing product or service offerings and their target goals by
            identifying beneficial value-added services. </p>
          <a href="" class="button _50 w-button aside-btn mt-3">Get started</a>
        </div>
        <div class="col-md-7 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> National and international charging
            network strategy</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Strategic support for future charging
            network operations</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Customer-focused, digitally advanced and
            international charging strategy</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Market success strategy for fleet
            businesses </h6>


        </div>

      </div>
    </div>
    <div id="tab4" class="tabcontent p-md-5 p-2">
      <div class="row" style="justify-content: space-between;">
        <div class="col-md-4 mt-3">
          <h2 style="font-weight: 600;">Adapt to international regulations</h2>
          <p>We guide our clients through the tangle of international regulation and policies that slows down progress
            for the global eMobility ecosystem. </p>
          <a href="" class="button _50 w-button aside-btn mt-3">Get started</a>
        </div>
        <div class="col-md-7 mt-3">
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Expertise on international regulatory
            framework conditions regarding energy law, tax, data privacy and general licenses </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Regulatory pre-assessment accounting for
            our client’s business model plans</h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Identification of major legal and
            regulatory barriers </h6>
          <h6><span><img src="assets/img/right.svg" alt="" width="30"></span> Leading transformational projects </h6>


        </div>

      </div>
    </div>
  </div>
</section>
<section style="background-color: #eef5db;">
  <div class="container">
    <h1 style="font-weight: 800;max-width:60%;">From startups to enterprises, more than 150 companies trust our
      expertise</h1>
    <div class="sl11 mt-md-5 mt-2">
      <div class="splide logos" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track pt-3">
          <ul class="splide__list">
            <li class="splide__slide p-3">
              <img src="assets/img/cc1.jpg" alt="">
              <h6 class="mt-3">Strategic customer journey development for premium charging solutions</h6>
              <a href="" class="d-flex" tabindex="0">
                <div>See their success</div>&nbsp;&nbsp; <img
                  src="https://assets.website-files.com/602cf2b08109ccbc93d7f9ed/6046bd75ef189c74d678a1fc_Vector%20(Stroke).svg"
                  loading="lazy" alt="" class="image-5"
                  style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0" style="background-color: #eef5db;">
  <div class="container">
    <h2 class="pt-md-3 pb-md-5 pb-3 pt-3">Read our whitepapers</h2>
    <div class="row mt-3">
      <div class="col-md-3">
        <img src="assets/img/cc2.png" alt="">
        <h6 class="mt-3">Strategic customer journey development for premium charging solutions</h6>
        <a href="" class="d-flex" tabindex="0">
          <div>Download</div>&nbsp;&nbsp; <img
            src="https://assets.website-files.com/602cf2b08109ccbc93d7f9ed/6046bd75ef189c74d678a1fc_Vector%20(Stroke).svg"
            loading="lazy" alt="" class="image-5"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        </a>
      </div>
      <div class="col-md-3">
        <img src="assets/img/cc3.jpg" alt="">
        <h6 class="mt-3">Strategic customer journey development for premium charging solutions</h6>
        <a href="" class="d-flex" tabindex="0">
          <div>Download</div>&nbsp;&nbsp; <img
            src="https://assets.website-files.com/602cf2b08109ccbc93d7f9ed/6046bd75ef189c74d678a1fc_Vector%20(Stroke).svg"
            loading="lazy" alt="" class="image-5"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        </a>
      </div>
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
    perPage: 3,
    rewind: true,
    autoplay: true,
    type: 'loop',

  });

  splide.mount();
</script>
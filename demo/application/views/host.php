<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
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

    .col-md-2_5 {
        width: 18%;
    }

    .card1 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 20px;
        background-color: #17a398;
        margin: 1%;
    }

    .cards11 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 20px;
        background-color: #4b006e;
        padding: 5%;
        color: #fff;
    }

    .collapsible {
        background-color: #f1f1f1;
        cursor: pointer;
        padding: 18px;
        text-align: left;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        justify-content: space-between;
        display: flex;
        font-weight: 600;
      }
    .collapsible span{
        font-size: 20px;
      
      }
    
      .content {
        display: none;
        overflow: hidden;
        padding: 20px;
        background-color: #afcbbb;
        transition: max-height 0.2s ease-out;
      }
    
      .active {
        background-color: #afcbbb;
      }
      @media screen and (max-width: 768px) {
    .button{
    margin-top: 10px !important;}
    }
</style>
<section class="top p-0 ">
    <div class="splide upevent1 " role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
                   
                    <div style="width: 100%;height:80vh;background-image: url('assets/img/clients/auto1.webp');background-size: cover;background-position: center;"></div>
                   
                </li>
                <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
                   
                    <div style="width: 100%;height:80vh;background-image: url('assets/img/clients/auto2.webp');background-size: cover;background-position: center;"></div>
                   
                </li>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container md-mt-3 mt-4">
        <div class="row justify-content-between" style="align-items: center;">
            <div class="col-md-5 mt-3">
                <h2 style="font-weight:600;">Host Fast Chargers on Your Commercial Property</h2>
                <p class="mt-3">
                ChargeSol and GM are building 2,700+ fast chargers by 2025. Attract new customers and help accelerate the adoption of electric vehicles by hosting fast chargers. We cover all costs, installation, and maintenance.</p>
            </div>
            <div class="col-md-6 mt-3">
                <img src="assets/img/clients/auto1.webp" alt="" width="100%">
            </div>
        </div>

    </div>
</section>
<section>
    <div class="container md-mt-3 mt-4">
        <div class="row justify-content-between" style="align-items: center;">
            <div class="col-md-6 mt-3">
                <img src="assets/img/clients/auto1.webp" alt="" width="100%">
            </div>
            <div class="col-md-5 mt-3">
                <h2 style="font-weight:600;">Our Customers Become Your Customers</h2>
                <p class="mt-3">
                    ChargeSol fast chargers attract new visitors to your retail property. These visits turn into revenue because 8/10 ChargeSol customers like to shop while they charge. With more than 444,000 loyal ChargeSol customer accounts (and quickly growing as EV adoption booms) - the opportunity is significant.</p>
                    <a href="<?php echo base_url('Contact'); ?>" data-w-id="c17c272e-a5d2-ba46-c5b9-42170fb868df"
                        class="aside-btn button w-button">View a Case study</a>
            </div>
            
        </div>

    </div>
</section>
<section>
    <div class="container md-mt-3 mt-4">
        <div class="row justify-content-between" style="align-items: center;">
            
            <div class="col-md-5 mt-3">
                <h2 style="font-weight:600;">What A Charging Stations Infrastructure Might Look Like on Your Property</h2>
                <p class="mt-3">
                    ChargeSol and GM’s first three charging stations went live on the network in April 2021. Take a tour of one of the first stations by watching the video and see what a GM-funded retail site can look like.</p>
                    <a href="<?php echo base_url('Contact'); ?>" data-w-id="c17c272e-a5d2-ba46-c5b9-42170fb868df"
                        class="aside-btn button w-button">discover a site</a>
            </div>
            <div class="col-md-6 mt-3">
                <img src="assets/img/clients/auto1.webp" alt="" width="100%">
            </div>
        </div>

    </div>
</section>
<section>
    <div class="container md-mt-3 mt-4">
        <div class="row justify-content-between" style="align-items: center;">
            <h1 class="text-center" style="font-weight:600;">Benefits of Hosting ChargeSol Fast Chargers</h1>
            
        </div>
        <div class="bn mt-md-5 mt-3">
            
            <button class="collapsible mt-3" onclick="toggleContent('section1')">Attract new customers and incremental revenue<span id="toggleSymbol1">+</span></button>
            <div class="content" id="section1">
              <p class="p-md-4 p-2">
                With the ChargeSol app and targeted ChargeSol marketing efforts, your property will receive new charger-driven visits. These charging visits turn into shopping visits as 8/10 customers like to shop while they charge. ChargeSol also has a coupon technology, ChargeSol AdvantageTM, to help you bring customers from the chargers into your stores. And remember - it’s free to host with ChargeSol.
              </p>
            </div>
        
            <button class="collapsible mt-3" onclick="toggleContent('section2')">Give your customers a premium charging experience<span id="toggleSymbol2">+</span></button>
            <div class="content" id="section2">
                <p class="p-md-4 p-2">
                    ChargeSol’s average rating on Plugshare consistently exceeds 8/10. One reason customer like ChargeSol, is because of it's industry leading reliability, committed to 98% network uptime. With charging becoming part of the shopping experience, a great charging experience helps you to retain customers.
                  </p>
            </div>
            <button class="collapsible mt-3" onclick="toggleContent('section3')">Receive experienced guidance and support<span id="toggleSymbol3">+</span></button>
            <div class="content" id="section3">
             <p class="p-md-4 p-2">ChargeSol has more than a decade of experience in installing DC Fast Chargers. Its engineering and construction teams have successfully installed fast chargers at over 850 locations across the United States.

                Receive experienced guidance and support ChargeSol has more than a decade of experience. And after the chargers are operational on your property, we’ll continue to be there for you to meet our standard of industry leading reliability, committed to 98% network uptime, and provide award-winning 24/7 customer service.</p>
            </div>
            <button class="collapsible mt-3" onclick="toggleContent('section4')">Access to 444,000+ of our EV driver customers accounts<span id="toggleSymbol4">+</span></button>
            <div class="content" id="section4">
              <p class="p-md-4 p-2">ChargeSol has a vast driver audience, fueled by OEM partnerships and the ability to charge all EVs on the market. Given our customers become your customers - as drivers shop where they charge - a larger audience means more business opportunity for you.</p>
            </div>
            <button class="collapsible mt-3" onclick="toggleContent('section5')">Host technology that will be relevant for decades<span id="toggleSymbol5">+</span></button>
            <div class="content" id="section5">
              <p class="p-md-4 p-2">ChargeSol has a vast driver audience, fueled by OEM partnerships and the ability to charge all EVs on the market. Given our customers become your customers - as drivers shop where they charge - a larger audience means more business opportunity for you.</p>
            </div>
            <button class="collapsible mt-3" onclick="toggleContent('section6')">Make a greater sustainability impact<span id="toggleSymbol6">+</span></button>
            <div class="content" id="section6">
              <p class="p-md-4 p-2">ChargeSol fast chargers are powered by 100% renewable energy so by partnering with ChargeSol your sustainability impact is greater. Your customer will see that you share their values and investors will take notice of your ESG progress - highlighted by the metric tons of CO2 hosting fast chargers prevents.</p>
            </div>
        
        
        
          </div>
    </div>
</section>
<section>
    <div class="container md-mt-3 mt-4">
       <img src="assets/img/hostb.webp" alt="">
    </div>
</section>



<section>
    <div class="section-3 wf-section">
        <div class="container ready_bg">
            <div class="row justify-content-between items-center">
                <div class="col-md-7">
                    <h2 class="aside-title">
                        Join the ChargeSol <span class="teal">Revolution</span>: Powering the future of Electric
                        Mobility
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
    
</section>
<script>
    function toggleContent(sectionId) {
      var content = document.getElementById(sectionId);
      var symbol = document.getElementById('toggleSymbol' + sectionId.charAt(sectionId.length - 1));
  
      if (content.style.display === 'block') {
        content.style.display = 'none';
        symbol.innerHTML = '+';
      } else {
        content.style.display = 'block';
        symbol.innerHTML = '-';
      }
    }
  </script>
  
<script>
 

    var splide1 = new Splide('.upevent1', {
        perPage: 1,
        rewind: true,
        gap: '1rem',
        autoplay: true,
        type: 'loop',

    });

    splide1.mount();
</script>
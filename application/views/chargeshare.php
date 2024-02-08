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
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h2>EVgo Has a Long History of Providing Custom Solutions to Automakers</h2>
                <p>
                    ChargeSol has established partnerships with a diverse array of leading automakers, including Nissan,
                    GM,
                    Subaru, Toyota, Tesla, BMW, Kia, and Hyundai. These collaborations are designed to offer compelling
                    charging solutions for electric vehicle (EV) customers, encompassing pre-paid charging credits,
                    exclusive pricing, infrastructure expansion, mobile app solutions, and additional perks. Align with
                    the
                    nation's top original equipment manufacturers (OEMs) to facilitate the deployment of fast charging
                    incentives through one of the largest public fast charging networks.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/img/clients/auto1.webp" alt="" width="100%">
            </div>
        </div>

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
 

    var splide1 = new Splide('.upevent1', {
        perPage: 1,
        rewind: true,
        gap: '1rem',
        autoplay: true,
        type: 'loop',

    });

    splide1.mount();
</script>
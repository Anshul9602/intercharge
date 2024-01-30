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

    .bgg {

        background-image: linear-gradient(180deg, #0a0f1a 7%, rgba(13, 17, 23, 0) 20%), radial-gradient(circle farthest-side at -25% 150%, #0a0f1a 48%, rgba(13, 17, 23, 0) 65%), radial-gradient(circle farthest-corner at -25% -125%, rgba(13, 17, 23, 0) 50%, #0a0f1a 70%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 0 -50%, #0a0f1a 32%, hsla(0, 0%, 100%, 0) 62%), radial-gradient(circle farthest-side at 0 -25%, #007252 50%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 50% -100%, #05f 26%, rgba(13, 17, 23, 0) 72%);
        background-position: 0 0, 0 0, 0 0, 0 0, 0 0, 0 0;
        background-size: auto, auto, auto, auto, auto, auto;
    }
</style>
<section class="top p-0 bgg">
    <div class="splide upevent1 " role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
                    <img src="assets/img/clients/auto1.webp" alt="" width="100%">
                    <div class="overley">

                    </div>
                </li>
                <li class="splide__slide" style="    align-items: center;display: flex;justify-content: center;">
                    <img src="assets/img/clients/auto2.webp" alt="" width="100%">
                </li>




            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container">
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

<style>
    .btnns {
        margin-top: 20px;
        padding: 10px 20px;
        border: 2px solid #000;
        border-radius: 20px;
    }
</style>
<section>
    <div class="container">
        <h2>Even More Reasons to Choose ChargeSol</h2>

        <div class="row">
            <div class="col-md-4 p-4">
                <img src="assets/img/clients/nn1.png" alt="" width="100%" style="min-height:350px;">
                <h4>ChargeSol Charging Crew</h4>
                <p>Available 24/7 to help answer any EV charging questions.</p>
                <br>
                <a href="" class="btnns">Learn More</a>
            </div>
            <div class="col-md-4 p-4">
                <img src="assets/img/clients/nn2.svg" alt="" width="100%" style="min-height:350px;">
                <h4>More Locations</h4>
                <p>Access over 46,000 chargers through EVgo and roaming partners.</p> <br>
                <a href="" class="btnns">Learn More</a>
            </div>
            <div class="col-md-4 p-4">
                <img src="assets/img/clients/nn3.png" alt="" width="100%" style="min-height:350px;">
                <h4>Powered by 100% Renewable Energy</h4>
                <p>ChargeSol is accelerating the transition to clean energy.</p> <br>
                <a href="" class="btnns">Learn More</a>
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
    var splide = new Splide('.upevent', {
        perPage: 5,
        rewind: true,
        gap: '1rem',
        autoplay: true,
        type: 'loop',
        padding: '10rem',
    });

    splide.mount();

    var splide = new Splide('.upevent1', {
        perPage: 1,
        rewind: true,
        gap: '1rem',
        autoplay: true,
        type: 'loop',

    });

    splide.mount();
</script>
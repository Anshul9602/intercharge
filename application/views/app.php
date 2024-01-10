<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<style>
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

    .bgg {
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(7%, #0a0f1a), color-stop(20%, rgba(13, 17, 23, 0))), radial-gradient(circle farthest-side at -25% 150%, #0a0f1a 48%, rgba(13, 17, 23, 0) 65%), radial-gradient(circle farthest-corner at -25% -125%, rgba(13, 17, 23, 0) 50%, #0a0f1a 70%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 0 -50%, #0a0f1a 32%, hsla(0, 0%, 100%, 0) 62%), radial-gradient(circle farthest-side at 0 -25%, #007252 50%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 50% -100%, #05f 26%, rgba(13, 17, 23, 0) 72%);
        background-image: linear-gradient(180deg, #0a0f1a 7%, rgba(13, 17, 23, 0) 20%), radial-gradient(circle farthest-side at -25% 150%, #0a0f1a 48%, rgba(13, 17, 23, 0) 65%), radial-gradient(circle farthest-corner at -25% -125%, rgba(13, 17, 23, 0) 50%, #0a0f1a 70%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 0 -50%, #0a0f1a 32%, hsla(0, 0%, 100%, 0) 62%), radial-gradient(circle farthest-side at 0 -25%, #007252 50%, rgba(13, 17, 23, 0) 72%), radial-gradient(circle farthest-corner at 50% -100%, #05f 26%, rgba(13, 17, 23, 0) 72%);
        background-position: 0 0, 0 0, 0 0, 0 0, 0 0, 0 0;
        background-size: auto, auto, auto, auto, auto, auto
    }
</style>

<section class="top p-0 bgg">

    <div class="container">
        <div class="row d-flex mt-144" style="    align-items: center;">
            <div class="col-md-6 z-1 text-white">
                <h1 class="hero-title text-white">Revolutionize Your Charging
                    <span class="orange">Network with ChargeSol </span>
                </h1>
                <p class="p mt-32 _w-582">Make your charging station network interoperable with hundreds of
                    eMobility charging service providers when you join the ChargeSol network as a charge point
                    operator (CPO), enabling many more EV drivers to charge at your locations.</p>
                <div class="hero-btn-wrapper">
                    <a href="<?php echo base_url('Contact'); ?>" data-w-id="f4f18225-2f7a-1018-3f68-7b938e7cc7fd"
                        class="button _50 w-button aside-btn mt-0">Download now</a>

                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hero-img-wrapper">

                    <img src="assets/img/clients/phone.svg">
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="section-3 wf-section">
        <div>
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
    </div>
</section>


<script>
    var splide = new Splide('.upevent', {
        perPage: 2,
        rewind: true,
        gap: '3rem',
        autoplay: true,
        type: 'loop',
        padding: '10rem',
    });

    splide.mount();
</script>
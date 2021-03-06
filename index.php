<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="Petra Christian Centre" />

    <!--  Title -->
    <title>Petra Christian Centre</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/swal.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<style>
    *, body {
        /* overflow-x: hidden; */
    }
    .modal-dialog {
        max-width: 1000px;
        top: 50px;
        margin: 100px auto;
    }
    
    .modal-body {
        position: relative;
        padding: 0px;
    }
    
    .close {
        position: absolute;
        right: -30px;
        top: 0;
        z-index: 999;
        font-size: 2rem;
        font-weight: normal;
        color: #fff;
        opacity: 1;
        border: none!important;
        background-color: none!important;
    }

    /* .banner-cards.fb{
        margin-left: auto;
    } */

    .tb-card, .fb-card {
        max-width: 90%;
        margin-bottom: 60px;
        height: auto;
        padding: 60px;
        z-index: 10;
        /* top: -30px; */
        border-radius: 5px;
        box-shadow: 2px 1px 50px rgba(0, 0, 0, 0.09);
    }
    
    .fb-card {
        border: 1px solid #0d0d0d;
        background: #0d0d0d;
        /* margin: -100px 30px 0 30px; */
        
        color: #fff!important;
    }
    
    .tb-card {
        border: 1px solid #fff;
        background: #fff;
        /* margin: -100px 30px 0 30px; */
        /* position: absolute; */
        border-bottom: 3px solid black;
    }
    
    @media only screen and (max-width: 767px) {
        .fb-card {
            margin: -250px auto 0 auto;
        }
        .tb-card {
            margin: 10px auto 0 auto;
        }
    }
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>


    <style>
                .icon-bar {
                    position: fixed;
                    bottom: 0;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    z-index: 1000;
                    }

                    /* Style the icon bar links */
                    .icon-bar a {
                    display: block;
                    text-align: center;
                    padding: 16px;
                    transition: all 0.3s ease;
                    color: white;
                    font-size: 16px;
                    }

                    /* Style the social media icons with color, if you want */
                    .icon-bar a:hover {
                    background-color: #fff;
                    color: #000;
                    }

                    .mixlr {
                    background: #0C8ACD;
                    color: white;
                    }

            </style>

    <!--<div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">Welcome to Petra Christian Centre</div>
            <div class="percent">0</div>
            <div class="loading">loading...</div>
        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>-->

    <div class="icon-bar">
        <a href="https://www.mixlr.com/petrachristiancentre" target="_blank" class="mixlr">
            <i class="fas fa-podcast" style="margin-right: 5px;"></i>
            Join Our Audio Stream
        </a>
    </div>

    <!-- Nav Bar -->
    <?php include('./assets/includes/navbar.php') ?>
    <!-- End Nav Bar -->

    <main class="main-root">
        <div id="dsn-scrollbar">
            <div class="dsn-slider demo3" data-dsn-header="project">
                <div class="dsn-root-slider" id="dsn-hero-parallax-img">
                    <div class="slide-inner">
                        <div class="swiper-wrapper">

                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="title-text-header" style="margin-top: 100px;">
                                            <div class="title-text-header-inner" style="font-size: 60px;">
                                                <a href="#" class="effect-ajax" data-dsn-ajax="slider" style="color: #fff;">
                                                Petra Christian Centre
                                                </a>
                                            </div>
                                        </div>
                                        <p style="font-size: 20px; font-weight: light; margin-top: 2px;">
                                            ...building Jesus communities globally.
                                        </p>
                                        <div class="link-custom">
                                            <!-- <a href="./live" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider" data-toggle="modal" data-src="https://www.youtube.com/embed/p8CABXme7_Y?autoplay=0&enablejsapi=1&disablekb=1&controls=0&showinfo=0&loop=1&modestbranding=1" data-target="#petra-modal"> -->
                                            <a href="https://live.petracc.org/live" class="image-zoom mt-10" data-dsn="parallax" data-dsn-ajax="slider">
                                                <span>Join our live service</span>
                                            </a>
                                            <!-- <a href="" target="_blank" class="image-zoom mt-10 ml-2" data-dsn="parallax" data-dsn-ajax="slider">
                                                <span>Join our live service (Audio)</span>
                                            </a> -->
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg" data-image-src="assets/img/petra/PM8-20.jpg" data-overlay="5">
                                        <img src="assets/img/petra/PM8-20.jpg" alt="">
                                    </div>
                                </div>

                                <div class="image-container">
                                    <div class="cover-bg hidden" data-image-src="assets/img/petra/PM8-20.jpg" data-overlay="2">
                                        <img src="assets/img/petra/PM8-20.jpg" alt="">
                                    </div>

                                    <!-- <div class=" " data-dsn="video" data-overlay="4">
                                        <video class="image-bg cover-bg dsn-video pure-hidden-xl pure-hidden-md pure-hidden-lg" poster="assets/img/petra/PM8-47.jpg" autoplay loop muted>
                                            <source src="https://www.youtube.com/embed/wRczfaJDqIE" type="video/mp4"
                                                type="video/mp4">
                                            <source src="https://www.youtube.com/embed/wRczfaJDqIE" type="video/webm">
                                            Your browser does not support HTML5 video.
                                        </video>
                                        <iframe class="pure-hidden-xs pure-hidden-sm y-stream-bg" style="width: 100vw; height: 100vh;" width="1024" height="576" src="https://www.youtube.com/embed/p8CABXme7_Y?autoplay=1&mute=1&enablejsapi=1&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div> -->
                                </div>
                            </div>

                            <!-- <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="title-text-header" style="margin-top: 100px;">
                                            <div class="title-text-header-inner" style="font-size: 60px;">
                                                <a href="#" class="effect-ajax " data-dsn-ajax="slider" style="color: #fff;">
                                                    Testify
                                                </a>
                                            </div>
                                        </div>

                                        <p>
                                            This is the testimony: God has given us eternal life, and this life is found in his Son.
                                        </p>

                                        <div class="link-custom">
                                            <a href="#" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                                <span>Submit your testimony</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg" data-image-src="assets/img/petra/PETCC-83.jpg" data-overlay="0">
                                        <img src="assets/img/petra/PETCC-83.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="title-text-header" style="margin-top: 100px;">
                                            <div class="title-text-header-inner" style="font-size: 60px;">
                                                <a href="#announcemt" class="effect-ajax" data-dsn-ajax="slider" style="color: #fff;">
                                                    Our Announcement
                                                </a>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus minus repellat eius quasi veritatis dolore magnam facere. Sunt enim cum, inventore ipsa
                                        </p>
                                        <div class="link-custom">
                                            <a href="#" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                                <span>View recent announcements</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg" data-image-src="assets/img/petra/PETCC-78.jpg" data-overlay="6">
                                        <img src="assets/img/petra/PETCC-78.jpg" alt="">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="dsn-slider-content"></div>
                <!-- <div class="nav-slider swiper-container-vertical">
                    <div class="swiper-wrapper" role="navigation" style="transition-duration: 0ms; transform: translate3d(0px, 44.6667px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="height: 44.6667px;">
                            <div class="image-container">
                                <div class="image-bg cover-bg" data-image-src="assets/img/petra/PM8-20.jpg" data-overlay="2" style="background-image: url(&quot;assets/img/petra/PM8-20.jpg&quot;);">
                                </div>
                            </div>
                            <div class="content">
                                <p>01</p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="height: 44.6667px;">
                            <div class="image-container">
                                <div class="image-bg cover-bg" data-image-src="assets/img/petra/PETCC-83.jpg" data-overlay="2" style="background-image: url(&quot;assets/img/petra/PETCC-83.jpg&quot;);">
                                </div>
                            </div>
                            <div class="content">
                                <p>02</p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="height: 44.6667px;">
                            <div class="image-container">
                                <div class="image-bg cover-bg" data-image-src="assets/img/petra/PETCC-78.jpg" data-overlay="2" style="background-image: url(&quot;assets/img/petra/PETCC-78.jpg&quot;);">
                                </div>
                            </div>
                            <div class="content">
                                <p>03</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <section class="footer-slid" id="descover-holder">
                    <!-- <div class="main-social">
                        <div class="social-icon">
                            <div class="social-btn">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                                        <path
                                            d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <ul class="social-network" style="color:#ffffff">
                            <li>
                                <a href="https://www.facebook.com/petrachristiancentre">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Petra_CC">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/petrachristriancenter">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div> -->

                    <!-- <div class="control-num">
                        <span class="sup active">01</span>
                    </div> -->
                    <!-- <div class="control-nav">
                        <div class="prev-container" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>

                        <div class="next-container" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>
                    </div> -->
                </section>

            </div>
            <div class="wrapper">

                <!-- <section class="intro-about section-margin">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="intro-content-text">
                                    <h2 data-dsn-grid="move-section" data-dsn-move="-30" data-dsn-duration="100%" data-dsn-opacity="1.2" data-dsn-responsive="tablet">
                                        Sermon
                                    </h2>
                                    <a href="#">
                                        <h5> Living For Purpose </h5>
                                        <br>
                                    </a>

                                    <p data-dsn-animate="text">2:53 Well, this is a crazy, crazy, crazy time for us, as a people, as a nation, as a globe. This is one of those moments where we find it hard to find places of hope. And by the grace of God, I was reading this week
                                        from Acts 26 and just going through 27 and Paul has just had a ship wreck with a hole bunch of people on board. And one of the most haunting passages in that text is when when the text says that that everybody on
                                        board gave up hope. </p>

                                    <h6 data-dsn-animate="text">Pastor Ayo Ajani</h6>
                                    <small data-dsn-animate="text">Mar 15, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-mask">
                        <div class="background-mask-bg"></div>
                        <div class="img-box">
                            <div class="img-cent" data-dsn-grid="move-up">
                                <div class="img-container">
                                    <img data-dsn-y="30%" src="assets/img/petra/PETCC-45.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <section class="contact-up section-margin section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a href="https://live.petracc.org/sermons" class="effect-ajax">
                                <span class="hiring">
                                    Sermons
                                </span>
                                <span class="career">
                                    View previous sermons
                                </span>
                            </a>
                        </div>
                    </div>
                </section> -->

                <!-- <div class="box-seat box-seat-full section-margin">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img data-dsn-scale="1" data-dsn-y="30%" src="assets/img/petra/PM8-20.jpg" alt="">
                            <!--<div class=" " data-dsn="video" data-overlay="4" data-dsn-scale="1" data-dsn-y="30%">->
                            <!--    <iframe style="width: 100vw; height: 100vh;" src="https://www.youtube.com/embed/wQ6-i8hI3Gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!--</div>->
                        </div>
                        <div class="pro-text">
                            <br>
                            <h3>Worship with us</h3>
                            <p>
                                Join us for our next sunday service live online
                            </p>
                            <p>
                                <strong>Ministering:</strong> Pastor Ayo Ajani.
                            </p>
                            <p>
                                <strong>Theme:</strong> Understanding the fundamentals of faith at work.
                            </p>
                            <div id="getting-started" class="dsn-wrapper" style="color:#ffffff; font-size: 24px;">
                            </div>
                            <div class="link-custom">
                                <a href="live" class="image-zoom effect-ajax " data-dsn="parallax">
                                    <span>Join us via Livestream</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <section class="contact-up section-margin section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a class="effect-ajax">
                                <p class="hiring">
                                    COVID-19
                                </p>
                                <span style="font-weight: regular;">
                                    Due to COVID-19 and the recommendation of the NC Governor, we are canceling church at 
                                    all of our physical locations. Join us online Sunday at 9:00AM and on wednesdays at 6:30pm
                                    <a href="#">
                                        <span class="career">
                                            Learn More
                                        </span>
                                    </a>
                                </span>
                            </a>
                        </div>
                    </div>
                </section> -->

                <section class="contact-up section-margin section-padding" style="padding-top: 50px; padding-bottom: 50px;">
                    <div class="container">
                        <div class="c-wapp">
                            <a class="">
                                <span class="hiring">
                                    Join us for church online this weekend
                                    <!-- <span>
                                        Due to COVID-19 and the recommendation of the Federal Government and the NCDC, we are canceling church at all of our physical locations. Join us online Sunday at 9:00 am and Wednesdays at 6:30pm
                                    </span> -->
                                </span>
                                <span class="career">
                                    <span class="mb-20">
                                        Due to the recommendation of the Government as regards COVID-19 we're moving our church
                                        experience online across all our physical locations. 
                                        Join us Sundays 9:00 am & 7:00 pm, Wednesdays at 6:30pm.
                                    </span>
                                <a href="https://live.petracc.org/docs/COMMUNIQUE%20(INTERNAL%20MEMO)%20ON%20COVID-19.pdf.pdf" target="_blank" class="pull-right"> Read More </a>
                                </span>
                            </a>
                        </div>
                    </div>
                </section>

                <div class="box-seat box-seat-full section-margin pure-hiddensm">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img data-dsn-scale="0.65" data-dsn-y="30%" src="assets/img/petra/PETCC-12.jpg" alt="">
                            <!--<div class=" " data-dsn="video" data-overlay="4" data-dsn-scale="1" data-dsn-y="30%">-->
                            <!--    <iframe style="width: 100vw; height: 100vh;" src="https://www.youtube.com/embed/wQ6-i8hI3Gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                            <!--</div>-->
                        </div>
                        <div class="row" >
                            <div class="col-lg-8 col-sm-12 col-md-12" style="margin: 0px auto; margin-top: -100px;">
                                <div class="row" >
                                    <div class="col-md-6 banner-cards fb">
                                        <div class="fb-card">
                                            <br>
                                            <h3 style="color: #fff;">Facebook Groups</h3>
                                            <P>
                                                Join the live experience with other members of your campus.
                                            </P>
                                            <!-- <div id="getting-started" class="dsn-wrapper" style="color:#ffffff; font-size: 24px;">
                                            </div> -->
                                            <div class="link-custom">
                                                <a href="https://live.petracc.org/sgroups" class="image-zoom" data-dsn="parallax">
                                                    <span style="color: #fff">Learn More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 banner-cards">
                                        <div class="tb-card">
                                            <br>
                                            <h3>Tribe Petra Kids</h3>
                                            <p>
                                                Know God Early.
                                            </p>
                                            <!-- <div id="getting-started" class="dsn-wrapper" style="color:#ffffff; font-size: 24px;">
                                            </div> -->
                                            <div class="link-custom">
                                                <a href="kids" class="image-zoom" data-dsn="parallax">
                                                    <span>Learn More</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <footer>
                <?php include('./assets/includes/footer.php') ?>
            </footer>

            <!-- Chatra {literal} -->
            <script>
                (function(d, w, c) {
                    w.ChatraID = 's34WyYYDdgW7kcZou';
                    var s = d.createElement('script');
                    w[c] = w[c] || function() {
                        (w[c].q = w[c].q || []).push(arguments);
                    };
                    s.async = true;
                    s.src = 'https://call.chatra.io/chatra.js';
                    if (d.head) d.head.appendChild(s);
                })(document, window, 'Chatra');
            </script>
            <!-- /Chatra {/literal} -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162851191-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162851191-1');
</script>

        </div>
    </main>


    <!-- video modal -->

    <div class="modal fade" id="petra-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <span class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">&times;</span>
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item y-stream" src="https://www.youtube.com/embed/p8CABXme7_Y?autoplay=0&mute=0&enablejsapi=1&controls=0" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end video modal -->


    <!-- Wait Loader -->
    <div class="wait-loader">
        <div class="loader-inner">
            <div class="loader-circle">
                <div class="loader-layer"></div>
            </div>
        </div>
    </div>
    <!-- // Wait Loader -->

    <!-- cursor -->
    <!--<div class="global-cursor">
        <div class="custom-cursor single-cursor effect-cursor">
            <div class="cursor-container">
                <div class="cursor-text">
                    <div class="cursor-text-wrapper">
                        <div class="cursor-text-value">Scroll</div>
                    </div>
                    <div class="cursor-text-wrapper">
                        <div class="cursor-text-value nth-2">or hold</div>
                    </div>
                </div>
                <div class="cursor-part">
                    <div class="cursor-item"></div>
                </div>
                <div class="cursor-part cursor-left">
                    <i class="fas fa-caret-left"></i>
                </div>
                <div class="cursor-part cursor-right">
                    <i class="fas fa-caret-right"></i>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End cursor -->

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/dsn-grid.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Swal.fire({
            //     position: 'top-end',
            //     icon: 'info',
            //     title: 'Physical locations are closed this weekend.',
            //     text: 'Due to COVID-19 and the recommendation of the NC Governor, we are canceling church at all of our physical locations. Join us online Sunday at 9:30AM, 11:30AM, 5:00PM, 8:00PM & 10:00PM',
            //     showConfirmButton: false,
            //     timer: 1500
            // })
            $("#getting-started").countdown("2020/3/22 09:00:00", function(event) {
                $(this).text(event.strftime('%D Days %Hh %Mm %Ss'));
            });

            // Gets the video src from the data-src on each button
            var $videoSrc;
            $(".video-btn").click(function() {
                $videoSrc = $(this).attr("data-src");
                console.log("button clicked" + $videoSrc);
            });

            // when the modal is opened autoplay it
            $("#petra-modal").on("shown.bs.modal", function(e) {
                console.log("modal opened" + $videoSrc);
                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr(
                    "src",
                    $videoSrc
                );
            });

            // stop playing the youtube video when I close the modal
            $("#petra-modal").on("hide.bs.modal", function(e) {
                // a poor man's stop video
                $("#video").attr("src", $videoSrc);
            });

            $('#petra-modal').on('hidden.bs.modal', function() {
                $('.y-stream')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
                $('.y-stream-bg')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
            });

            $("#petra-modal").on("shown.bs.modal", function(e) {
                $('.y-stream')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
                // $('.y-stream-bg')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            });

        });
    </script>
</body>


</html>
<?php 
//   session_start(); 

//   if (!isset($_SESSION['email'])) {
//   	$_SESSION['msg'] = "Please submit your details first";
//   	header('location: auth');
//   }
?>


<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="Petra Christian Centre" />

    <!--  Title -->
    <title>Petra Christian Centre - Live Stream</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

</head>
<style>
    /* .modal-dialog {
        max-width: 1000px;
        top: 50px;
        margin: 100px auto;
    }
    
    .modal-body {
        position: relative;
        padding: 0px;
    }
    .modal-footer{
        background: #292c2f;
    }
    
    .close {
        position: absolute;
        right: -30px;
        top: 0;
        z-index: 999;
        font-size: 2.5rem;
        font-weight: normal;
        color: #fff;
        opacity: 1;
        border: none!important;
        background-color: none!important;
    }
     */
    .pro-text h5{
        font-size: 20px;
        color: #fff;
    }
    .pro-text h4{
        font-size: 24px;
        color: #fff;
        font-weight: 600;
        line-height: 20px;
    }
    .fabs {
        width: fit-content;
    float: right;
    position: absolute;
    right: 0px;
    }
    .stream-icon{
        background-color: hsla(0,0%,100%,.25);
        height: 50px;
        width: 50px;
        border-radius: 100%;
        outline: none;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        margin: 0 20px 0 20px ;
    }

    .stream-icon i {
        font-size: 24px; 
        line-height: 25px;
        padding: 6px;
        margin: 5px 5px 5px 7px;
        color: #fff;  
    }

    .stream-icon span {
       color:#fff;
       font-size: 1.2rem;
       margin: 15px 0 15px 0;
       font-weight:bold;
    }

    .stream-icon:hover{
        background-color: #751818 !important;
        color:#751818;
        opacity: 0.7;
        transition: 0.4s ease-in-out;
    }

    .help-block.with-errors {
        color: red;
        font-size: 12px;
    }

    #biodata-form{
        padding: 40px 0px !important;
    }

    @media screen and (min-width: 1024px and max-width: 1202) {
        .project-page__inner {
            /* max-width: 100vw !important; */
            max-width: 80vw !important; height: 80vh !important;
            margin: 0px auto;
        }
    }

    @media screen and (min-width: 992px) {
        .project-page__inner {
            max-width: 70vw !important; height: 80vh !important;
            margin: 0px auto;
        }
    }

    @media screen and (max-width: 991px) {
        .project-page__inner {
            max-width: 100vw !important;
        }
    }

    .embed-responsive:after {
        content: "Live";
        font-size: 16px;
        background: #fff;
        z-index: 10;
        color: red;
        position: absolute;
        bottom: 30px;
        left: 60px;
        border-radius: 50px;
        padding: 10px 15px;
        font-weight: bold;
        animation:blinkingText 1.2s infinite;
    }

    @keyframes blinkingText{
    0%{     color: red;    }
    49%{    color: red; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: red;    }
}

.headefr-fexid {
    height: 100vh;
}

    
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

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

    <!-- Nav Bar -->
    <div class="dsn-nav-bar">
        <div class="site-header">
            <div class="extend-container">
                <div class="inner-header">
                    <div class="main-logoFml">
                        <img class="dark-logo" src="assets/img/logo/logo-dark.png" alt="" />
                        <img class="light-logo" src="assets/img/logo/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <nav class=" accent-menu main-navigation">
                    <ul class="extend-container">
                        <li><a href="index">Home</a></li>
                        <li><a href="./about">About</a></li>
                        <li><a href="https://live.petracc.org/sermonss.html">Sermons</a></li>
                        <!--<li><a href="live.html">Live Service</a></li>-->
                        <li><a href="https://paystack.com/pay/petra_give" target="_blank">Online Giving</a></li>
                        <li><a href="./contact">Contact us</a></li>
                        <!--<li><a href="auth.html">Join / Login </a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo">
                    <a href="index">
                        <img class="dark-logo" src="assets/img/logo/logo-dark.png" alt="" />
                        <img class="light-logo" src="assets/img/logo/logo.png" alt="" />
                    </a>
                </div>

                <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                    <div class="icon-m">
                        <i class="menu-icon-close fas fa-times"></i>
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>

                    <div class="text-menu">
                        <div class="text-button">Menu</div>
                        <div class="text-open">Open</div>
                        <div class="text-close">Close</div>
                    </div>
                </div>

                <div class="nav">
                    <div class="inner">
                        <div class="nav__content">

                        </div>
                    </div>
                </div>
                <div class="nav-content">
                    <div class="inner-content">
                        <address class="v-middle">
                            <p class="mt-10">
                                <strong>Abuja: </strong>
                                Statement Hotel by Abia House, Plot 1002,<br>1st Avenue, Central Business District, Abuja
                            </p>

                            <p class="mt-20">
                                <strong>Lagos (Lekki): </strong>
                                Delight Center, 4 Oriwu Street
                                <br> (via Elf Bus-stop) Lekki Phase 1, Lagos
                            </p>

                            <p class="mt-20 mb-10">
                                <strong>Lagos (Ikeja): </strong>
                                30b Opebi Road, Ikeja, Lagos
                            </p>
                            <span>+234 701 738 7222</span>
                            <span>info@petracc.org</span>
                        </address>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End Nav Bar -->

    <main class="main-root">
        <div id="dsn-scrollbar">


        <header>
                <div class="headefr-fexid headefr-fexid-onepage" data-dsn-header="project" >
                    <div class="bg has-top-bottom" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                        <!-- <div class=" " data-dsn="video" data-overlay="4">
                            <video class="bg-image cover-bg dsn-video" poster="assets/img/video-bg.jpg" autoplay loop
                                muted>
                                <source src="http://theme.dsngrid.com/video/videos.mp" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            
                        </div> -->
                    </div>

                    <div class="project-page__inner" style="">
                        <div class="h-80">
                            <div class="row justify-content-center align-items-center h-1">
                                <div class="project-title" id="dsn-hero-parallax-title">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/7v4s2PY97FE?autoplay=1&enablejsapi=1&disablekb=1&controls=0&showinfo=0&loop=1&modestbranding=1" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>></iframe>
                                        
                                    </div>                                
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row  mt-30">
                                        <div class="col-lg-5">
                                            <div class="pro-text ">
                                                <h4  style="color: #fff;">Worship Cafe.</h4>
                                                <br>
                                                <h5 class="text-muted" >Ministering:<strong> Pastor Ayo Ajani</strong></h5>
                                                <p class="mt-5 text-muted">27 March, 2020</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 ">
                                            <div class="fabs">
                                                <a href="#" class="stream-icon" data-toggle="modal"  data-target="#petra-modal">
                                                    <i class="fa fa-bell-o "></i>
                                                    <span > Join </span>
                                                </a>
                                                <a href="https://paystack.com/pay/petra_give" class="stream-icon">
                                                    <i class="fa fa-heart-o "></i>
                                                    <span > Give </span>
                                                </a>
                                                <a href="#" class="stream-icon">
                                                    <i class="fa fa-send-o "></i>
                                                    <span > Share</span>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>



            <!-- <div class="wrapper">
                <div class="box-seat box-seat-full section-margin">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img data-dsn-scale="1" data-dsn-y="30%" src="assets/img/petra/PM8-20.jpg" alt="">
                            <div class=" " data-dsn="video" data-overlay="4" data-dsn-scale="1" data-dsn-y="30%">
                                <iframe style="width: 100vw; height: 100vh;" src="https://www.youtube.com/embed/wQ6-i8hI3Gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            
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
                                <strong>Theme:</strong> No Fear Here!
                            </p>
                            <div id="getting-started" class="dsn-wrapper" style="color:#ffffff; font-size: 24px;">
                            </div>
                            <div class="link-custom">
                                <a href="#" data-toggle="modal" data-src="https://www.youtube.com/embed/p8CABXme7_Y" data-target="#petra-modal" class="image-zoom effect-ajax video-btn" data-dsn="parallax">
                                <a href="#" data-toggle="modal" data-src="https://www.youtube.com/embed/lFhVfJGfuSg?autoplay=0&enablejsapi=1&disablekb=1&controls=0&showinfo=0&loop=1&modestbranding=1" data-target="#petra-modal" class="image-zoom effect-ajax video-btn" data-dsn="parallax">
                                <iframe width="424" height="238" src="https://www.youtube.com/embed/lFhVfJGfuSg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <span>Stream Live Service</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <footer class="section-margin">
                <div class="info">
                    <div class="contact-footer">
                        <a href="tel:07017387222" class="phone image-zoom" data-dsn="parallax">0701 738 7222</a>
                        <a href="mailto:" class="email image-zoom" data-dsn="parallax">info@petracc.org</a>
                    </div>
                    <div class="copyright-social">
                        <p>Service Times: 9:00 am every Sunday & 6:30pm every Wednesday </p>
                        <ul>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/petrachristriancenter" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.facebook.com/petrachristiancentre" target="_blank">Facebook</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://twitter.com/Petra_CC" target="_blank">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </footer> -->

            <style>
                .icon-bar {
                    position: fixed;
                    top: 95%;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
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
                    color: #000
                    }

                    .mixlr {
                    background: #0C8ACD;
                    color: white;
                    }

            </style>


            <!-- audio alt -->
            <div class="icon-bar">
                <a href="#" class="mixlr">
                    <i class="fas fa-podcast" style="margin-right: 5px;"></i>
                    Listen on Mixlr
                </a>
            </div>
            <!-- /audio alt -->

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
        </div>
    </main>


    <div class="modal fade" id="petra-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content" style="padding-top: 30px;">
                <div class="modal-body">
                <span class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</span>
                    <div class="row" id="petra-join">
                        <div class="col-sm-12">
                            <h3 align="center ">Join eFam Church</h3>
                            <br>
                            <form id="biodata-form" class="form" data-toggle="validator" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-10 offset-1">
                                        <div class="messages"></div>
                                        
                                        <div class="input__wrap controls ">
                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>Name</label>
                                                    <input id="form_name" type="text" name="name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>" placeholder="Type your Full Name" required="required" data-error="Full Name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>Email</label>
                                                    <input id="form_email" type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Type your Email Address" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>Phone</label>
                                                    <input id="form_phone" type="text" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" placeholder="Type your Phone number" required="required" data-error="Phone number is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <br>
                                            <div class="image-zoom" data-dsn="parallax">
                                                <button type="submit" name="submit_biodata">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


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
    <script src="https://kit.fontawesome.com/997da4a5f7.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
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

        });
        // $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        // event.preventDefault();
        // $(this).ekkoLightbox();
        // });
        // })
    </script>
</body>


</html>
<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "Please submit your details first";
  	header('location: auth');
  }
?>


<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="Petra Christian Center" />

    <!--  Title -->
    <title>Petra Christian Center - Live Stream</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

</head>
<style>
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
        font-size: 2.5rem;
        font-weight: normal;
        color: #fff;
        opacity: 1;
        border: none!important;
        background-color: none!important;
    }
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">Welcome to Petra Christian Center</div>
            <div class="percent">0</div>
            <div class="loading">loading...</div>
        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>

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
                        <!--<li><a href="#">About</a></li>-->
                        <li><a href="./sermons.html">Sermons</a></li>
                        <li><a href="live.html">Live Service</a></li>
                        <li><a href="https://paystack.com/pay/petra_give" target="_blank">Giving</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="auth.html">Join / Login </a></li>
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
                            <span>Statement Hotel by Abia House, Plot 1002,</span>
                            <span>1st Avenue, Central Business District, Abuja</span>
                            <span>0701 738 7222, 0701 738 7222</span>
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
            <div class="wrapper">
                <div class="box-seat box-seat-full section-margin">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img data-dsn-scale="1" data-dsn-y="30%" src="assets/img/petra/PM8-20.jpg" alt="">
                            <!-- <div class=" " data-dsn="video" data-overlay="4" data-dsn-scale="1" data-dsn-y="30%">
                                <iframe style="width: 100vw; height: 100vh;" src="https://www.youtube.com/embed/wQ6-i8hI3Gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
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
                            <div id="getting-started" class="dsn-wrapper" style="text-align: left; color:#ffffff; font-size: 24px;">
                            </div>
                            <div class="link-custom">
                                <!-- <a href="#" data-toggle="modal" data-src="https://www.youtube.com/embed/p8CABXme7_Y" data-target="#petra-modal" class="image-zoom effect-ajax video-btn" data-dsn="parallax"> -->
                                <a href="#" data-toggle="modal" data-src="https://www.youtube.com/embed/lFhVfJGfuSg?autoplay=0&enablejsapi=1&disablekb=1&controls=0&showinfo=0&loop=1&modestbranding=1" data-target="#petra-modal" class="image-zoom effect-ajax video-btn" data-dsn="parallax">
                                <!-- <iframe width="424" height="238" src="https://www.youtube.com/embed/lFhVfJGfuSg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    <span>Stream Live Service</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="section-margin">
                <div class="info">
                    <div class="contact-footer">
                        <a href="tel:07017387222" class="phone image-zoom" data-dsn="parallax">0701 738 7222</a>
                        <a href="mailto:" class="email image-zoom" data-dsn="parallax">info@petracc.org</a>
                    </div>
                    <div class="copyright-social">
                        <p>Service Times: 9:00 am every Sunday </p>
                        <ul>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/tribepetra" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.facebook.com/petrachristiancentre" target="_blank">Facebook</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://twitter.com/Petra_CC" target="_blank">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

            <!-- Chatra {literal} -->
            <script>
                (function(d, w, c) {
                    w.ChatraID = 'YbCezNt4cKjwwXK3o';
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


    <!-- video modal -->

    <div class="modal fade" id="petra-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <span class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">&times;</span>
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>></iframe>
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
    <div class="global-cursor">
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
    </div>
    <!-- End cursor -->

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/dsn-grid.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#getting-started").countdown("2020/3/22", function(event) {
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
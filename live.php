<?php 
// include('server.php') 
// $db = mysqli_connect('localhost', 'root', '', 'petracc');



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
    <link rel="stylesheet" href="assets/css/swal.min.css">
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
    <?php include('./assets/includes/navbar.php') ?>
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

                    <div class="project-page__inner">
                        <div class="h-80">
                            <div class="row justify-content-center align-items-center h-1">
                                <div class="project-title" id="dsn-hero-parallax-title">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/FA1sqW1WEqU?autoplay=1&enablejsapi=1&disablekb=1&controls=0&showinfo=0&loop=1&modestbranding=1" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>></iframe>
                                    </div>                                
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row  mt-30">
                                        <div class="col-lg-5">
                                            <div class="pro-text ">
                                                <h4  style="color: #fff;">Don't Curse The Darkness</h4>
                                                <br>
                                                <h5 class="text-muted" ><!--Ministering:--><strong> Pastor Adeola Ajani </strong></h5>
                                                <p class="mt-5 text-muted">31st May, 2020</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 ">
                                            <div class="fabs">
                                                <a href="#" class="stream-icon" data-toggle="modal"  data-target="#petra-modal">
                                                    <i class="fa fa-bell-o "></i>
                                                    <span > Join </span>
                                                </a>
                                                <a href="https://online.petracc.org/online-giving" class="stream-icon">
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

            <style>
                .icon-bar {
                    position: fixed;
                    bottom: 0%;
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


            <!-- audio alt ->
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
                                                <button type="submit" name="submit_biodata">Submit <i class="fa fa-circle-o-notch fa-spin ml-10 spinning"></i></button>
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
    <script src="assets/js/swal.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.spinning').toggle();   
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

            $('#biodata-form').on('submit', (e)=>{
                e.preventDefault();
                
                var $form = $('form#biodata-form');
                var $inputs = $form.find("input, select, button, textarea");
                var $loader = $('.spinning');

                $inputs.prop("disabled", true);
                $loader.toggle();

                var $serialized = $('#biodata-form').serializeArray();

                var clean = {};

                $.each($serialized, (key, value) => {
                    clean[$serialized[key].name] = $serialized[key].value;
                })

                request = $.ajax({
                    url: "live.php",
                    type: "post",
                    data: clean
                });

                // Callback handler (on success)
                request.done(function (res, textStatus, jqXHR) {
                    console.log(res)
                    Swal.fire({
                        icon: res.success ? 'success' : 'error',
                        title: res.success ? 'Done!' : 'Oops...',
                        text: res.message
                    })
                });

                // Callback handler (failed)
                request.fail(function (jqXHR, textStatus, errorThrown) {
                    // console.error(
                    //     "The following error occurred: " +
                    //     textStatus, errorThrown
                    // );
                });

                // Callback handler
                request.always(function () {
                    $inputs.prop("disabled", false);
                    $loader.toggle();
                });

                console.log(clean)
            })

        });
    </script>
</body>


</html>

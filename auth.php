<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="Petra Christian Centre" />

    <title>Petra Christian Centre - Auth page</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<style>
    .petra-card {
        border-radius: 10px;
        background: #fff;
        padding: 20px;
        margin: 0 auto 0 auto;
        box-shadow: 0px 15px 20px rgba(55, 72, 59, 0.03);
    }
    
    body.bg-full-screen-image {
        background: url(assets/img/bg.jpg) center center no-repeat;
        background-size: cover;
    }
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax bg-full-screen-image " data-dsn-mousemove="true">
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
                        <li><a href="./sermon">Sermons</a></li>
                        <li><a href="#">Live Service</a></li>
                        <li><a href="#">Giving</a></li>
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
                            <span>Statement Hotel by Abia House, Plot 1002,</span>
                            <span>1st Avenue, Central Business District, Abuja</span>
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
            <div class="wrapper">
                <div class="root-contact">
                    <div class="container section-margin">
                        <div class="row">
                            <div class="col-lg-7 petra-card">
                                <!-- <div class="row" id="petra-login">
                                    <div class="col-lg-12">
                                        <div class="form-box">
                                            <h4 align="center">Login</h4>
                                            <br><br>
                                            <form id="contact-form " class="form" data-toggle="validator">
                                                <div class="row">
                                                    <div class="col-lg-10 offset-1">
                                                        <div class="messages"></div>
                                                        <br>
                                                        <div class="input__wrap controls ">
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Email</label>
                                                                    <input id="form_email" type="email" name="email" placeholder="Type your Email Address" required="required" data-error="Valid email is required.">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Password</label>
                                                                    <input id="form_password" type="password" name="password" placeholder="Type your password" required="required">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br>
                                                            <div class="image-zoom " data-dsn="parallax">
                                                                <button class="push-left">Login</button>
                                                            </div>
                                                            <br>
                                                            <div class="text-center">
                                                                <p class="">Don't have an account?
                                                                    <a href="#" class="petra-join">
                                                                        <strong style="color: #5A8DEE">Sign up</strong>
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row" id="petra-join">
                                    <div class="col-sm-12">
                                        <div class="form-box">
                                            <h4 align="center">Join</h4>
                                            <br><br>
                                            <form id="biodata-form" class="form" data-toggle="validator" method="post" action="">
                                                <div class="row">
                                                    <div class="col-lg-10 offset-1">
                                                        <div class="messages"></div>
                                                        <?php include('errors.php'); ?>
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
                                                            <!-- <br>
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Password</label>
                                                                    <input id="form_password" type="password" name="password" placeholder="Type your password" required="required">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Comfirm password</label>
                                                                    <input id="form_password" type="password" name="password" placeholder="Re type your password" required="required">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br> -->
                                                            <!-- <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Facebook Handle</label>
                                                                    <input id="form_fb" type="text" name="fb" <?php if(isset($_POST['fb'])) echo $_POST['fb']; ?>" placeholder="Type your Facebook Handle">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Twitter Handle</label>
                                                                    <input id="form_tweet" type="text" name="twitter" <?php if(isset($_POST['twitter'])) echo $_POST['twitter']; ?> placeholder="Type your Twitter Handle">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="entry">
                                                                    <label>Instagram Handle</label>
                                                                    <input id="form_ig" type="text" name="instagram" <?php if(isset($_POST['instagram'])) echo $_POST['instagram']; ?> placeholder="Type your Instagram Handle">
                                                                </div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <br> -->
                                                            <br>
                                                            <div class="image-zoom" data-dsn="parallax">
                                                                <button type="submit" name="submit_biodata">Submit</button>
                                                            </div>
                                                            <br>
                                                            <!-- <div class="text-center">
                                                                <p class="">Already have an account?
                                                                    <a href="#" class="petra-login">
                                                                        <strong style="color: #5A8DEE">Login</strong>
                                                                    </a>
                                                                </p>
                                                            </div> -->
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

                </div>
                <footer>
                    <div class="info">
                        <div class="contact-footer">
                            <a href="tel:010" class="phone image-zoom" data-dsn="parallax">01-356-789</a>
                            <a href="#" class="email image-zoom" data-dsn="parallax">info@petracc.org</a>
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
            </div>
        </div>
    </main>

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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA49hGCmzG22gXOfg784H0w8DtKEsSvq7k"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js.map"></script>

    <script>
        $(document).ready(function() {
            // $('#petra-login').hide();
            // $('.petra-join').on('click', function() {
            //     $('#petra-join').show();
            //     $('#petra-login').hide();
            // });

            // $('.petra-login').on('click', function() {
            //     $('#petra-login').show();
            //     $('#petra-join').hide();
            // });

        });
    </script>

</body>

</html>
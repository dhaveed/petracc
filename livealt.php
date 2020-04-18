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
        <link href="assets/css/live.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/swal.min.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="assets/css/display-helper.css">

    </head>

    <body style="overflow: hidden;">

        <style>
            main {
                display: flex;
                height: 100%;
                flex-direction: column;
            }
        </style>

        <main class="hidden-xs hidden-sm hidden-md">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand" href="#">
                    <img class="light-logo ml-3" src="assets/img/logo/logo.png" alt="" width="55" height="55" />
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span> <i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="collapse_target">
                    <ul class="nav navbar-nav  ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Sessions
                    </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./sermons">Sermons</a></a>
                                <a class="dropdown-item" href="./cafe">Worship Cafés</a>
                                <a class="dropdown-item" href="./couch">Couch Sessions</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./kids">TribePetra Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sgroups">Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://paystack.com/pay/petra_give" target="_blank">Online Giving</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Nav Bar -->

            <style>
                .main-content.row-flex {
                    display: flex;
                    /* border: 1px solid red; */
                    height: 100%;
                    max-height: 100%;
                    background: gray
                }
                
                .main-content.row-flex div.video-box {
                    flex: 2;
                    display: flex
                }
                
                .main-content.row-flex div.util-box {
                    flex: 0.55;
                }
                
                .video-box div.tv {
                    flex: 1;
                }
                
                .video-box div.tv .stream-frame {
                    width: 100%;
                    height: 100%;
                    border: none;
                }
                
                .pro-text h4 {
                    margin-top: 15px;
                }
            </style>

            <section class="main-content row-flex">
                <div class="video-box">
                    <div class="tv">
                        <iframe class="stream-frame" src="https://www.youtube.com/embed/7v4s2PY97FE?rel=0" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscren></iframe>
                    </div>
                </div>
                <div class="util-box">
                    <div class="petra-nav">
                        <ul class="nav nav-pills" style='background-color: rgb(246, 246, 246); padding-top: 0px; padding-bottom: 0px;  overflow-x: auto'>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#chat">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#note">NOTE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#Bible">BIBLE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#schedule">SCHEDULE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#petra-modal" href="#">JOIN</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade chat container active show" id="chat">
                                <div id="arena-chat" data-publisher="petra-christian-center" data-chatroom="55ut" data-position="in-page"></div>
                                <script async src="https://go.arena.im/public/js/arenachatlib.js?p=petra-christian-center&e=55ut"></script>
                            </div>
                            <div class="tab-pane container fade note" id="note">
                                <!-- <div class="pro-text " style="overflow: auto; height: 90%;"> -->
                                <h4>The Gift of Peace.</h4>
                                <h5 class="text-muted">Ministering:<strong> Pastor Ayo Ajani</strong></h5>
                                <p class="text-muted">29 March, 2020</p>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ea quod asperiores sed repellat dolore, lor Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia, minima exercitationem? Consectetur asperiores ipsam doloribus libero? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex totam amet blanditiis, illum odit laboriosam quos sapiente laborum voluptas omnis beatae perferendis aliquid deleniti vero. Ut dolor unde minima neque. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, doloremque fugit ab dolores nobis ex dignissimos id pariatur sint sed ullam expedita nulla beatae amet, libero illo? Cumque, eos quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia, minima exercitationem? Consectetur asperiores ipsam doloribus libero? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia. The END!!!
                                </p>
                                <!-- </div> -->
                            </div>
                            <div class="tab-pane container fade bible" id="Bible">
                                <iframe title="bible" src="https://chop.bible.com/en/bible/111/GEN.1.niv" frameborder="0" class="bible-iframe" style="width: inherit;"></iframe>
                            </div>
                            <div class="tab-pane container schedule fade" id="schedule">
                                <div>
                                    <div class="live-schedule">
                                        <h5>Sunday Service</h5>
                                        <div class="live-schedule-card">
                                            <div class="live-schedule-content">
                                                <div class="live-schedule-time" style="margin-top:10px;">6:30pm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-schedule">
                                        <h5>Wednessday Service</h5>
                                        <div class="live-schedule-card">
                                            <div class="live-schedule-content">
                                                <div class="live-schedule-time">9:00am</div>
                                                <small>Couch Session</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-schedule">
                                        <h5>Saturday Service</h5>
                                        <div class="live-schedule-card">
                                            <div class="live-schedule-content">
                                                <div class="live-schedule-time">6:00pm</div>
                                                <small>Worship café</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <div class="row hidden-lg hidden xl">
            <div class="col-xs-12 col-md-12">
                <div class="live-video embed-responsive">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7v4s2PY97FE?rel=0" id="video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscren></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 ">
                <div class="petra-nav">
                    <ul class="nav nav-pills" style='background-color: rgb(246, 246, 246); padding-top: 0px; padding-bottom: 0px;  overflow-x: auto'>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#chat">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#note">NOTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Bible">BIBLE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#schedule">SCHEDULE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#petra-modal" href="#">JOIN</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade chat container active show" id="chat">
                            <div id="arena-chat" data-publisher="petra-christian-center" data-chatroom="55ut" data-position="in-page"></div>
                            <script async src="https://go.arena.im/public/js/arenachatlib.js?p=petra-christian-center&e=55ut"></script>
                        </div>
                        <div class="tab-pane container fade note" id="note">
                            <!-- <div class="pro-text " style="overflow: auto; height: 90%;"> -->
                            <h4>The Gift of Peace.</h4>
                            <h5 class="text-muted">Ministering:<strong> Pastor Ayo Ajani</strong></h5>
                            <p class="text-muted">29 March, 2020</p>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ea quod asperiores sed repellat dolore, lor Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia, minima exercitationem? Consectetur asperiores ipsam doloribus libero? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex totam amet blanditiis, illum odit laboriosam quos sapiente laborum voluptas omnis beatae perferendis aliquid deleniti vero. Ut dolor unde minima neque. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, doloremque fugit ab dolores nobis ex dignissimos id pariatur sint sed ullam expedita nulla beatae amet, libero illo? Cumque, eos quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia, minima exercitationem? Consectetur asperiores ipsam doloribus libero? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia. Consectetur explicabo voluptates numquam est aperiam debitis veniam maxime inventore vel sequi, earum et quia. The END!!!
                            </p>
                            <!-- </div> -->
                        </div>
                        <div class="tab-pane container fade bible" id="Bible">
                            <iframe title="bible" src="https://chop.bible.com/en/bible/111/GEN.1.niv" frameborder="0" class="bible-iframe" style="width: inherit;"></iframe>
                        </div>
                        <div class="tab-pane container schedule fade" id="schedule">
                            <div>
                                <div class="live-schedule">
                                    <h5>Sunday Service</h5>
                                    <div class="live-schedule-card">
                                        <div class="live-schedule-content">
                                            <div class="live-schedule-time" style="margin-top:10px;">6:30pm</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-schedule">
                                    <h5>Wednessday Service</h5>
                                    <div class="live-schedule-card">
                                        <div class="live-schedule-content">
                                            <div class="live-schedule-time">9:00am</div>
                                            <small>Couch Session</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-schedule">
                                    <h5>Saturday Service</h5>
                                    <div class="live-schedule-card">
                                        <div class="live-schedule-content">
                                            <div class="live-schedule-time">6:00pm</div>
                                            <small>Worship café</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="petra-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content" style="padding-top: 30px;">
                    <div class="modal-body">
                        <span class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true" style="cursor: pointer;">×</span>
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
                                                    <input type="submit" name="submit_biodata"><i class="fa fa-circle-o-notch fa-spin ml-10 spinning"></i>
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

                $('#biodata-form').on('submit', (e) => {
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
                    request.done(function(res, textStatus, jqXHR) {
                        console.log(res)
                        Swal.fire({
                            icon: res.success ? 'success' : 'error',
                            title: res.success ? 'Done!' : 'Oops...',
                            text: res.message
                        })
                    });

                    // Callback handler (failed)
                    request.fail(function(jqXHR, textStatus, errorThrown) {
                        // console.error(
                        //     "The following error occurred: " +
                        //     textStatus, errorThrown
                        // );
                    });

                    // Callback handler
                    request.always(function() {
                        $inputs.prop("disabled", false);
                        $loader.toggle();
                    });

                    console.log(clean)
                })

            });
        </script>
    </body>

    </html>
<?php include('admin/inc/function.php'); ?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="mdfcapitals.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Connecting individuals and communities together in the metaverse, enabling the creation and exploration of virtual worlds from any device.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="assets/favicon.jpeg">
    <!-- Site Title  -->
    <title> Meta Dream Force | Metaverse & Gaming Platform.</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle8bfc.css?ver=1420">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style8bfc.css?ver=1420">
    <link rel="stylesheet" href="assets/css/theme-orange8bfc.css?ver=1420" id="layoutstyle">
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <style>
        .qr-style {
            z-index: 5;
            position: absolute;
            -webkit-transform: translate(-47%, -50%);
            -moz-transform: translate(-47%, -50%);
            -o-transform: translate(-47%, -50%);
            -ms-transform: translate(-47%, -50%);
            transform: translate(-47%, -50%);
            left: 49%;
            scale: 0.85;
            top: 50% !important;
            margin-top: -30px;
        }


        @media only screen and (max-width: 600px) {
            .coin {
                max-width: 250px;
            }

            .coinbox {
                min-height: 250px;
            }

            .glass {
                position: absolute;
                z-index: 11111111;
                top: 153px !important;
            }
        }

        .pdfooter {
            padding-top: 62px;
            padding-bottom: 0px !important;
        }

        .gaps {
            background: #070c16;
        }

        .circlebg1 {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 1;
        }

        .circlebg2 {
            position: absolute;
            left: 0;
            right: 0;
            top: 30px;
            z-index: 1;
            margin: auto;
            text-align: center;
        }

        .circlebg3 {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1;
        }
    </style>

    <script>
        function withJquery() {
            console.time('time1');
            var temp = $("<input>");
            $("body").append(temp);
            temp.val($('#copyText1').text()).select();
            document.execCommand("copy");
            temp.remove();
            console.timeEnd('time1');
        }
    </script>



</head>

<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#mainnav" data-offset="80">
    <!-- Header -->
    <header class="site-header is-sticky">
        <!-- Place Particle Js -->
        <div id="particles-js" class="particles-container particles-js"></div>
        <!-- Navbar -->
        <div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav">
            <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="index.php">
                <img class="logo logo-dark" alt="logo" src="assets/fav.jpeg">
                <img class="logo logo-light" alt="logo" src="assets/fav.jpeg">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                <span class="navbar-toggler-icon"><span class="ti ti-align-justify"></span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">

                    <li class="nav-item"><a class="nav-link menu-link" href="index.php#why">About<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="index.php#benifits">Benifits</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="index.php#tokenAlocate">Token Sale</a></li>
                    <!-- <li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link menu-link" href="whitepaper.pdf" target="_blank">White Paper</a></li> -->
                    <li class="nav-item"><a class="nav-link menu-link" target="_blank" href="assets/plan.pdf">Plan</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="index.php#faq">Faqs</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="document.php">Legal Document</a></li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-button" href="#">Gallery <i class="ti ti-angle-down small"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="image-gallery.php">Image</a>
                            <a class="dropdown-item" href="video-gallery.php">Video</a>
                        </div>
                    </li>
                    <li class="nav-item d-lg-none"><a class="nav-link menu-link" href="image-gallery.php">Image Gallery</a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link menu-link" href="video-gallery.php">Video Gallery</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="index.php#contact">Contact</a></li>

                </ul>
                <!--<ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                    <li class="nav-item lang-switch">
                        <a class="" href="#" data-toggle="dropdown">English <em class="ti ti-angle-down"></em></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Chinese</a>
                            <a class="dropdown-item" href="#">Hindi</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="login.html">Login</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="signup.html">New Account</a></li>
                </ul>-->
            </div>
        </div>

        <div id="header" class="banner banner-zinnia">

            <div class="ui-shape ui-shape-light ui-shape-header"></div>
            <div class="container">
                <div class="banner-content">
                    <h1 class="text-center"><u>Video Gallery</u></h1>
                    <div class="row align-items-center">
                        
                        <?php
                            $result = getVideoGallery($conn);
                            $num=numrows($result);
                            $i=1;
                            if($num>0){
                                while($fetch=fetcharray($result)){
                                ?>
                                <div class="col-md-4 d-flex justify-content-center mt-1">
                                    <div class="card" style="width: 18rem;">
                                        <?php
                                        if($fetch['type'] == 'upload'){
                                        ?>
                                        <video style="height: 180px; width: 100%; display: block;" controls>
                                            <source src="admin/uploads/videos/<?php echo $fetch['video'] ;?>" >
                                        </video>
                                        <?php 
                                        } else {
                                        ?>
                                        <iframe style="height: 180px; width: 100%;" src="<?=$fetch['video']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        <?php } ?>
                                      <div class="card-body">
                                        <p class="card-text text-dark text-bold"><?php echo $fetch['message'] ;?></p>
                                      </div>
                                    </div>
                                </div>
                                <?php
                                    $i++;
                                }}
                                ?>


                    </div>
                </div>
            </div>
            
    </header>
    
    
    <div class="section footer-section section-pad-md no-pb pdfooter">
        <div class="ui-shape ui-shape-light ui-shape-footer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm">
                    <div class="widget-item">
                        <h5 class="widget-title">fEATURES</h5>
                        <ul class="widget-links">
                            <li><a href="#">Live Chat</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">User Analytics</a></li>
                            <li><a href="#">Crypto Exchange</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col -->
                <div class="col-lg-3 col-sm">
                    <div class="widget-item">
                        <h5 class="widget-title">RESOURCES</h5>
                        <ul class="widget-links">
                            <li><a href="#roadmap">Roadmap</a></li>
                            <!-- <li><a href="images/MDF CAPITALS-whitepaper.pdf" target="_blank">Whitepaper</a></li> -->
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Privacy &amp; policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col -->
                <div class="col-lg-2 col-sm">
                    <div class="widget-item">
                        <h5 class="widget-title">Company</h5>
                        <ul class="widget-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#TokenSale">Tokens Details</a></li>
                            <li><a href="#">Vision & Mission</a></li>

                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col -->
                <div class="col-lg-4">
                    <div class="widget-item">
                        <h5 class="widget-title widget-title-ncap">NewsLetter</h5>
                        <div class="widget-subsctibe">
                            <p>To learn more about trust management of digital assets, how to use MDF CAPITALS, and to
                                meet the team!</p>
                            <form id="subscribe-form" action="" method="post"
                                class="subscription-form subscription-form-sm">
                                <input type="text" name="youremail" class="input-round required email"
                                    placeholder="Enter mail">
                                <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                <button type="submit" class="btn btn-plane"><i class="fas fa-paper-plane"></i></button>
                                <div class="subscribe-results"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-sm-6 res-m-bttm"><a class="footer-brand" href="index.php"><img
                                class="logo logo-light" alt="logo" src="cclogo.png"></a></div>
                    <div class="col-sm-6 text-sm-right"><span class="copyright-text"> &copy; mdfcapitals.com, 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="preloader">
        <div id="loader"></div>
        <div class="loader-section loader-top"></div>
        <div class="loader-section loader-bottom"></div>
    </div>
    <script src="assets/js/jquery.bundle8bfc.js?ver=1420"></script>
    <script src="assets/js/script8bfc.js?ver=1420"></script>

</body>

</html>
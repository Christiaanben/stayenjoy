<?php
//index_backup.php
?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <title>Accommodation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark indexNavbar" id="ftco-navbar" style="position: fixed; overflow:auto;">
        <div class="container float-left d-flex justify-content-start">
            <a href="index_backup.php">
                <i class="fas fa-arrow-left navbar-brand backbtn"></i>
            </a>
            <a class="navbar-brand" style="color: #000; font-size: 24px;" href="index_backup.php">Welcome to StayEnJoy!</a>
            <a class="navbar-brand" style="color: #000; font-size: 18px; margin-left: 70px" href="index_backup.php">Please choose where you would like to stay:</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        </div>
    </nav>
    <!--HOME-->
    <div class="" style="margin: 0px; width: 104%;">
        <div class="row" style="height: 600px;">
            <div class="col-lg-6 col-md-6 col-sm-6" style="background-image: url('images/9.jpg');">
                <div class="overlayIndex indexOpac"></div>
                <div class="ftco-animate grow" style="margin-top: 200px; font-size: 20px">
                    <h1 class="mb-3 " style="color: white">Gordons Bay</h1>
                    <h2 class="mb-3 " style="color: white">Holiday home</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="background-image: url('images/9.jpg');">
                <div class="overlayIndex indexOpac"></div>
                <div class="ftco-animate" style="margin-top: 200px;">
                    <h1 class="mb-3 grow" style="color: white">Gordons Bay</h1>
                    <h2 class="mb-3 grow" style="color: white">Holiday home</h2>
                </div>
            </div>
        </div>
    </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section" style="width: 104%; padding-top: 25px; overflow: hidden; padding-bottom: 10px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
    <style>
      .overlayIndex {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        background: #000;
         }

        .indexOpac{
          opacity: .45;
        }

        .indexOpac:hover{
          opacity: 0;
        }
        .grow { transition: all .2s ease-in-out; }
        .grow:hover { transform: scale(1.1); }

        .indexNavbar {
            background: #fff !important;
            position: absolute;
            left: 0;
            right: 0;
            z-index: 3;
            top: 0px;
        }

        @media (max-width: 991.98px) {
            .indexNavbar {
                background: white;
                top: 0;
                position: relative;
            }
        }

        .indexNavbar .navbar-nav>.nav-item>.nav-link {
            font-size: 16px;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 20px;
            padding-right: 20px;
            color: #000;
            opacity: 1 !important;
        }

        .indexNavbar .navbar-nav>.nav-item>.nav-link:hover {
            color: #fff;
        }

        @media (max-width: 991.98px) {
            .indexNavbar .navbar-nav>.nav-item>.nav-link {
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 0px;
                padding-right: 0px;
            }
        }

        .indexNavbar .navbar-nav>.nav-item.ftco-seperator {
            position: relative;
            margin-left: 20px;
            padding-left: 20px;
        }

        @media (max-width: 991.98px) {
            .indexNavbar .navbar-nav>.nav-item.ftco-seperator {
                padding-left: 0;
                margin-left: 0;
            }
        }

        .indexNavbar .navbar-nav>.nav-item.ftco-seperator:before {
            position: absolute;
            content: "";
            top: 10px;
            bottom: 10px;
            left: 0;
            width: 2px;
            background: rgba(255, 255, 255, 0.05);
        }

        @media (max-width: 991.98px) {
            .indexNavbar .navbar-nav>.nav-item.ftco-seperator:before {
                display: none;
            }
        }

        .indexNavbar .navbar-nav>.nav-item.cta>a {
            padding-left: 0;
            color: #fff;
        }

        .indexNavbar .navbar-nav>.nav-item.cta>a span {
            border: 2px solid #fff;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .indexNavbar .navbar-nav>.nav-item.cta.cta-colored span {
            border-color: #ff5f5f;
        }

        .indexNavbar .navbar-nav>.nav-item.active>a {
            color: rgba(255, 255, 255, 0.5);
        }

        .indexNavbar .navbar-toggler {
            border: none;
            color: rgba(255, 255, 255, 0.5) !important;
            cursor: pointer;
            padding-right: 0;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: .1em;
        }

        .indexNavbar.scrolled {
            position: fixed;
            right: 0;
            left: 0;
            top: 0;
            margin-top: -130px;
            background: #fff !important;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .indexNavbar.scrolled .nav-item.active>a {
            color: #ff5f5f !important;
        }

        @media (max-width: 991.98px) {
            .indexNavbar.scrolled .navbar-nav {
                background: none;
                border-radius: 0px;
                padding-left: 0rem !important;
                padding-right: 0rem !important;
            }
        }

        @media (max-width: 767.98px) {
            .indexNavbar.scrolled .navbar-nav {
                background: none;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        .indexNavbar.scrolled .navbar-toggler {
            border: none;
            color: rgba(0, 0, 0, 0.5) !important;
            border-color: rgba(0, 0, 0, 0.5) !important;
            cursor: pointer;
            padding-right: 0;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: .1em;
        }

        .indexNavbar.scrolled .nav-link {
            padding-top: 0.9rem !important;
            padding-bottom: 0.9rem !important;
            color: #000!important;
        }

        .indexNavbar.scrolled .nav-link.active {
            color: #ff5f5f !important;
        }

        .indexNavbar.scrolled.awake {
            margin-top: 0px;
            -webkit-transition: .3s all ease-out;
            -o-transition: .3s all ease-out;
            transition: .3s all ease-out;
        }

        .indexNavbar.scrolled.sleep {
            -webkit-transition: .3s all ease-out;
            -o-transition: .3s all ease-out;
            transition: .3s all ease-out;
        }

        .indexNavbar.scrolled .navbar-brand {
            color: #000;
        }

        @media only screen and (max-width: 360px) {}

        @media only screen and (max-width: 328px) {}

        @media only screen and (min-width: 992px) {}

        @media only screen and (min-width: 1085px) {}

        @media screen and (max-width: 735px) {}
    </style>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
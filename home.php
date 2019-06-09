<?php
$page = $_GET["name"];
include './pages/' . $page . '.php';


//index.php

$error = '';
$subject = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if (isset($_POST["book"])) {
	if ($error == '') {
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();                                //Sets Mailer to send message using SMTP
		$mail->Host = 'cp16.domains.co.za';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';                                //Sets the default SMTP server port
		$mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'info@stayenjoy.co.za';                    //Sets SMTP username
		$mail->Password = '10091996animax';                    //Sets SMTP password
		$mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'info@stayenjoy.co.za';                    //Sets the From email address for the message
		$mail->FromName = 'Stayenjoy';                //Sets the From name of the message
		$mail->AddAddress('joyvaneeden@gmail.com', 'Joy van Eeden');        //Adds a "To" address
		$mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
		$mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);                            //Sets message type to HTML
		$mail->Subject = 'Gordons Bay Accommodation Booking';                //Sets the Subject of the message
		$mail->Body = 'Good day,<br><br>
                       I would like to book your Gordons Bay holiday home for ' . $_POST["amount"] . ' people.<br>
                       From: ' . $_POST["from"] . '<br>
                       To: ' . $_POST["to"] . '<br>
                       Yours sincerely,<br>
                       ' . $_POST["name"] . '<br>
                       Cell:' . $_POST["phone"] . '<br><br>';
		if ($mail->Send())                                //Send an Email. Return true on success or false on error
		{
			$error = "<div onclick='bookingSuccess()'></div>";
		} else {
			$error = '<div class="overlayMessageSent"><h1 style="color: white; padding-top: 275px; z-index: 100;">Oops! Something went wrong.</h1></div>';
		}
		$subject = '';
		$message = '';
	}
}

if (isset($_POST["contact"])) {
	if ($error == '') {
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();                                //Sets Mailer to send message using SMTP
		$mail->Host = 'cp16.domains.co.za';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';                                //Sets the default SMTP server port
		$mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'info@stayenjoy.co.za';                    //Sets SMTP username
		$mail->Password = '10091996animax';                    //Sets SMTP password
		$mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'info@stayenjoy.co.za';                    //Sets the From email address for the message
		$mail->FromName = 'Stayenjoy';                //Sets the From name of the message
		$mail->AddAddress('joyvaneeden@gmail.com', 'Joy van Eeden');        //Adds a "To" address
		$mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
		$mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);                            //Sets message type to HTML
		$mail->Subject = 'Gordons Bay Accommodation Enquiry';                //Sets the Subject of the message
		$mail->Body = $_POST["message"];                //An HTML or plain text message body
		if ($mail->Send())                                //Send an Email. Return true on success or false on error
		{
			$error = "<div onclick='contactSuccess()'></div>";
		} else {
			$error = '<div class="overlayMessageSent"><h1 style="color: white; padding-top: 275px; z-index: 100;">Oops! Something went wrong.</h1></div>';
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}
}
?>


<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
	<title>Accommodation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
				integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
				integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
				crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body style="overflow-x: hidden;">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
		 style="position: fixed;  overflow:auto;">
	<div class="container">
		<a href="index.php">
			<i class="fas fa-arrow-left navbar-brand backbtn"></i>
		</a>
		<a class="navbar-brand" href="index.php">Accommodation</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
						aria-controls="ftco-nav" aria-expanded="false"
						aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#home" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#book" class="nav-link">Booking</a>
				</li>
				<li class="nav-item">
					<a href="#about" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="#pictures" class="nav-link">Pictures</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--HOME-->
<section class="home-slider owl-carousel" id="home" style="overflow-x: scroll; z-index: -1;">
	<div class="slider-item" style="background-image: url('images/9.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3"><?= $title ?></h1>
					<h2 class="mb-3" style="color: white"><?= $sub_title ?></h2>
					<?php echo $error; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="ftco-section-search" id="book">
	<div class="container">
		<div class="row">
			<div class="col-md-12 tabulation-search">
				<div class="element-animate">
					<div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link p-3" id="v-pills-profile-tab" href="#v-pills-profile" role="tab"
							 aria-controls="v-pills-profile" aria-selected="false">
							<span></span> Book your stay</a>
					</div>
				</div>
				<div class="tab-content py-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
							 aria-labelledby="v-pills-home-tab">
						<form method="post" class="d-block d-lg-flex">
							<div class="container" style="cursor: pointer; padding-left: 60px; padding-right: 60px;">
								<p id="result"></p>
								<div id="myMessageSent" class="overlayMessageSent">
									<h1 style="color: white; padding-top: 275px; z-index: 100;">Message sent! Thank
										you.</h1>
								</div>
								<div class="row">
									<div class="select-wrap col-12 d-flex justify-content-start"
											 style="color: white; margin-top: -28px; text-align: center; margin-bottom: 15px;">
										How many visitors?
										<br>
										<input type="number" name="amount" id="guests" min="1" max="10"
													 autocomplete="off" style="margin-left: 20px; height: 40px"
													 required pattern="^(1[0]|[1-9])$"
													 oninvalid="setCustomValidity('Number of people required. 1 - 10 people.')"
													 oninput="setCustomValidity('')">
									</div>
									<div class="check-in col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input type="text" id="checkin_date" autocomplete="off" name="from"
													 class="form-control mediaFormInput " placeholder="Check-in date"
													 style="width: auto;" required>
									</div>
									<div class="check-out col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input type="text" id="checkout_date" autocomplete="off" name="to"
													 class="form-control mediaFormInput" placeholder="Check-out date"
													 style="width: auto;" required>
									</div>
									<br>
									<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input type="text" id="name" name="name" autocomplete="off"
													 class="form-control mediaFormInput" placeholder="Name"
													 style="width: auto; "
													 required pattern="[A-Za-z]{1,30}"
													 oninvalid="setCustomValidity('Name required. Spaces and Letters allowed.')"
													 oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input type="email" id="email" name="email" autocomplete="off"
													 class="form-control mediaFormInput" placeholder="Email"
													 style="width: auto;"
													 required
													 oninvalid="setCustomValidity('Email required. Please enter valid email.')"
													 oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input type="tel" id="phone" name="phone" autocomplete="off"
													 class="form-control" placeholder="Phone" style="width: auto;"
													 pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required
													 oninvalid="setCustomValidity('Phone number required. Please enter valid phone number.')"
													 oninput="setCustomValidity('')">
									</div>
									<br>
									<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start"
											 style="margin-bottom: 34px;">
										<input class="mediaFormButton" name="book" type="submit" value="Submit"
													 onclick="bookingSuccess()" style="width: auto;">
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--ABOUT-->
<section class="ftco-section bg-light" style="padding-bottom: 10px;" id="about">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2>About</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon d-flex justify-content-center mb-3">
							<i class="fas fa-home" style="font-size: 70px; margin: auto"></i>
						</div>
					</div>
					<div class="media-body p-2">
						<h3 class="heading">171 Bikini Beach</h3>
						<?= $about ?>
					</div>
				</div>
			</div>
		</div>
</section>
<!--PICTURES-->
<section class="ftco-section bg-light" id="pictures" style="margin-top: -80px;">
	<div class="container-fluid">
		<div class="row no-gutters justify-content-center pb-5 ftco-animate">
			<div class="col-md-7 text-center heading-section">
				<h2>Pictures</h2>
			</div>
		</div>
		<div class="row no-gutters">

			<?php
				foreach ($rooms as $room => $pictures){
					echo "<div class='col-md-12 text-center heading-section' id='$pictures[0]'>
									<h4 style='margin-bottom:30px;'>$room</h4>
								</div>";
					for ($i = 1; $i < count($pictures); $i++) {
						$block_size=12/(count($pictures)-1);
						echo "<div class='col-md-$block_size col-lg-$block_size ftco-animate'>
										<a href='#$pictures[0]$i' class='block-5 img$i' style=\"background-image:url('$pictures[$i]');\"></a>
									</div>
									<div class='img$i-target' id='$pictures[0]$i'>
										<img src='$pictures[$i]'/>
										<a class='img$i-close' href='#$pictures[0]'></a>
									</div>";
					}
				}
			?>

		</div>
	</div>
</section>
<!--CONTACT-->
<section class="ftco-section bg-light" style="padding-bottom: 10px; margin-top: -85px; padding-bottom: 30px"
				 id="contact">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2>Contact</h2>
			</div>
		</div>
		<form method="post">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input type="text" id="cName" name="name" class="form-control mediaFormInput" autocomplete="off"
								 placeholder="Name" style="margin-bottom: 20px; width: 335px;"
								 required pattern="[A-Za-z]{1,30}"
								 oninvalid="setCustomValidity('Name required. Spaces and Letters allowed.')"
								 oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<input type="text" id="cEmail" name="email" class="form-control mediaFormInput" autocomplete="off"
								 placeholder="Email" style="margin-bottom: 20px; width: 335px;"
								 required oninvalid="setCustomValidity('Email required. Please enter valid email.')"
								 oninput="setCustomValidity('')">
					<textarea type="text" id="cMessage" name="message" class="form-control textareaInput"
										autocomplete="off" rows="8" placeholder="Message"
										style="margin-bottom: 20px;" required></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<input class="mediaFormButton" type="submit" name="contact" value="Send" onclick="contactSuccess()">
				</div>
			</div>
		</form>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Book Now</h2>
					<ul class="list-unstyled">
						<li>
							<a href="#book" class="py-2 d-block">Click here!</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Details</h2>
					<ul class="list-unstyled">
						<?=$details?>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script>
					All rights reserved
				</p>
			</div>
		</div>
	</div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
						stroke="#F96D00"/>
	</svg>
</div>
<style>
	.textareaInput {
		width: 460px;
	}

	.backbtn {
		font-size: 28px;
	}

	@media only screen and (max-width: 360px) {
		.textareaInput {
			width: 334px;
		}

		.backbtn {
			font-size: 28px;
		}
	}

	@media only screen and (max-width: 328px) {
		.backbtn {
			font-size: 28px;
			margin-right: 4px;
			margin-left: -5px;
		}
	}

	@media only screen and (min-width: 992px) {
		.backbtn {
			font-size: 28px;
			margin-right: 70px;
			margin-left: -5px;
		}
	}

	@media only screen and (min-width: 1085px) {
		.backbtn {
			font-size: 28px;
			margin-right: 80px;
			margin-left: -26px;
		}
	}

	@media screen and (max-width: 735px) {
		.block-5 {
			overflow: hidden;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			height: 120px;
			position: relative;
			display: block;
		}
	}

	.overlayMessageSent {
		opacity: 0.90;
		background: #000;
		width: 100%;
		height: 100%;
		z-index: 10;
		top: 0;
		left: 0;
		position: fixed;
	}
</style>
<script>
    $(document).ready(function () {
        $("#myMessageSent").hide();
        $(".overlayMessageSent").hide();
    });
</script>
<script>
    function bookingSuccess() {
        var dateIn, dateOut, name, email, phone;
        dateIn = $("#checkin_date").val();
        dateOut = $("#checkout_date").val();
        name = $("#name").val();
        email = $("#email").val();
        phone = $("#phone").val();
        guests = $("#guests").val();
        if ((dateIn !== '') && (dateOut !== '') && (name !== '') && (email !== '') && (phone !== '') && (guests !== '')) {
            $("#myMessageSent").show().delay(1000).fadeOut();
            setTimeout(function () {
                $("#myMessageSent").hide();
            }, 3000);
            $(".overlayMessageSent").show();
        }
    }

    function contactSuccess() {
        var cName, cEmail, cMessage;
        cName = $("#cName").val();
        cEmail = $("#cEmail").val();
        cMessage = $("#cMessage").val();
        if ((cName !== '') && (cEmail !== '') && (cMessage !== '')) {
            $("#myMessageSent").show();
            setTimeout(function () {
                $("#myMessageSent").hide();
            }, 3000);
        }
    }
</script>
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
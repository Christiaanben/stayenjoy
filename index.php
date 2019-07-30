<?php
$dir = './pages';
$files = scandir($dir);
$pages = array();
for($i = 0; $i < count($files); $i++){
	if (strpos($files[$i], '.php') !== false){
		array_push($pages, chop($files[$i], ".php"));
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>hi.guru Bots</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.1.3.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/code.js"></script>
	<script src="js/codeJquery.js"></script>

</head>

<body id="page-top" class="scroll">

<!-- Navbar with Back Button -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top normalSideNav shadow" id="sideNav">
	<a class="js-scroll-trigger" href="index.php">
		<i class="fas fa-home backBtn smallNavBack homebtn"></i>

		<span class="d-none d-lg-block">
        <i class="fas fa-home backBtn"></i>
      </span>

	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- HOMES & THEIR LINKS -->
	<div class="collapse navbar-collapse navCollapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<?php
			for($i = 0; $i < count($pages); $i++){
				$name = str_replace("_"," ",$pages[$i]);
				echo("<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"home.php?name=$pages[$i]\" target=\"_blank\">".$name."</a>
            </li>");
			}
			?>
		</ul>
	</div>
</nav>


<div class="container" style="">
	<div class="row logoItemMargin">

		<?php
		for($i = 0; $i < count($pages); $i++){
			$name = str_replace("_"," ",$pages[$i]);
			$picture = "images/".strtolower($pages[$i])."/cover.jpg";
			echo("<div class=\"col-lg-4 col-md-4 col-sm-12\">
                    <a href=\"home.php?name=$pages[$i]\" target=\"_blank\">
                      <div class=\"logoItem shadow mt-3\">
                        <div class=\"holder\">
                          <img src=\"$picture\" alt=\"$name\">
                          <div class=\"company-item\">
                            <h5 class=\"mt-3\">$name</h5>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>");
		}
		?>

	</div>
</div>

<hr class="m-0">



</body>

</html>
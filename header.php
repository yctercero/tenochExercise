<?php
	if(isset($_GET['b'])){
		$title = ucfirst($_GET['b']);
	}
	elseif ($_GET['b'] == "foodTruck") {
		$title = "Tenoch Food Truck";
	}
	else{
		$title = "Tenoch Mexican";
	}
?>


<!DOCTYPE html>
<head>
	<title>
		<?php
			echo $title;
		?>
	</title>

	<!-- CSS Stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Tenoch Mexican brings authentic, affordable, high quality Mexican food to the Boston area. We specialize in tortas, a popular Mexican pressed sandwich. ¡Buen provecho!">
	<meta name="author" content="Yara Tercero-Parker">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200italic,200,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<!-- JQUERY Slideshow Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
	<script src="script.js"></script>
</head>



<body <?php 
	if($_GET['b'] == "home"){
		echo "class=home";
	} elseif($_GET['b']){
		echo "class = '" . $_GET['b'] . "Page secondaryPage'";
	} else{
		echo "class=home";
	}

	 ?> >
	 <div id="mobNavList">
		<ul>
			<li><a href="index.php?b=menu">Our Menu</a></li>
			<li><a href="index.php?b=foodTruck">Food Truck</a></li>
			<li><a href="index.php?b=catering">We Cater</a></li>
			<li><a href="index.php?b=news">In The News</a></li>
			<li><a href="index.php?b=contact">Get In Touch</a></li>
		</ul>
	</div>
	<header>
		
		<div class="wrapper">
			<nav>
				<i class="fa fa-bars fa-2x"></i>
				<div id="mobileLogo">
					<a href="index.php?b=home"><img src="images/tenochLogo.png"></a>
				</div>
				<ul class="clear">
					<li  class="logo tabletLogo">
						<a href="index.php?b=home"><img src="images/tenochLogo.png"></a>
					</li>
					<li class="navLocations">
						<ul>
							<li>Medford, MA<i class="fa fa-angle-down fa-lg"></i></li>
							<li>(781) 395-2221</li>
							<li>M-Su 9AM - 9PM</li>
							<li>DIRECTIONS</li>
						</ul>
					</li>
					<li><a href="index.php?b=menu">Our Menu</a></li>
					<li><a href="index.php?b=foodTruck">Food Truck</a></li>
					<li  class="logo normalLogo">
						<a href="index.php?b=home"><img src="images/tenochLogo.png"></a>
					</li>
					<li><a href="index.php?b=catering">We Cater</a></li>
					<li><a href="index.php?b=news" class="twoLine">In The News</a></li>
					<li><a href="index.php?b=contact" class="twoLine">Get In Touch</a></li>
				</ul>
			</nav>
		</div>
		
	</header>
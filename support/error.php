<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    require "../connection/connection.php";
?>
<!DOCTYPE html>

<html lang="eng">

<head>

	<!-- Site title -->
	<title>Divisional Secretary Office - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon-->
	<link rel="icon"
		href="https://c0.klipartz.com/pngpicture/944/386/gratis-png-gobierno-de-la-gaceta-del-gobierno-de-sri-lanka-relaciones-entre-indonesia-y-sri-lanka-thumbnail.png"
		sizes="32x32" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
		rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	

	<!-- CSS -->
	<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link href="../layout/styles/Calender.css" rel="stylesheet" type="text/css" media="all">

</head>

<!-- Begin of body -->

<body id="top">

	<!-- Top header -->
	<div class="wrapper row0">
		<header id="header" class="hoc clear text-md-left">
			<!-- Start of header -->
			<div class="row">
				<div id="logo" class="col-md-2 text-center" >
					<a href="../index.php"><img src="../images/logo.png" class="d-flex w-50"></a>
				</div>
				<div class="col-md-7 text-center">
					<h1 class="p-2 font-x3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
						Divisional Secretary Office <br> Waththala</h1>
				</div>
				<div class="col-md-3 text-center " >
						<div class="avilability " style="border:2px solid #95103B; border-radius: 10px;">
							<h5 class="mt-3">Secretary | Available </h5>
						</div>
				</div>
			</div>
		</header>
	</div>

	<div class="wrapper row1">
		<section>

			<!-- Nav Bar Start -->
			<div class="nav ">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-md bg-dark navbar-dark">
						<a href="#" class="navbar-brand">MENU</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse"
							data-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
						</button>

						<!-- Main menu -->
						<div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
							<div class="navbar-nav nav-tabs mr-auto">
								<a href="../index.php" class="nav-item nav-link home " id="home" onclick="activeLink('home')">Home
									<hr class="hrhome"></a>
								<a href="../downloads.php" class="nav-item nav-link product" id="downloads" onclick="activeLink('downloads')">Downloads
									<hr class="hrproducts"></a>
								<a href="../online_application_home.php" class="nav-item nav-link prode" id="forms" onclick="activeLink('forms')">Online Forums
									<hr class="hrproductDetail"></a>
								<a href="../dashboard.php" class="nav-item nav-link cart" id="dashboard" onclick="activeLink('dashboard')">Dashboard
									<hr class="hrcart"></a>
								<a href="../contact.php" class="nav-item nav-link chk" id="contact" onclick="activeLink('contact')">Contact
									<hr class="hrchec"></a>
								<a href="../aboutUs.php" class="nav-item nav-link acc" id="about" onclick="activeLink('about')">About Us
									<hr class="hracc"></a>
								
							</div>
							<!-- User logins -->
							<div class="navbar-nav nav-tabs ml-auto">
								<?php 
									if(isset($_SESSION["logged"])){ 
										?>
								<p class="nav-item nav-link text-white font-weight-bold" >
										 Welcome 
										 <?php
										echo $_SESSION['username']; 
										}?> 
									</p>
							</div>

							<div class="navbar-nav nav-tabs ml-auto">
								<div class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Logout</a>
										<div class="dropdown-menu">
											<a href="logout.php" class="dropdown-item">Logout</a>
										</div>
								</div>
								<!-- <div class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
									<div class="dropdown-menu">
										<a href="login.php" class="dropdown-item">Login</a>
										<a href="register.php" class="dropdown-item">Register</a>
									</div>
								</div> -->
							</div>
						</div>
					</nav>
				</div>
			</div>
			<!-- Nav Bar End -->

		</section>
	</div>
	<!-- Search bar -->
	<div class="row" style="background-color:#AA5670;">
		<div class="col-md-3">
		</div>
		<div id="searchform" class="col-md-6">
			<div style="border: 2px solid white; border-radius: 4px;" class="mt-2 mb-2">
				<form action="#" method="post">
					<fieldset>
						<legend>Quick Search:</legend>
						<input class="text-white" type="text" placeholder="Enter search term&hellip;">
						<button type="submit"><i class="fas fa-search"></i></button>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>

    <div class="text-center h-50 mt-2">
        <span style="font-size:30em;" class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
        <h1 class="text-danger mt-5" style="font-size:5em;">You do not have access for this option</h1>
    </div>

<!-- Footer -->
<div class="wrapper row4">
		<footer id="footer" class="hoc clear">
			<div class="one_third first">
				<h6 class="heading">Divisional Secretary</h6>
				<p></p>
				<p class="btmspace-30"></p>
				<ul class="faico clear">
					<li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
					<li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="one_third">
				<h6 class="heading">Contact Us</h6>
				<ul class="nospace clear ">
					<li><i class="fas fa-phone-square"></i>  Give us a call : 0112 931 193</li>
					<li><i class="fas fa-at"></i>  Send us a email : secretaryoffice@gmail.com</li>
					<li><i class="fas fa-envelope"></i>  Send us a mail : Divisional Secretary, Waththala</li>
				</ul>
			</div>
			<div class="one_third">
				<h6 class="heading">Join with us</h6>
				<p class="nospace btmspace-15">Submit your email to get latest news immediately.</p>
				<form method="post" action="#">
					<fieldset>
						<legend>Newsletter:</legend>
						<input class="btmspace-15" type="text" value="" placeholder="Name">
						<input class="btmspace-15" type="text" value="" placeholder="Email">
						<button type="submit" value="submit">Submit</button>
					</fieldset>
				</form>
			</div>
		</footer>
	</div>
	<div class="wrapper row5">
		<div id="copyright" class="hoc clear">
			<p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Divisional Secretary</a></p>
			
		</div>
	</div>
	<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

	<!-- JAVASCRIPTS -->
	<script src="../layout/scripts/jquery.min.js"></script>
	<script src="../layout/scripts/jquery.backtotop.js"></script>
	<script src="../layout/scripts/jquery.mobilemenu.js"></script>
	<script src="../layout/scripts/scroll.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="..\js/event_add.js"></script>
    <script src="..\js/downloads_add.js"></script>
    <script src="..\js\popup_msgs.js"></script>
    <script src="..\layout\scripts\activeLinks.js"></script>
	
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
	
	<script>
		var s = skrollr.init();
	</script>
	<!-- <script>
		$(document).ready(function(){

			$('.service1').waypoint(function(direction){
				$('.service1').addClass('animated zoomIn visible')
			}, {
				offset: '50%'
			});

			$('.service1').waypoint(function(direction){
				$('.service1').removeClass('animated zoomIn visible')
			}, {
				offset: '-50%'
			});
		});
	</script> -->

	
</body>

</html>
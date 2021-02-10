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
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link href="layout/styles/Calender.css" rel="stylesheet" type="text/css" media="all">

</head>

<!-- Begin of body -->

<body id="top">

	<!-- Top header -->
	<div class="wrapper row0">
		<header id="header" class="hoc clear text-md-left">
			<!-- Start of header -->
			<div class="row">
				<div id="logo" class="col-md-2 text-center" >
					<a href="index.html"><img src="images/logo.png" class="d-flex w-50"></a>
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
			<!-- <div class="three_quarter">
				<ul class="nospace clear text-center">
					<li class="one_third first">
						<div style="margin-left: 50%;">
							<a href="#">
								<i class="fas fa-phone center"></i>
							</a> 
						</div>
						<div class="block clear">
							<span><strong>Give us acall:</strong> +94 112 1234 56</span>
						</div>
					</li>
					<li class="one_third">
						<div style="margin-left: 50%;">
							<a href="#">
								<i class="fas fa-envelope"></i>
							</a> 
						</div>
						<div class="block clear">
							<span><strong>Send us a mail:</strong> secretaryoffice@gmail.com</span>
						</div>
					</li>
					<li class="one_third">
						<div style="margin-left: 50%;">
							<a href="#">
								<i class="fas fa-clock"></i>
							</a> 
						</div>
						<div class="block clear">
							<span><strong> Mon. - Sat.:</strong> 09.00am - 16.00pm</span>
						</div>
					</li>
				</ul>
			</div> -->
			<!-- End of header -->
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
								<a href="index.php" class="nav-item nav-link active home">Home
									<hr class="hrhome"></a>
								<a href="product-list.html" class="nav-item nav-link product">Calender
									<hr class="hrproducts"></a>
								<a href="product-detail.html" class="nav-item nav-link prode">Forums
									<hr class="hrproductDetail"></a>
								<a href="#" class="nav-item nav-link cart">Downloads
									<hr class="hrcart"></a>
								<a href="contact.html" class="nav-item nav-link chk">Contact
									<hr class="hrchec"></a>
								<a href="aboutUs.php" class="nav-item nav-link acc">About Us
									<hr class="hracc"></a>
								<!-- <div class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
									<div class="dropdown-menu">
										<a href="wishlist.html" class="dropdown-item">Wishlist </a>
										<a href="login.html" class="dropdown-item">Login & Register</a>
										<a href="contact.html" class="dropdown-item">Contact Us</a>
									</div>
								</div> -->
								
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
						<input type="text" placeholder="Enter search term&hellip;">
						<button type="submit"><i class="fas fa-search"></i></button>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>
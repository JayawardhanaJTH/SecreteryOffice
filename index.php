<?php
	require "connection/connection.php";
	session_start();

	if(!$_SESSION["logged"]){
		header("Location: login.php");
	}
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
								<a href="index.html" class="nav-item nav-link active home">Home
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
								<p class="nav-item nav-link text-white font-weight-bold" > Welcome <?php echo $_SESSION['username'] ?> </p>
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
	<!-- Carousel -->
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="3"></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="4"></li>

		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images/carosal1.jpg" alt="First slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100" src="images/carosal2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100" src="images/carosal3.jpg" alt="Second slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100" src="images/carosal4.jpg" alt="Second slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100" src="images/carosal5.png" alt="Second slide">
			</div>
		</div>
	</div>
	<!-- End of carousel -->

	<!-- Services -->
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<div class="sectiontitle">
				<h1 class="text-gray-dark font-x3 font-weight-bold"
					style="border-bottom: 2px solid #911105; font-family: sans-serif;" 
						data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Our Services</h1>
			</div>
			<div class="group center btmspace-80">
				<!-- First line -->
				<div class="row service1" >
					<div class="col-md-6 justify-content-center">
						<article class="first"><a class="ringcon btmspace-50" href="#"><i
									class="fas fa-download"></i></a>
							<h6 class="heading">Download application</h6>
							<p>Here are all applications</p>
						</article>
					</div>
					<div class="col-md-6">
						<article><a class="ringcon btmspace-50" href="#"><i class="fas fa-file-invoice"></i></a>
							<h6 class="heading">Online application</h6>
							<p>Here can submit applications</p>
						</article>
					</div>
				</div>
				<br>
				<!-- Second line -->
				<div class="row service1">
					<div class="col-md-6 justify-content-center">
						<article><a class="ringcon btmspace-50" href="#"><i class="fas fa-user-cog"></i></a>
							<h6 class="heading">Our works</h6>
							<p>Come and see our works</p>
						</article>
					</div>
					<div class="col-md-6">
						<article><a class="ringcon btmspace-50" href="#"><i class="fas fa-hands-helping"></i></a>
							<h6 class="heading">List of welfare</h6>
							<p>Our social interactions</p>
						</article>
					</div>
				</div>
			</div>
			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>
	<!-- Latest news -->
	<div class="wrapper row2 latest">
		<section class="hoc container clear">
			<div>
				<h1 id="latestNews" class="text-gray-dark font-weight-bold font-x3">Latest news</h1>
			</div>
			<!-- News line -->
			<div class="card-deck owl-carousel">
				<div class="card">
					<div class="post-image">
						<a href="#"><img class="card-img-top" src="images/carosal1.jpg"></a>
					</div>

					<div class="card-body p-3">
						<h5 class="card-title">Title</h5>
						<p class="card-text">Body</p>

						<ul style="list-style: none;">
							<li><i class="fa fa-calendar"></i> June 6, 2020</li>
							<li><i class="fa fa-pencil-alt"></i> Admin</li>
						</ul>
					</div>
					<div class="card-footer">
						<a href="#">Read more <i class="fas fa-arrow-circle-right"></i></a> 
					</div>
				</div>

				<div class="card">
					<div class="post-image">
						<a href="#"><img class="card-img-top" src="images/carosal2.jpg"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<p class="card-text">Body</p>

						<ul style="list-style: none;">
							<li><i class="fa fa-calendar"></i> June 6, 2020</li>
							<li><i class="fa fa-pencil-alt"></i> Admin</li>
						</ul>
					</div>
					<div class="card-footer">
						<a href="#">Read more <i class="fas fa-arrow-circle-right"></i></a> 
					</div>
				</div>

				<div class="card">
					<div class="post-image">
						<a href="#"><img class="card-img-top" src="images/carosal3.jpg"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<p class="card-text">Body</p>

						<ul style="list-style: none;">
							<li><i class="fa fa-calendar"></i> June 6, 2020</li>
							<li><i class="fa fa-pencil-alt"></i> Admin</li>
						</ul>
					</div>
					<div class="card-footer">
						<a href="#">Read more <i class="fas fa-arrow-circle-right"></i></a> 
					</div>
				</div>

				<!-- <div class="card">
					<div class="post-image">
						<a href="#"><img class="card-img-top" src="images/carosal4.jpg"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<p class="card-text">Body</p>

						<ul style="list-style: none;">
							<li><i class="fa fa-calendar"></i> June 6, 2020</li>
							<li><i class="fa fa-pencil-alt"></i> Admin</li>
						</ul>
					</div>
					<div class="card-footer">
						<a href="#">Read more <i class="fas fa-arrow-circle-right"></i></a> 
					</div>
				</div> -->
			</div>
			<br>
			<br>
			<div class="row">
				<button class="btn btn-success ml-5 font-weight-bold load-more" >Load more <i class="fas fa-angle-right load-more-icon"></i></button>
			</div>
		</section>
	</div>
	<!-- End of latest news -->

	<!-- Calender and upcoming events -->
	<div class="row p-2">
		<div class="calender-cover col-md-6">
			<div id="calender">
				<div class="month">
					<i class="fas fa-arrow-left pre"></i>
					<div class="days">
						<h1></h1>
						<p ></p>
					</div>
					<i class="fas fa-arrow-right next"></i>
				</div>
				<div class="weekdays">
					<div>Sun</div>
					<div>Mon</div>
					<div>Tue</div>
					<div>Wed</div>
					<div>Thu</div>
					<div>Fri</div>
					<div>Sat</div>
				</div>
				<div class="day">
					
				</div>
			</div>
		</div>
		<div class="event col-md-6">
			<div class="row row-striped">
				<div class="col-2 text-center">
					<h1 class="display-4"> <span class="badge badge-success">30</span></h1>
					<h2>Nov</h2>
				</div>
				<div class="col-10">
					<h1><a href="#"> Event </a></h1>
					<ul class="list-inline">
						<li class="list-inline-item"><i class="fas fa-calendar"></i>  Monday</li>
						<li class="list-inline-item"><i class="fas fa-clock"></i>  08:30 - 13:30</li>
						<li class="list-inline-item"><i class="fas fa-location-arrow"></i>  Colombo</li>
					</ul>
					<p><a href="#"> Event details</a></p>
				</div>
			</div>
			<div class="row row-striped">
				<div class="col-2 text-center">
					<h1 class="display-4"> <span class="badge badge-success">04</span></h1>
					<h2>Dec</h2>
				</div>
				<div class="col-10">
					<h1>Event</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><i class="fas fa-calendar"></i>  Friday</li>
						<li class="list-inline-item"><i class="fas fa-clock"></i>  10:00 - 15:30</li>
						<li class="list-inline-item"><i class="fas fa-location-arrow"></i>  Kalutara</li>
					</ul>
					<p><a href="#"> Event details</a></p>
				</div>
			</div>
			<div class="row row-striped">
				<div class="col-2 text-center">
					<h1 class="display-4"> <span class="badge badge-success">24</span></h1>
					<h2>Dec</h2>
				</div>
				<div class="col-10">
					<h1>Event</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><i class="fas fa-calendar"></i>  Thursday</li>
						<li class="list-inline-item"><i class="fas fa-clock"></i>  08:30 - 16:00</li>
						<li class="list-inline-item"><i class="fas fa-location-arrow"></i>  Colombo</li>
					</ul>
					<p><a href="#"> Event details</a></p>
				</div>
			</div>
		</div>
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
				<ul class="nospace clear">
					<li><i class="fas fa-phone-square"></i>  Give us a call : +94 112 1234 56</li>
					<li><i class="fas fa-at"></i>  Send us a email : secretaryoffice@gmail.com</li>
					<li><i class="fas fa-envelope"></i>  Send us a mail : 11/2 Colombo</li>
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
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<script src="layout/scripts/scroll.js"></script>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	
	<script src="layout/scripts/calender.js"></script>
	<script>
		$(document).ready(function() {
			$("#news-slider").owlCarousel({
				items:3,
				itemsDesktop:[1199,2],
				itemsDesktopSmall:[980,2],
				itemsMobile:[600,1],
				pagination:false,
				navigationText:false,
				autoPlay:true
			});
		});
	</script>
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
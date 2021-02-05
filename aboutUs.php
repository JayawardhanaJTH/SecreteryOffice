<?php
require "connection/connection.php";
$emailErr = '';
$passwordErr = '';
session_start();
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
          sizes="32x32"/>

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
    <link href="layout/styles/aboutus.css" REL="stylesheet">

</head>

<!-- Begin of body -->

<body id="top">

<!-- Top header -->
<div class="wrapper row0">
    <header id="header" class="hoc clear text-md-left">
        <!-- Start of header -->
        <div class="row">
            <div id="logo" class="col-md-2 text-center">
                <a href="index.html"><img src="images/logo.png" class="d-flex w-50"></a>
            </div>
            <div class="col-md-7 text-center">
                <h1 class="p-2 font-x3"
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    Divisional Secretary Office <br> Waththala</h1>
            </div>
            <div class="col-md-3 text-center ">
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
                                <hr class="hrhome">
                            </a>
                            <a href="product-list.html" class="nav-item nav-link product">Calender
                                <hr class="hrproducts">
                            </a>
                            <a href="product-detail.html" class="nav-item nav-link prode">Forums
                                <hr class="hrproductDetail">
                            </a>
                            <a href="cart.html" class="nav-item nav-link cart">Downloads
                                <hr class="hrcart">
                            </a>
                            <a href="checkout.html" class="nav-item nav-link chk">Contact
                                <hr class="hrchec">
                            </a>
                            <a href="my-account.html" class="nav-item nav-link acc">About Us
                                <hr class="hracc">
                            </a>
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
                            <p class="nav-item nav-link text-white font-weight-bold">
                                Welcome <?php echo $_SESSION['username'] ?> </p>
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

<!--banner section-->
<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="text">Vertically Centered Masthead Content</h1>
                <p class="lead">Home -> About Us</p>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="learn_content">
        <h3>What you'll learn</h3>
        <div class="row pt-3">
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-1">
                        <span><i class='fas fa-check' style="color: #95103b;"></i></span>
                    </div>
                    <div class="col-11">
                        <p class="text-left">
                            Transform your own life while at the same time learn practical steps
                            and knowledge to become a powerful and successful Spiritual Life
                            coach.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <span><i class='fas fa-check' style="color: #95103b;"></i></span>
                    </div>
                    <div class="col-11">
                        <p class="text-left">
                            Discover and identify your personal gifts to lead on purpose and
                            with clarity. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <span><i class='fas fa-check' style="color: #95103b;"></i></span>
                    </div>
                    <div class="col-11">
                        <p class="text-left">
                            Set a price point that creates and sustains a lucrative,
                            freedom-based career.</div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-1">
                        <span><i class='fas fa-check' style="color: #95103b;"></i></span>
                    </div>
                    <div class="col-11">
                        <p class="text-left">
                            aspects of the self to bring yourself into balance, in order to be a
                            congruent coach, and use this process to lead clients into lasting
                            transformations.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <span><i class='fas fa-check' style="color: #95103b;"></i></span>
                    </div>
                    <div class="col-11">
                        <p class="text-left">
                            Connect with clients beyond the logic, by tapping into intuitive
                            awareness. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<SECTION class="vision-sec">
    <div class="info-area pb-5">
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="images/carosal2.jpg" alt="">
                </div>
                <div class="col-lg-6 info-area-right p-5">
                    <h1 class="display-3">Our Vision</h1>
                    <p>To be the premier service provider of the Gampaha district</p>
                    <br>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                        the
                        job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,”
                        women
                        face higher conduct standards especially in the workplace. That’s why it’s crucial that, as
                        women,
                        our behavior on the job is beyond reproach.
                    </p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-6 info-area-right p-5">
                    <h1 class="display-3">Our Mission</h1>
                    <p>Fulfill the needs of the people of Wattala division to satisfy in an efficient and productive
                        manner, conforming with the policies of the government and principles of Good Government</p>
                    <br>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                        the
                        job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,”
                        women
                        face higher conduct standards especially in the workplace. That’s why it’s crucial that, as
                        women,
                        our behavior on the job is beyond reproach.
                    </p>
                </div>
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="images/carosal3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--card section-->
<section>
    <div class="container">
        <div class="text-center" id="card_head">
            <h1 class="text mb-5">Wattala Divisional Secretaries who worked since 1991</h1>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. P.L. Gunasinghe</h3>
                            <p class="content-text">Since 1991-1993</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. Gunasiri Dharmapala</h3>
                            <p class="content-text">Since 1993-1998</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246499/3_zoom_2.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. hatharasinghe </h3>
                            <p class="content-text">1998-2000</p>
                        </div>
                    </a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs. H.D.S. Malkanthi</h3>
                            <p class="content-text">Since 2000-2005</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs. N. Nimalka Dias</h3>
                            <p class="content-text">Since 2005-2009</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246499/3_zoom_2.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs. C.L.W. Dissanayake </h3>
                            <p class="content-text">2009-2014</p>
                        </div>
                    </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. W.G.Premalal</h3>
                            <p class="content-text">Since 2014-2017</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image"
                             src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs.P.V.D.C. Rajika</h3>
                            <p class="content-text">Since 2017-Up to Now</p>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</section>

<!--reach section-->
<section class="project p-5" style="background-color: #f4f4f4">
    <div class="container text-center p-3 mb-">
        <div class="text-center">
            <h1 class="mb-3" style="font-weight: bold">Our reach</h1>
            <div class="row mb-5">
                <div class="col-2">
                </div>
                <div class="col-8">
                    <p>Udemy is the leading global marketplace for teaching and learning, connecting millions of
                        students to the skills they need to succeed.</p>
                </div>
                <div class="col-">
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-users mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">1500</span><span
                            style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Members</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-book-open mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">10</span><span
                            style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Office</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-user-friends mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">100</span><span
                            style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Grama Niladhari</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-award mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">60</span><span
                            style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Awards</p>
                </div>
            </div>
        </div>

    </div>
</section>


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
                <li><i class="fas fa-phone-square"></i> Give us a call : +94 112 1234 56</li>
                <li><i class="fas fa-at"></i> Send us a email : secretaryoffice@gmail.com</li>
                <li><i class="fas fa-envelope"></i> Send us a mail : 11/2 Colombo</li>
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
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
<script src="layout/scripts/jquery.counterup.js"></script>
<script src="layout/scripts/calender.js"></script>
<script>
    $(document).ready(function () {
        $("#news-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            pagination: false,
            navigationText: false,
            autoPlay: true
        });
    });
</script>
<script>
    var s = skrollr.init();
</script>

<script>
    jQuery(document).ready(function ($) {
        $('.count').counterUp({
            delay: 10,
            time: 5000
        });
    });
</script>

</body>

</html>
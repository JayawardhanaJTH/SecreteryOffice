<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'divisional_secretary');

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if ($conn->connect_error) {
        die ("Connection failed " . $conn->connect_error);
    }
} catch (Throwable $th) {
    echo("Error on database server!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Site title -->
    <title>People Details</title>
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

    <!-- CSS -->
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">

</head>

<body id="top">

<!-- Top header -->
<div class="wrapper row0">
    <header id="header" class="hoc clear text-md-left">
        <!-- Start of header -->
        <div class="row">
            <div id="logo" class="col-md-2 text-center">
                <a href="index.php"><img src="images/logo.png" class="d-flex w-50"></a>
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
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Main menu -->
                    <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                        <div class="navbar-nav nav-tabs mr-auto">
                            <a href="index.php" class="nav-item nav-link active home">Home
                                <hr class="hrhome">
                            </a>
                            <a href="checkout.html" class="nav-item nav-link chk">Contact
                                <hr class="hrchec">
                            </a>
                            <a href="aboutUs.php" class="nav-item nav-link acc">About Us
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
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="login.html" class="dropdown-item">Login</a>
                                    <a href="register.html" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

    </section>
</div>

<div class="d-flex">
    <div class="p_box row m-1 justify-content-center align-items-center">

        <div class="col-12 card-deck  text-center">

            <div class="card m-2 overflow-hidden">
                <img src="images/people.png" alt="Background image" class="card-img">
                <div class="card-img-overlay">
                    <div class="card-body ">
                        <h4>Add People</h4>
                        <div class="p-2">
                            <p>
                                Here 'Grama sewaka' will add people to the system who are in his/ her division.

                            </p>
                            <div>
                                <?php
                                $sql = "select count(*) as total from people";
                                $rs = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_array($rs)) {
                                    $total = $row["total"];
                                    echo "<h5>Total registered : $total</h5>";
                                }
                                ?>

                            </div>
                        </div>
                        <a href="people-add.php">
                            <div class="p_button">
                                Add <i class="fa fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card m-2 overflow-hidden">
                <img src="images/people.png" alt="Background image" class="card-img">
                <div class="card-img-overlay">
                    <div class="card-body ">
                        <h4>Edit detail</h4>
                        <div>
                            <p>
                                Here 'Grama sewaka' will correct details about the people who are in his/ her division
                                or
                                they can delete people data if they are not longer live in the own division.
                            </p>
                        </div>
                        <a href="people-list.php">
                            <div class="p_button">
                                Edit <i class="fa fa-edit"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="card m-2 overflow-hidden">
                <img src="images/people.png" alt="Background image" class="card-img">
                <div class="card-img-overlay">
                    <div class="card-body ">
                        <h4>View detail</h4>
                        <div>
                            <p>
                                Here can see people details in category wise. User can search and find about the people.
                            </p>
                        </div>
                        <a href="people-list.php">
                            <div class="p_button">
                                View <i class="fa fa-list"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card m-2 overflow-hidden">
                <img src="images/people.png" alt="Background image" class="card-img">
                <div class="card-img-overlay">
                    <div class="card-body ">
                        <h4>Notice</h4>
                        <div>
                            <p>
                                Here appear notices about added, updated and deleted data about the people.
                            </p>
                        </div>
                        <a href="#">
                            <div class="p_button">
                                View <i class="fa fa-list-alt"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!--    <div class="p_box2">-->
<!--        <div>-->
<!--            hello-->
<!--        </div>-->
<!--        <div>-->
<!--            hello-->
<!--        </div>-->
<!--        <div>-->
<!--            hello-->
<!--        </div>-->
<!--        <div>-->
<!--            hello-->
<!--        </div>-->
<!---->
<!--    </div>-->
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
<script src="layout/scripts/alertBox.js"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>

</body>
</html>
<?php
session_start();

$page = "about";
setcookie("pageName", $page, time() + (86400 * 30), "/");
require "connection/connection.php";
include "support/header.php";
?>

<link href="layout/styles/aboutus.css" rel="stylesheet">


<!--banner section-->
<!-- <section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="text">Vertically Centered Masthead Content</h1>
                <p class="lead">Home -> About Us</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="container">
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
                            freedom-based career.
                    </div>
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
</section> -->

<SECTION class="vision-sec">
    <div class="info-area pb-5">
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="images/about1.jpg" alt="about">
                </div>
                <div class="col-lg-6 info-area-right p-5">
                    <h1 class="display-3">Premnath C. Dolawatta | Attorney at Law</h1>
                    <!-- <p>To be the premier service provider of the Gampaha district</p> -->
                    <br>
                    <p>
                        Premnath Dolawatte is straight-forward in his approach and is determined to do his duty by his country. He is a risk taker, who does not hesitate to represent those who he feels need his assistance. Premnath Dolawatte came into the limelight in the recent years due to his legal representation and vocal support to those who lost power in the previous Government. He was not benefited from them during their time in power and his association with the Rajapaksa family began only after 2015. He works according to his conscience and in his own words, is controversial. He strongly believes that respect cannot be bought but in fact, has to be earned.
                    </p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row align-items-center">
                <div class="col-lg-6 info-area-right p-5">
                    <h1 class="display-3">Duty Before Self</h1>
                    <!-- <p>Fulfill the needs of the people of Wattala division to satisfy in an efficient and productive
                        manner, conforming with the policies of the government and principles of Good Government</p> -->
                    <br>
                    <p>
                        "I am hardworking and will give my fullest to any task that I undertake. At the same time, I believe in the good of people and team work. I never hesitate to take advice from others. It is fulfilling to help people. While I am very flexible and simple in my approach, I always stand for what I believe in."

                        "I strongly believe that respect cannot be bought, it has to be earned. Therefore, I am content, moved and motivated with the public response I get for all my efforts. "

                        "I am willing to do whatever is required to serve society. I believe that I am doing my duty to my country and I am happy with my achievements. I do not like to think about the opportunities that I may have missed, because financial gain cannot be replaced with the respect or the perception that the people of this country have about me. "
                    </p>
                </div>
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="images/about2.jpg" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!--card section-->
<!-- <section>
    <div class="container">
        <div class="text-center" id="card_head">
            <h1 class="text mb-5">Wattala Divisional Secretaries who worked since 1991</h1>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. P.L. Gunasinghe</h3>
                            <p class="content-text">Since 1991-1993</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. Gunasiri Dharmapala</h3>
                            <p class="content-text">Since 1993-1998</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246499/3_zoom_2.jpg">
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
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs. H.D.S. Malkanthi</h3>
                            <p class="content-text">Since 2000-2005</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs. N. Nimalka Dias</h3>
                            <p class="content-text">Since 2005-2009</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246499/3_zoom_2.jpg">
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
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246503/3_zoom_1.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mr. W.G.Premalal</h3>
                            <p class="content-text">Since 2014-2017</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12 mb-5">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557246502/test_zoom.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Mrs.P.V.D.C. Rajika</h3>
                            <p class="content-text">Since 2017-Up to Now</p>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</section> -->

<span>
    <h5 class="pl-5"> <u> Premnath C Dolawatte | Attorney at Law</u></h5>
</span>

<!--reach section-->
<section class="project p-5" style="background-color: #f4f4f4">
    <div class="container text-center p-3 mb-">
        <div class="text-center">
            <h1 class="mb-3" style="font-weight: bold">Our reach</h1>
            <div class="row mb-5">
                <div class="col-2">
                </div>
                <div class="col-8">
                    <p></p>
                </div>
                <div class="col-">
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-users mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">1500</span><span style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Members</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fas fa-building mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">10</span><span style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Office</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-user-friends mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">100</span><span style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Grama Niladhari</p>
                </div>
            </div>
            <div class="col-sm-3 col-12">
                <div>
                    <i class="fas fa-award mb-4" style="color: #95103b; font-size: 3rem"></i><br>
                    <span class="count" style="font-size: 1.5rem; font-weight: bold">60</span><span style="font-size: 1.5rem; font-weight: bold">k</span>
                    <p class="mt-2" style="font-size: 1.5rem;">Awards</p>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
include "support/footer.php";
?>
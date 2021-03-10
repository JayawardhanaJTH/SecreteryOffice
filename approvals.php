<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}else if($_SESSION['TYPE'] != '1' && $_SESSION['TYPE'] != '2'){
        header("location: support/error.php");
    }
    require "connection/connection.php";
    include "support/header.php";
?>

<link href="layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
<div class="d-flex">
    <div class="p_box row m-1 justify-content-center align-items-center">

        <h1>Business Application Requests</h1>
        <div class="col-12 card-deck ">
            <div class="card m-2 overflow-hidden">
                    <div class="card-body ">
                        <div class="p-2">
                            <p>
                               Request By : name
                               <br>
                               Submitted Date : date
							   <br>
							   Status : Grama Niladhari - Approved
						   <br>
                            Status : Secretary - Approved 
                            </p>
                        </div>
                        <a href="#">
                            <div class="p_button text-center">
                                Show <i class="fa fa-search"></i>
                            </div>
                        </a>
                    </div>
            </div>
            <div class="card m-2 overflow-hidden">
                <div class="card-body ">
                    <div class="p-2">
                        <p>
                           Request By : name
                           <br>
                           Submitted Date : date
						   <br>
						   Status : Grama Niladhari - Approved
						   <br>
                            Status : Secretary - Approved
                        </p>
                    </div>
                    <a href="#">
                        <div class="p_button text-center">
                            Show <i class="fa fa-search"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
        </div>
        <h1>Requirement Application Requests</h1>
        <div class="col-12 card-deck ">
            <div class="card m-2 overflow-hidden">
                    <div class="card-body ">
                        <div class="p-2">
                            <p>
                               Request By : name
                               <br>
                               Submitted Date : date
							   <br>
							   Status : Grama Niladhari - Approved
						   <br>
                            Status : Secretary - Approved
                            </p>
                        </div>
                        <a href="#">
                            <div class="p_button text-center">
                                Show <i class="fa fa-search"></i>
                            </div>
                        </a>
                    </div>
            </div>
            <div class="card m-2 overflow-hidden">
                <div class="card-body ">
                    <div class="p-2">
                        <p>
                           Request By : name
                           <br>
                           Submitted Date : date
						   <br>
						   Status : Grama Niladhari - Approved
						   <br>
                            Status : Secretary - Approved
                        </p>
                    </div>
                    <a href="#">
                        <div class="p_button text-center">
                            Show <i class="fa fa-search"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
        </div>
        <h1>Grama Niladhari Registration Requests</h1>

        <div class="col-12 card-deck">
            <div class="card m-2 overflow-hidden">
                <div class="card-body ">
                    <div class="p-2">
                        <p>
                           Request By : name
                           <br>
                           Submitted Date : date
						   <br>
						   
                            Status : Secretary - Approved
                        </p>
                    </div>
                    <a href="#">
                        <div class="p_button text-center">
                            Show <i class="fa fa-search"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card m-2 overflow-hidden">
                <div class="card-body ">
                    <div class="p-2">
                        <p>
                           Request By : name
                           <br>
                           Submitted Date : date
						   <br>
						   
                            Status : Secretary - Approved
                        </p>
                    </div>
                    <a href="#">
                        <div class="p_button text-center">
                            Show <i class="fa fa-search"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
        </div>
    </div>
</div>
<?php
    include "support/footer.php";
?>


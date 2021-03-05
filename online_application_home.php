<?php
    session_start();
    require "connection/connection.php";
    include "support/header.php";
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
?>
	<link href="layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">

<body>
    <div class="container">
        <div class="dash">
            <div class="topic">
                <h1>Online Applications</h1>
            </div>
            <div class="panel">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="online_application.php">
                            <div class="card">
                                <div class="text-center">
                                    <h1>Business Registration</h1>
                                </div>
                                <div class="card-body text-center">
                                    <div class="details">
                                        <p>Application for Business Registration</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="online_application2.php">
    
                            <div class="card">
                                <div class="text-center">
                                    <h1>Requirement Application</h1>
                                </div>
                                <div class="card-body text-center">
                                    <div class="details">
                                        <p> Application for request requirement application</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>   
                </div>       
            </div>
    </div>
<?php
    include "support/footer.php";
?>
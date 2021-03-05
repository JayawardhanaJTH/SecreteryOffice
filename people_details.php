<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    require "connection/connection.php";
    include "support/header.php";
?>
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
                                    <h5>Total registered : 520</h5>
                                </div>
                            </div>
                            <a href="people-add.php">
                                <div class="p_button">
                                    Add  <i class="fa fa-plus"></i>
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
                                    Here 'Grama sewaka' will correct details about the people who are in his/ her division or 
                                    they can delete people data if they are not longer live in the own division.
                                </p>
                            </div>
                            <a href="#">
                                <div class="p_button">
                                    Edit  <i class="fa fa-edit"></i>
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
                                    View  <i class="fa fa-list"></i>
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
                                    View  <i class="fa fa-list-alt"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
        <div class="p_box2">
            <div>
                hello
            </div>
            <div>
                hello
            </div>
            <div>
                hello
            </div>
            <div>
                hello
            </div>
            
        </div>
        </div>
 
	<script src="layout/scripts/alertBox.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
    include "support/footer.php";
?>
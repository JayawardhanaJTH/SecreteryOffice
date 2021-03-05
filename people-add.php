<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    require "connection/connection.php";
    include "support/header.php";
?>

<div class="container-fluid p-3">
    <div class="row justify-content-center">
        <div class="login-main p-2 col-10 col-md-6" style="border: 2px solid maroon; border-radius: 0px 30px 0px 30px;">
            <div class="text-center">
                <h1 class="font-x2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Register</h1>
            </div>
            <div class="login-form p-2">

                <form  style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <div class="form-group">
                        <label for="username">First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="last_name" name="lastname" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="full_name">Full name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="full_name" name="full_name" placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                            </div>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                            <input type="tel" id="contact_number" name="contact_number" class="form-control" placeholder="079 1234 56">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nic_num">NIC number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                            <input type="tel" id="nic_num" name="nic_num" class="form-control" placeholder="123456678V">
                        </div>
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-success" id="add_people" value="Add People">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="layout/scripts/alertBox.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
    include "support/footer.php";
?>
<script src="js/people-add.js"></script>
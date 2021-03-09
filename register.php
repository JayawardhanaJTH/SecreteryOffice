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

                    <form action="php/register_add.php" onsubmit="return validateRegistration()" method="POST" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <div class="form-group">
                            <label for="username">First Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Last Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="username" name="username" placeholder="User name">
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
                            <label for="phone">Contact Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                </div>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="079 1234 56">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">NIC number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                                </div>
                                <input type="tel" id="nic" name="nic" class="form-control" placeholder="123456678V">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input class="form-control" type="password" id="password" name="password" aria-describedby="info" placeholder="Password">
                            </div>
                            <small id="info" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                        </div>
                        <div class="form-group">
                            <label for="repassword">Confirm Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input class="form-control" type="password" id="repassword" name="repassword" placeholder="Confirm Password">
                                
                            </div>
                        </div>
                        
                        <div >
                            <label for="radio1"><u> Profession </u></label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio" name="customRadio" value="Secretary" class="form-check-input" >
                                <label class="form-check-label" for="radio1" style="cursor: pointer;">Secretary</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio" name="customRadio" value="Grama Niladhari" class="form-check-input">
                                <label class="form-check-label" for="radio2" style="cursor: pointer;">Grama Niladhari</label>
                            </div>
                        </div>
                        <br>
                        <div>
                            <input type="submit" class="btn btn-success" value="Login" name="register" id="register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "support/footer.php";
?>
<script src="js\register.js"></script>

<?php

    if(isset($_SESSION["REGISTERED"])){
        if($_SESSION["REGISTERED"]){
            unset($_SESSION["REGISTERED"]);
        
?>
    <script type="text/javascript">
        success_popup('User Registered');
    </script>
<?php
        }else{
            unset($_SESSION["REGISTERED"]);
?>
    <script type="text/javascript">
        error_popup('User Registration Error');
    </script>
<?php
        }
    }
?>
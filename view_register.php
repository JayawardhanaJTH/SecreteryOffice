<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}else if($_SESSION['TYPE'] != '1'){
        header("location: support/error.php");
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

                    <form action=""  method="POST" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <div class="form-group">
                            <label for="username">First Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First name" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Last Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last name" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control" type="text" id="username" name="username" placeholder="User name" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-at"></i></div>
                                </div>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Contact Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                </div>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="079 1234 56" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">NIC number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                                </div>
                                <input type="tel" id="nic" name="nic" class="form-control" placeholder="123456678V" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="grama_niladhari_division">Grama Niladhari Division</label>
                            <div class="input-group"> 
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="tel" id="nic" name="nic" class="form-control" placeholder="123456678V" disabled>
                            </div>
                        </div>
                        
                        <br>
                        <?php
                                if($_SESSION['TYPE'] == '1'){
                        ?>
                        <div class="m-3 text-center">
                            <a  href="php/submit_application.php?type=2&status=true&id=1"><input type="submit" value="Approve" name ="approve" id= "approve" class="btn btn-success" style="background:green;"></a>
                            <a  href="php/submit_application.php?type=2&status=false&id=1"><input type="submit" href="" value="Reject" name ="reject" id= "reject" class="btn btn-danger"></a>
                        </div>
                        <?php
                                }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "support/footer.php";
?>

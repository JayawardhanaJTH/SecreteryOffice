<?php
session_start();
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

                <form action="php/register_add.php" onsubmit="return validateRegistration()" method="POST" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="username">First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First name" required>
                            <div class="invalid-feedback">
                                Please enter first name.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last name" required>
                            <div class="invalid-feedback">
                                Please enter last name.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                            <div class="invalid-feedback">
                                Please enter a username.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                            </div>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Please enter email.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="079 1234 56" required>
                            <div class="invalid-feedback">
                                Please enter contact number.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">NIC number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                            </div>
                            <input type="tel" id="nic" name="nic" class="form-control" placeholder="123456789V" required>
                            <div class="invalid-feedback">
                                Please enter NIC number.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="elecSeat">Electoral seat</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <div class="input-group">
                                <select name="elecSeat" id="elecSeat" class="form-control">
                                    <option value="">Select Electoral seat</option>
                                    <option value="AW">Avissawella</option>
                                    <option value="BO">Borella</option>
                                    <option value="CC">Colombo Central</option>
                                    <option value="CE">Colombo East</option>
                                    <option value="CN">Colombo North</option>
                                    <option value="CW">Colombo West</option>
                                    <option value="DE">Dehiwala</option>
                                    <option value="HO">Homagama</option>
                                    <option value="KA">Kaduwela</option>
                                    <option value="KE">Kesbewa</option>
                                    <option value="KL">Kolonnawa</option>
                                    <option value="KO">Kotte</option>
                                    <option value="MA">Maharagama</option>
                                    <option value="MO">Moratuwa</option>
                                    <option value="RA">Rathmalana</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a electoral seat.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input class="form-control" type="password" id="password" name="password" aria-describedby="info" placeholder="Password" required>
                            <div class="invalid-feedback">
                                Please enter a password.
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="checkbox" class="form-check" id="showPass" onClick="showPassword()">
                            <label for="showPass"> Show Password</label>
                        </div>
                        <small id="info" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input class="form-control" type="password" id="repassword" name="repassword" placeholder="Confirm Password" required>
                            <div class="invalid-feedback">
                                Please re-enter the password.
                            </div>
                        </div>
                    </div>

                    <br>
                    <div>
                        <input type="submit" class="btn btn-success" value="Register" name="register" id="register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "support/footer.php";
?>
<script src="js/register.js"></script>

<?php

if (isset($_SESSION["REGISTERED"])) {
    if ($_SESSION["REGISTERED"]) {
        unset($_SESSION["REGISTERED"]);

?>
        <script type="text/javascript">
            success_popup('User Registered');
        </script>
    <?php
    } else {
        unset($_SESSION["REGISTERED"]);
    ?>
        <script type="text/javascript">
            error_popup('User Registration Error');
        </script>
<?php
    }
}
?>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
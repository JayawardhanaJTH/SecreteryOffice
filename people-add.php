<?php
$page = "people-add";
include "support/header.php";
?>

<div class="container-fluid p-3">
    <div class="row justify-content-center">
        <div class="login-main p-2 col-10 col-md-6" style="border: 2px solid maroon; border-radius: 0px 30px 0px 30px;">
            <div class="text-center">
                <h1 class="font-x2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Register</h1>
            </div>
            <div class="people-form p-2">

                <form style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <div class="form-group">
                        <label for="username">First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First name" required>
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
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                            </div>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="grama_niladhari_division">Grama Niladhari Division</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <div class="input-group">
                                <select id="grama_niladhari_division" class="form-control">
                                    <option value="">Select Grama Niladhari Division</option>
                                    <option value="164 Pamunugama">164 Pamunugama</option>
                                    <option value="164/A Maha Pamunugama">164/A Maha Pamunugama</option>
                                    <option value="165/A Bopitiya">165/A Bopitiya</option>
                                    <option value="165 Bopitiya">165 Bopitiya</option>
                                    <option value="166 Nugape">166 Nugape</option>
                                    <option value="167 Uswetakriyyawa">167 Uswetakriyyawa</option>
                                    <option value="168 Palliyawatta">168 Palliyawatta</option>
                                    <option value="169 Hekiththa">169 Hekiththa</option>
                                    <option value="169/A kurunduheena">169/A kurunduheena</option>
                                    <option value="176 Wattala">176 Wattala</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <div class="input-group">
                                <select id="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
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
                        <label for="nic">NIC number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                            </div>
                            <input type="text" id="nic" name="nic" class="form-control" placeholder="123456789V">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="tel" id="address" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" disabled>
                            <div class="col-3">
                                <input type="button" class="btn form-control" value="Generate" onClick="randomPassword(10);" tabindex="2">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <input type="button" class="btn" id="add_people" value="Add People">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "support/footer.php";
?>
<script src="layout/scripts/alertBox.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js\people-add.js"></script>
<script src="js\people-update.js"></script>
<script src="js\people-delete.js"></script>
<script src="js\password-generator.js"></script>
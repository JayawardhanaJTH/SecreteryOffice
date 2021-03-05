<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    include 'support/header.php';
    require_once("connection/connection.php");
?>
    <div class="container p-1">
        <div class="border p-2">
            <h1>Requirement Application</h1>
            <form action="php/online_application_add.php" method="POST" onsubmit="return validateForm2()">
                <ol>
                    <li>
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <label for="fullName">(සම්පූර්ණ නම)</label>
                            <input type="text" name="fullName" id="fullName" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <label for="address">(ලිපිනය)</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                    </li>
                    <div class="row no-gutters">
                        <li class="col-md-6">
                            <div class="form-group">
                                <label for="division">Grama Niladari Area</label>
                                <label for="division">(ග්‍රාම නිලධාරී වසම)</label>
                                <select name="division" id="division" class="form-control">
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
                        </li>
                        <li class="col-md-4 ml-md-5">
                            <div class="form-group">
                                <label for="contact">Telephone number</label>
                                <label for="contact">(දුරකතන අංකය)</label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                        </li>
                    </div>
                    <li>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <label for="email">(විදයුත් ලිපිනය)</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="requirement">Requirement<label>
                            <label for="requirement">(අවශ්‍යතාවය)</label>
                            <input type="text" name="requirement" id="requirement" class="form-control">
                        </div>
                    </li>
                    <div class="row no-gutters">
                        <li class="col-md-6">
                            <div class="form-group">
                                <label for="nic">ID No</label>
                                <label for="nic">(ජාතික හැදුහැදුනුම්පත් අංකය)</label>
                                <input type="text" name="nic" id="nic" class="form-control">
                            </div>
                        </li>
                        <li class="col-md-4 ml-md-5">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <label for="gender">(ස්ත්‍රී/ පුරුෂ භාවය)</label>
                                <div class="form-check ml-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                                    <label class="form-check-label" for="exampleRadios1">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check ml-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                    <label class="form-check-label" for="exampleRadios2">
                                    Female
                                    </label>
                                </div>
                            </div>
                        </li>
                    </div>
                </ol>

                <div class="text-center mb-5" >
                    <p class="text-dark">I hereby confirm that I have inspected the above requirement of citizen who lives in Wattala division.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ml-md-5">
                        <p>-------------------<br>
                        Divisional secretary<br>
                        ප්‍රාදේශීය ලේකම්</p>
                    </div>
                    <div class="col-5 ml-md-5">
                        <p>-------------------<br>
                        Grama Niladhari <br>
                         ග්‍රාම නිලධාරී</p>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Save" name="form2_save"  class="btn">
                </div>
            </form>
        </div>
    </div>
    <?php
		include 'support/footer.php';
    ?>
    <script src="js/online_application_add.js"></script>
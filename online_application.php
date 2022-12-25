<?php
session_start();
if (!isset($_SESSION['logged'])) {
    header("location: login.php");
}
require_once("connection/connection.php");
include 'support/header.php';
?>
<div class="container p-1">
    <div class="border p-2">
        <div class="text-center">
            <h4 class="h4">පාර්ලිමේන්තු මන්ත්‍රී</h4>
            <h2 class="h2">නීතීඥ ප්‍රේමනාත් සී. දොලවත්ත මැතිතුමාගේ කාර්යාලය</h2>
        </div>
        <form action="php/online_application_add.php" method="POST" onsubmit="return validateForm()" class="needs-validation" novalidate>
            <ol>
                <li>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <label for="name">(නම)</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <label for="address">(ලිපිනය)</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label for="contact">Phone number</label>
                        <label for="contact">(දුරකතන අංකය)</label>
                        <input type="text" name="contact" id="contact" class="form-control">
                    </div>
                </li>
                <div class="row">
                    <li class="col-md-6 ">
                        <div class="form-group">
                            <label for="birthday">Date of birth</label>
                            <label for="birthday">(උපන්දිනය)</label>
                            <input type="date" name="birthday" id="birthday" class="form-control">
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="form-group">
                            <label for="nic">N.I.C Number</label>
                            <label for="nic">(ජා.හැ.අ.)</label>
                            <input type="text" name="nic" id="nic" class="form-control">
                        </div>
                    </li>
                </div>

                <div class="row">
                    <li class="col-md-6">
                        <label for="status">Marital status</label>
                        <label for="status">(විවාහක අවිවාහක බව)</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="1">
                            <label class="form-check-label" for="status1">
                                Married (විවාහක)
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="2">
                            <label class="form-check-label" for="status2">
                                Unmarried (අවිවාහක)
                            </label>
                        </div>

                    </li>
                    <li class="col-md-6">
                        <label for="bCitizenship">Children</label>
                        <label for="bCitizenship">(දරුවන්)</label>
                        <div class="form-inline justify-content-around mb-1">
                            <label for="childBelow">Below 18 (18ට අඩු)</label>
                            <input type="number" name="childBelow" id="childBelow" class="form-control ml-sm-2">
                        </div>
                        <div class="form-inline justify-content-around">
                            <label for="childAbove">Above 18 (18ට වැඩි)</label>
                            <input type="number" name="childAbove" id="childAbove" class="form-control ml-sm-2">
                        </div>
                    </li>
                </div>

                <div class="row mt-1">
                    <li class="col-md-4">
                        <div class="form-group">
                            <label for="elecSeat">Electoral seat</label>
                            <label for="elecSeat">(මැතිවරණ ආසනය)</label>
                            <select name="elecSeat" id="elecSeat" class="form-control">
                                <option value="">Select Electoral seat</option>
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
                    <li class="col-md-4">
                        <div class="form-group">
                            <label for="division">Regional Secretariat Division</label>
                            <label for="division">(ප්‍රාද්ශීය ලේකම් කොට්ඨාසය)</label>
                            <select name="division" id="division" class="form-control">
                                <option value="">Select Regional Secretariat Division</option>
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
                    <li class="col-md-4">
                        <div class="form-group">
                            <label for="domain">Village Officer Domains</label>
                            <label for="domain">(ග්‍රාම නිලධාරී වසම)</label>
                            <select name="domain" id="domain" class="form-control">
                                <option value="">Select Village Officer Domains</option>
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
                </div>
                <li>
                    <div class="form-group">
                        <label for="referrer">Referred person</label>
                        <label for="referrer">(යොමු කල පුද්ගලයා)</label>
                        <input type="text" name="referrer" id="referrer" class="form-control">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label for="reason">Reason</label>
                        <label for="reason">(කාරණය)</label>
                        <input type="text" name="reason" id="reason" class="form-control">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <label for="description">(විස්තරය)</label>
                        <textarea name="description" id="description" rows="10" class="form-control"> </textarea>
                    </div>
                </li>
            </ol>

            <div class="text-center mb-5">

                <p class="text-dark">I hereby confirm that I have inspected the above business and that the business is
                    eligible for registration.</p>
            </div>
            <div class="row justify-content-center mb-5">
                <!-- <div class="col-md-6">
                    <p>Checked by:</p>
                </div> -->
                <div class="col-md-3">
                    <p>Date: <?php echo date('D, d M Y') ?></p>
                </div>
                <div class="col-md-3">
                    <p>Time:<?php echo date('H:i:s') ?></p>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-5 ml-md-5">
                    <p>-------------------<br>
                        Divisional secretary<br>
                        ප්‍රාදේශීය ලේකම්</p>
                </div>
                <div class="col-5 ml-md-5 ">
                    <p>-------------------<br>
                        Grama Niladhari <br>
                        ග්‍රාම නිලධාරී</p>
                </div>
            </div> -->

            <!-- Payment Section -->
            <hr>
            <!--
            <h1>Payment Section</h1>
             <div class="row no-gutters">

                <div class="form-group col-md-4 mr-md-5 ">
                    <label for="card_num">Credit card details</label>
                    <div class="input-group">
                        <input class="form-control" type="number" id="card_num" name="card_num" placeholder="1234 1234 1234 1234" required>
                    </div>
                    <span><i class="fab fa-cc-visa display-4"></i> <i class="fab fa-cc-mastercard display-4"></i> <i class="fab fa-cc-amex display-4"></i></span>
                </div>


                <div class="form-group col-md-6">
                    <label for="name">Card holder name</label>

                    <input type="text" name="name" id="name" placeholder="Card holder name" class="form-control" required>
                </div>

            </div>
            <div class="row no-gutters">

                <div class="form-group col-md-3 mr-md-5">
                    <label for="card_date">Credit card expire date</label>
                    <div class="input-group">
                        <input class="form-control" type="text" id="card_date" name="card_date" placeholder="MM/YY" required>
                    </div>
                </div>


                <div class="form-group col-md-3">
                    <label for="name">Amount</label>
                    Rs.
                    <input type="hidden" name="amount" id="amount" value="120.00" class="form-control">
                    <input type="text" name="amount" id="amount" value="120.00" class="form-control" disabled>
                </div>

            </div>
-->
            <div class="form-group">
                <input type="submit" value="Save" name="application_save" class="btn">
            </div>
        </form>
    </div>
</div>
<?php
include 'support/footer.php';
?>
<script src="js\online_application_add.js"></script>
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
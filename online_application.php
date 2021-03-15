<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    require_once("connection/connection.php");
    include 'support/header.php';
?>
    <div class="container p-1">
        <div class="border p-2">
            <h1>Business Registration Form</h1>
            <form action="php/online_application_add.php" method="POST" onsubmit="return validateForm()">
                <ol>
                    <li>
                        <div class="form-group">
                            <label for="bName">Name of the business</label>
                            <label for="bName">(ව්‍යාපාපාරයේ නාමය)</label>
                            <input type="text" name="bName" id="bName" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="bForm">The general form of the business</label>
                            <label for="bForm">(ව්‍යාපාපාරයේ සාමාන්‍ය ස්වරූපය)</label>
                            <input type="text" name="bForm" id="bForm" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="bAddress">Address of the place of business</label>
                            <label for="bAddress">(ව්‍යාපාපාරික ස්ථානයේ ලිපිනය)</label>
                            <input type="address" name="bAddress" id="bAddress" class="form-control">
                        </div>
                    </li>
                    <div class="row no-gutters">
                        <li class="col-md-6">
                            <div class="form-group">
                                <label for="bDate">Date of commencement of business</label>
                                <label for="bDate">(ව්‍යාපාපාරය ආරම්භ කළ දිනය)</label>
                                <input type="date" name="bDate" id="bDate" class="form-control">
                            </div>
                        </li>
                        <li class="col-md-4 ml-md-5">
                            <div class="form-group">
                                <label for="bCount">Number of employees</label>
                                <label for="bCount">(සේවයේ නියුතු සංඛ්‍යාව)</label>
                                <input type="text" name="bCount" id="bCount" class="form-control">
                            </div>
                        </li>
                    </div>
                    <li>
                        <div class="form-group">
                            <label for="bSubName">If the owner/ owners are engaged in another business, the business name<label>
                            <label for="bSubName">(අයිතිකරු/ අයිතිකරුවන් වෙනත් ව්‍යාපාරයක යෙදී සිටියි නම් එහි නම)</label>
                            <input type="text" name="bSubName" id="bSubName" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="bOwnerAddress">Address of the owner</label>
                            <label for="bOwnerAddress">(අයිතිකරුගේ ලිපිනය)</label>
                            <input type="text" name="bOwnerAddress" id="bOwnerAddress" class="form-control">
                        </div>
                    </li>
                    <div class="row no-gutters">
                        <li class="col-md-4 mr-md-5">
                            <div class="form-group">
                                <label for="bContact">Phone number where the owner can be contact</label>
                                <label for="bContact">(අයිතිකරු සම්බන්ධ කරගත හැකි දුරකතන අංකය)</label>
                                <input type="text" name="bContact" id="bContact" class="form-control">
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="form-group">
                                <label for="bCitizenship">Citizenship of the owners</label>
                                <label for="bCitizenship">(අයිතිකරුවන්ගේ පුරවැසිභාවය)</label>
                                <input type="text" name="bCitizenship" id="bCitizenship" class="form-control">
                            </div>
                        </li>
                    </div>
                    
                    <li>
                        <div class="form-group">
                            <label for="bEmail">Email of the owners</label>
                            <label for="bEmail">(අයිතිකරුවන්ගේ විද්‍යුත් ලිපිනය)</label>
                            <input type="email" name="bEmail" id="bEmail" class="form-control">
                        </div>
                    </li>
                    <div class="row no-gutters">
                        <li class="col-md-6">
                            <div class="form-group">
                                <label for="bOwnership">Ownership of the place of business</label>
                                <label for="bOwnership">(ව්‍යාපාපාරික ස්ථානයේ අයිතිය)</label>
                                <input type="text" name="bOwnership" id="bOwnership" class="form-control">
                            </div>
                        </li>
                        <li class="col-md-4 ml-md-5">
                            <div class="form-group">
                                <label for="bDivision">Grama Niladhari division</label>
                                <label for="bDivision">(ග්‍රාම නිලධාරී වසම)</label>
                                <select name="bDivision" id="bDivision" class="form-control">
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
                    </div>
                </ol>
                <div class="text-center mb-5">

                    <p class="text-dark">I hereby confirm that I have inspected the above business and that the business is eligible for registration.</p>
                </div>
                <div class="row justify-content-between mb-5">
                    <div class="col-md-6">
                        <p>Checked by:</p>
                    </div>
                    <div class="col-md-3">
                        <p>Date:</p>
                    </div>
                    <div class="col-md-3">
                        <p>Time:</p>
                    </div>
                </div>
                <div class="row justify-content-center">
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
                </div>

                <!-- Payment Section -->
                <hr>
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
                                <input type="hidden" name="amount" id="amount" value="120.00" class="form-control" >
                                <input type="text" name="amount" id="amount" value="120.00" class="form-control" disabled >
                            </div>
                       
                    </div>

                <div class="form-group">
                    <input type="submit" value="Save" name="form1_save" class="btn">
                </div>
            </form>
        </div>
    </div>
    <?php
		include 'support/footer.php';
    ?>
    <script src="js\online_application_add.js"></script>

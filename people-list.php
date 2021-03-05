<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
    require "connection/connection.php";
    include "support/header.php";
?>
<div class="container">
    <div class="text-center mb-5">
        <h1>People List</h1>
    </div>
    <div id="table">
    </div>
</div>

<div class="modal fade" id="people_details_update">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #95103b">
                <h4 class="modal-title" style="color: white">Update People Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <div class="form-group">
                        <div class="input-group">
                            <input hidden class="form-control" type="text" id="update_pid" name="update_pid" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_username">First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="update_first_name" name="update_first_name" placeholder="First name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_lastname">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input class="form-control" type="text" id="update_last_name" name="update_lastname" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                            </div>
                            <input class="form-control" type="email" id="update_email" name="update_email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_grama_niladhari_division">Grama Niladhari Division</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <div class="input-group">
                                <select id="update_grama_niladhari_division" class="form-control">
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
                        <label for="update_gender">Gender</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            <div class="input-group">
                                <select id="update_gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_contact_number">Contact Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                            <input type="tel" id="update_contact_number" name="update_contact_number" class="form-control" placeholder="079 1234 56">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_address">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="tel" id="update_address" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <br>
<!--                    <div>-->
<!--                        <input type="submit" class="btn btn-success" id="add_people" value="Add People">-->
<!--                    </div>-->
                </form>
            </div>
            <div class="modal-footer justify-content-end">
                <div class="">
                    <input class="btn btn-" id="update_people_details"
                           type="submit"
                           value="Update People Details">
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script src="layout/scripts/alertBox.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
    include "support/footer.php";
?>
<script src="js/people-add.js"></script>


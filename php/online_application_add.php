<?php
    session_start();
    require_once("../connection/connection.php");
?>

<?php
    if(isset($_POST['form1_save'])){

        $bName = $_POST['bName'];
        $bForm = $_POST['bForm'];
        $bAddress = $_POST['bAddress'];
        $bDate = $_POST['bDate'];
        $bCount = $_POST['bCount'];
        $bSubName = $_POST['bSubName'];
        $bOwnerAddress = $_POST['bOwnerAddress'];
        $bContact = $_POST['bContact'];
        $bCitizenship = $_POST['bCitizenship'];
        $bEmail = $_POST['bEmail'];
        $bOwnership = $_POST['bOwnership'];
        $bDivision = $_POST['bDivision'];
        $userID = $_SESSION['USER_ID'];

        $sql = "INSERT INTO business_registration(b_name, b_form, b_address, b_date, b_emp_count, b_sub_name, 
                                b_owner_address, b_contact, b_citizenship, b_email, b_ownership, b_grama_division, submitted_by)
            VALUES ('$bName','$bForm','$bAddress','$bDate','$bCount','$bSubName','$bOwnerAddress','$bContact',
                            '$bCitizenship','$bEmail','$bOwnership','$bDivision','$userID')";
    
        if(mysqli_query($conn, $sql)){
            $_SESSION["FORM_SUBMITTED"] = true;
            session_write_close();

            header('location: ../online_application_home.php');
            exit();
        }
        else{
            $_SESSION["FORM_SUBMITTED"] = false;
            session_write_close();
            
            // die ("Connection failed ".mysqli_query($conn, $sql) .$conn->connect_error);
            header('location: ../online_application.php');
            exit();
        }
    }

    if(isset($_POST['form2_save'])){

        $fullName = $_POST['fullName'];
        $division = $_POST['division'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $requirement = $_POST['requirement'];
        $nic = $_POST['nic'];
        $gender = $_POST['gender'];
        $userID = $_SESSION['USER_ID'];

        $sql = "INSERT INTO requirement_application(full_name, division, address, contact,
                     email, requirement, nic, gender, submitted_by)
            VALUES ('$fullName','$division','$address','$contact','$email','$requirement','$nic','$gender','$userID')";
    
        if(mysqli_query($conn, $sql)){
            $_SESSION["FORM_SUBMITTED"] = true;
            session_write_close();

            header('location: ../online_application_home.php');
            exit();
        }
        else{
            $_SESSION["FORM_SUBMITTED"] = false;
            session_write_close();
            
            // die ("Connection failed ".mysqli_query($conn, $sql) .$conn->connect_error);
            header('location: ../online_application2.php');
            exit();
        }
    }
?>
<?php
    session_start();
    require_once("../connection/connection.php");
?>
<?php
    if($_POST['register']){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone  = $_POST['phone'];
        $nic = $_POST['nic'];
        $password = $_POST['password'];
        $rePassword = $_POST['repassword'];
        $profision = $_POST['customRadio'];

        $type = 0;

        if($profision == 'Secretary'){
            $type = 1;
        }
        else if($profision == 'Grama Niladhari'){
            $type = 2;
        }

        $sql = "INSERT INTO user(firstname, lastname, username, email, contact, password, type) 
            VALUES ('$firstname', '$lastname', '$username' , '$email', '$phone', '$password' ,'$type')";
        
        if(mysqli_query($conn, $sql)){
            $_SESSION['REGISTERED'] = true;
            session_write_close();

            header ("location: ../register.php" );
                    exit();
        }
        else{
            $_SESSION['REGISTERED'] = false;
            session_write_close();

            header ("location: ../register.php" );
                    exit();
        }
    }
?>
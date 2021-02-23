<?php
    session_start();
    require_once('../connection/connection.php');

    if(isset($_POST['event_save'])){
        
        $errors = array();
        if(isset($_FILES["event_image"])){

            $event_name = $_POST['event_name'];
            $event_date = $_POST['event_date'];


            $event_image_name = $_FILES['event_image']['name'];
            $event_image_temp = $_FILES['event_image']['tmp_name'];
            $event_image_ext = pathinfo($event_image_name, PATHINFO_EXTENSION);
            $event_description = $_POST['event_description'];
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($event_image_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }else{
            
                $sql = "INSERT INTO events(e_name, e_date, e_image, e_description) 
                    VALUES ('$event_name','$event_date','$event_image_name','$event_description')";
    
                if(mysqli_query($conn,$sql)){
                    move_uploaded_file($event_image_temp,"../uploadFiles/".$event_image_name);

                    $_SESSION["UPLOAD"] = "success";
                    session_write_close();

                    header ("location: ../event.php" );
                    exit();
                }
                else{
                    $_SESSION["UPLOAD"] = "unsuccess";
                    session_write_close();
                    die("Query failed: ".mysqli_error($conn));
                }
            }
        }else{
            echo 'file error';
        }
    }

    if(isset($_GET["event_id"])){
        $e_id = $_GET['event_id'];

        $_SESSION["EVENT_ID"] = $e_id;
        session_write_close();

        header('location: /event.php');
        exit();
    }else{
        header('location: /event.php');
        exit();
    }
    
?>
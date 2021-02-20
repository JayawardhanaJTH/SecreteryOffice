<?php
    require_once '../connection/connection.php';

    if($_POST["id"] == "insert"){
        
        $event_name = $_POST['event_name'];
        $event_date = $_POST['event_date'];
        $event_image = $_POST['file'];
        $event_description = $_POST['description'];

        $sql = "INSERT INTO events(e_name, e_date, e_image, e_description) 
                VALUES ($event_name,$event_date,$event_image,$event_description)";
    }
    
?>
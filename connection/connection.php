<?php 
    $hostname = 'localhost';
    $dbPassword = '';
    $dbUsername = 'root';
    $database = 'divisional_secretary';
    
    try {
            $conn = new mysqli($hostname,$dbUsername,$dbPassword,$database);
            
            if($conn->connect_error){
                die ("Connection failed " .$conn->connect_error);
            }
    } catch (\Throwable $th) {
            echo("Error on database server!");
    }
?>
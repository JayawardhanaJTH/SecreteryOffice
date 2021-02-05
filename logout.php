<?php
    require "connection/connection.php";

    session_start();
    //clear all session variables
    session_unset();
    session_destroy();
    
    header("Location: login.php");
?>
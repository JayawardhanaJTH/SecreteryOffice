<?php
    require "connection/connection.php";

    session_start();
    //clear all session variables
    session_unset();
    session_destroy();
    session_write_close();
    header("Location: login.php");
?>
<?php
    session_start();
    require "connection/connection.php";
    include "support/header.php";
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
		
	}
?>
<div class="container">
    <div class="text-center mb-5">
        <h1>People List</h1>
    </div>
    <div id="table">
    </div>
</div>

<script src="layout/scripts/alertBox.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
    include "support/footer.php";
?>
<script src="js/people-add.js"></script>

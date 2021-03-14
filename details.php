<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
	}
    require "connection/connection.php";
    include "support/header.php";
?>

<?php
	$sql = "SELECT status FROM availability";
	$result = mysqli_query($conn, $sql);

	$status = mysqli_fetch_assoc($result);

	
?>
<div class="container">
    <div class="row justify-content-center border p-5 m-5">
        <form action="#" method="POST">
            <h2>Change Availability</h2>
            <div class="form-group text-center">
                <label for="availability1">Available</label>
                <input type="radio" name="availability" id="availability1" checked=" <?php if($status=='1'){ echo 'true';} ?>" value="available" class="form-control">
            </div>
            <div class="form-group text-center">
                <label for="availability2">Not Available</label>
                <input type="radio" name="availability" id="availability2" checked=" <?php if($status=='0'){ echo 'true';} ?>"value="notAvailable" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn" value="Save" name="availability_save">
            </div>
        </form>
    </div>
</div>
<?php
    include "support/footer.php";
?>
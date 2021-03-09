<?php
    session_start();
    if(!isset($_SESSION['logged'])){
		header("location: login.php");
	}
    require "connection/connection.php";
    include "support/header.php";
?>
        <link href="layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
    <div class="dash">
        <div class="topic">
            <h1>Dashboard</h1>
        </div>
        <div class="status">
			<div class="card-deck">
				<div class="card">
					<div class="card-body">
						<h1>Total registered peoples</h1>
                        <?php
                        $sql = "select count(*) as total from people";
                        $rs = mysqli_query($conn, $sql);

                        if ($row = mysqli_fetch_array($rs)) {
                            $total = $row["total"];
                            echo "<h5>Total registered : $total</h5>";
                        }
                        ?>
					</div>
				</div>
	
				<div class="card">
					<div class="card-body">
						<h1>Total income of this month</h1>
						<h1>Rs : 12334</h1>
					</div>
				</div>
	
				<div class="card">
					<div class="card-body">
						<h1>Total grama niladhari divisions</h1>
						<h1>10</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="panel">
			<div class="row justify-content-center">
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="people_details.php">
						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-users"> People</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About people in the divisional area</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="event.php">

						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-calendar-check"> Events</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About upcoming events</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="w-100"></div>
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="#">

						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-coins"> Income</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About income details</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="#">

						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-check-circle"> Approvals</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About application approvals details</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="w-100"></div>
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="#">

						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-info-circle"> Details</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About essential details of office</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 mb-3">
					<a href="#">

						<div class="card">
							<div class="card-header text-center">
								<h1><i class="fa fa-map-marker"> Availability</i></h1>
							</div>
							<div class="card-body text-center">
								<div class="details">
									<p>About secretary availability</p>
								</div>
							</div>
						</div>
					</a>
				</div>
					
			</div>
			
		</div>
    </div>
    
<?php
    include "support/footer.php";
?>
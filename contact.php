<?php
	session_start();
	if(!isset($_SESSION['logged'])){
		header("location: login.php");
	}
	require "connection/connection.php";
	include "support/header.php";
?>
    <!-- Start of contact page -->
    <div class="container-fluid">
        <div class="contact_forum m-2 p-2">
            <!-- office contacts -->
            <div class="container-fluid">
                <div class="alert-info topic_bar">
                    <h1 class="ml-5 topic">Office Contact Details</h1>
                </div>
				<div class="card-container">
					<div class="card-deck mb-2 ">
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Divisional Secretary
								</h3>
								<p class="card-text">0112 931 193</p>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Additional secretary  
								</h3>
								<p class="card-text">0112 942 928</p>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Accounts Branch
								</h3>
								<p class="card-text">0112 943 333								</p>
							</div>
						</div>
					</div>
					<div class="card-deck mb-4">
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Land Branch  
								</h3>
								<p class="card-text">0112 182 988</p>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Planning Branch 
								</h3>
								<p class="card-text">0112 980 700</p>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-header">Samurdhi 
								</h3>
								<p class="card-text">0112 981 467</p>
							</div>
						</div>

					</div>

				</div>
            </div>

            <!-- contact forum -->
            <div class="container-fluid text-white contact_message pb-1 mb-3">
                
                <form action="#" >
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="3"  class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                            <input type="submit" value="Send" class="btn">
                    </div>
                </form>
            </div>

            <!-- Gramaniladari contacts -->
            <div class="container-fluid">
                <div class="alert-secondary topic_bar">
                    <h1 class="ml-5 topic">Grama niladhari Contact Details</h1>
                </div>
				<div class="card-container">
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">Mr. T.H.D Chandana</h4>
							<span class="profile_title">164 Pamunugama </span>
							<span class="profile_title">071-4898663
							</span>
						</div>
					</div>
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">Mrs.M.L.D.C Niranjani </h4>
							<span class="profile_title">164/A maha pamunugama  </span>
							<span class="profile_title">071-8783887	</span>
						</div>
					</div>
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">B.O.S.I Rodrigo </h4>
							<span class="profile_title">165 Bopitiya  </span>
							<span class="profile_title">071-8137714
							</span>
						</div>
					</div>
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">Mr. M.D.A. Chathuranga </h4>
							<span class="profile_title">165/A Bopitiya  </span>
							<span class="profile_title">077-1000229
							</span>
						</div>
					</div>
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">Mr. J.M.D.D.R Gayan </h4>
							<span class="profile_title">166 Nugape </span>
							<span class="profile_title">0776961377

							</span>
						</div>
					</div>
					<div class="profile">
						<span class="profile_img">
							<img src="images/user.png" alt="user image" >
						</span>
						<div class="profile_text">
							<h4 class="profile_name">Mr. P.D.N.P. Lal </h4>
							<span class="profile_title">167 Uswetakeiyyawa </span>
							<span class="profile_title">071-8266337
							</span>
						</div>
					</div>
				</div>
            </div>

            <!-- Essential contacts -->
            <div class="container-fluid">
                <div class="alert-warning topic_bar">
                    <h1 class="ml-5 topic">Essential Contact Details</h1>
                </div>
				<div class="essential">
					<div class="row essential_text align-items-baseline">
						<h4 class="col-6 ess_name">Government Service Center (Secretary) </h4>
						<h4 class="col-1"> | </h4>
						<h4 class="col-5 ess_number">0112 958 492</h4>
					</div>

				</div>
				<div class="essential">
					<div class="row essential_text align-items-baseline">
						<h4 class="col-6 ess_name">Register Division (Mrs. H.D.N. Ranjala)  </h4>
						<h4 class="col-1"> | </h4>
						<h4 class="col-5 ess_number">0773080343
						</h4>
					</div>

				</div>
				<div class="essential">
					<h4 class="pl-1 text-center">District management</h4>
					<div class=" essential_text align-items-baseline row">
						<div class="col-md-6">
							<h4 class=" ess_name">Disaster management  </h4>
								<h4 class=" ess_number">0112 695 013</h4>
						</div>
						<div class="col-md-6">
							<h4 class=" ess_name">National Disaster Relief Service
								
								<h4 class=" ess_number">0112 665 258</h4>
						</div>
						
					</div>

				</div>
				<div class="essential">
					<h4 class="pl-1 text-center">Post office					</h4>
					<div class=" essential_text align-items-baseline row">
						<div class="col-md-6">
							<h4 class=" ess_name">Main Post Office  </h4>
								<h4 class=" ess_number">0114 949 986</h4>
						</div>
						<div class="col-md-6">
							<h4 class=" ess_name">Welisara Post office
								
								<h4 class=" ess_number">0112 956 271</h4>
						</div>
						
					</div>

				</div>

				<div class="essential">
					<h4 class="pl-1 text-center">Police Station</h4>
					<div class=" essential_text row justify-content-around">
						<div class="col-md-6">
							<h4 class=" ess_name">Pamunugama  </h4>
								<h4 class=" ess_number">0112 930 222</h4>
						</div>
						<div class="col-md-6">
							<h4 class=" ess_name">Mahabage		</h4>
								<h4 class=" ess_number">0112 243 492</h4>
						</div>
						
								

					</div>

				</div>
				<div class="essential">
					<div class="row essential_text align-items-baseline">
						<h4 class="col-6 ess_name">Samurdhi Division (Mrs. Nimali Rupika)  </h4>
						<h4 class="col-1"> | </h4>
						<h4 class="col-5 ess_number">0779175085</h4>
					</div>

				</div>
            </div>

        </div>
    </div>

    <!-- End of contact page -->

<?php
    include "support/footer.php";
?>
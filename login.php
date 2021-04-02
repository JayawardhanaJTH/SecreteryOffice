<?php 
	session_start();
	require "connection/connection.php";
	include 'support/header.php';
?>

    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="login-main p-2 col-10 col-md-6" style="border: 2px solid maroon; border-radius: 0px 30px 0px 30px;">
                <div class="text-center">
                    <h1 class="font-x2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Login</h1>
                </div>
                <div class="login-form p-2">

                    <form action="php/login_exe.php" method="POST" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-at"></i></div>
                                </div>
								<input class="form-control" type="email" name="email" placeholder="Email">
							</div>
							<span class="text-danger font-weight-bold"> </span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                
							</div>
							<span class="text-danger font-weight-bold"> </span>
							<small class="form-text"><a href="#"> Forgot Password </a> / <a href="register.html"> Not a member register </a></small>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label for="remember" class="form-check-label">Remember</label>
                        </div>
                        <br>
                        <div>
                            <input type="submit" name="login_btn" class="btn btn-success" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>

    <!-- Footer -->
	<div class="wrapper row4">
		<footer id="footer" class="hoc clear">
			<div class="one_third first">
				<h6 class="heading">Divisional Secretary</h6>
				<p></p>
				<p class="btmspace-30"></p>
				<ul class="faico clear">
					<li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
					<li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="one_third">
				<h6 class="heading">Contact Us</h6>
				<ul class="nospace clear">
					<li><i class="fas fa-phone-square"></i>  Give us a call : +94 112 1234 56</li>
					<li><i class="fas fa-at"></i>  Send us a email : secretaryoffice@gmail.com</li>
					<li><i class="fas fa-envelope"></i>  Send us a mail : 11/2 Colombo</li>
				</ul>
			</div>
			<div class="one_third">
				<h6 class="heading">Join with us</h6>
				<p class="nospace btmspace-15">Submit your email to get latest news immediately.</p>
				<form method="post" action="#">
					<fieldset>
						<legend>Newsletter:</legend>
						<input class="btmspace-15" type="text" value="" placeholder="Name">
						<input class="btmspace-15" type="text" value="" placeholder="Email">
						<button type="submit" value="submit">Submit</button>
					</fieldset>
				</form>
			</div>
		</footer>
    </div>
    <div class="wrapper row5">
		<div id="copyright" class="hoc clear">
			<p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Divisional Secretary</a></p>
			
		</div>
	</div>
	<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<script src="layout/scripts/scroll.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/event_add.js"></script>
    <script src="js/downloads_add.js"></script>
    <script src="js\popup_msgs.js"></script>
    <script src="layout\scripts\activeLinks.js"></script>
	
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
	
	<script>
		var s = skrollr.init();
	</script>
	<?php
		if(isset($_SESSION['login_err'])){
			$Err = $_SESSION['login_err'];
	?>
			<script type='text/javascript'>
					error_popup('<?php echo $Err ?>');
				</script>;
	<?php	
			unset($_SESSION['login_err']);
		}
	?>
</body>
</html>
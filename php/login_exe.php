<?php
    session_start();

    require_once(__DIR__.'/../connection/connection.php');

    $emailErr = '';
    $passwordErr = '';

			if(isset($_POST['login_btn'])){
				// get user entered email and password to variables
				$email = $_POST['email'];
				$password = $_POST['password'];

				$emailErr = '';
				$passwordErr = '';
                $errflag = false;

				if(empty($email)){
					$emailErr = "Please input email";
                    $errflag = true;
				}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$emailErr = "Invalid email format";
                    $errflag = true;
				}
				if(empty($password)){
					$passwordErr = "Please input password";
                    $errflag = true;
				}

				if(!$errflag){

					// avoid sql injection
					$email = mysqli_real_escape_string($conn, trim($email));
					$password = mysqli_real_escape_string($conn, trim($password));

					// query to check is user valid or not
					$query = "SELECT * FROM user_login WHERE email = '$email' AND password = '$password' ";
					$query2 = "SELECT * FROM people WHERE email = '$email' AND password = '$password' ";
					
					$result = mysqli_query($conn,$query);
					$result2 = mysqli_query($conn,$query2);

					if($result){
						if(mysqli_num_rows($result) == 1){
                            session_regenerate_id();
                            $user = mysqli_fetch_assoc($result);

                            $_SESSION['logged'] = true;
                            $_SESSION['username'] = $user['username'];
                            $_SESSION['TYPE'] = $user['type'];

							if($user['type'] == '2'){
								$uer_id = $user['id'];

								$sql = "SELECT division FROM user WHERE id = '$uer_id'";

								$result3 = mysqli_query($conn,$sql);
								$grama_niladhari = mysqli_fetch_assoc($result3);

								$_SESSION['DIVISION'] = $grama_niladhari['division'];
							}
                            session_write_close();

                            header("Location: ../index.php");
                            exit();
                        }
						else if(mysqli_num_rows($result2) == 1){
                            session_regenerate_id();
                            $user = mysqli_fetch_assoc($result2);

                            $_SESSION['logged'] = true;
                            $_SESSION['username'] = $user['first_name'];
                            $_SESSION['TYPE'] = '0';
                            $_SESSION['USER_ID'] = $user['pid'];

                            session_write_close();

                            header("Location: ../index.php");
                            exit();
                        }
						else{
							echo "<script> alert('User is not Valid'); </script>"; 

							$emailErr = "Invalid email or password";

							session_write_close();

							header("Location: ../login.php");
							exit();
						}	
					}
					
				}
                else{
                    session_write_close();

                    header("Location: ../index.php");
                    exit();
                }
			}
	?>
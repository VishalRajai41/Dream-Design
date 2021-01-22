
<?php
	include("connect.php");

	
	if(isset($btnfreelancer))
	{
		if (@$txtotp==$_SESSION['otp']) 
		{
				header("location:countrydropdown.php");
		}
		else 
		{
			$msg="Input Proper Otp";
			//echo $msg;
		}
	}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style>
	.wrap-login100{
	margin-top:8%;
	}
	</style>
</head>
<body>

	<div class="limiter">
		<nav class="head"><div class="se-left"><img src="logo.png" width="250px"></div>
		<div class="se-right">Already have an account?<a href="index.php"> Login</a></div>
		</nav>
		<div class="container-login100" style="background:lightgray">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-34 p-t-27">
						Enter otp
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter Otp">
						<input class="input100" type="text" name="txtotp" placeholder="Enter otp">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnfreelancer" >
							Next
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#" style="text-decoration: none">
							Resend otp
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
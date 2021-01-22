<?php
	include("connect.php");
	if (isset($btnsubmit)) 
	{
		
	$otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
	@$to=$email;
	@$sub=$txtlname;

	mail($to,$sub,$otp_code);
	@$_SESSION['fname']=$fname;
    @$_SESSION['lname']=$lname;
    @$_SESSION['email']=$email;
    $_SESSION['otp']=$otp_code;

    
	header("location:emailotp.php");
	}
			
			
?>

<script language="javascript">

	function validate()
	{
		if (frm.fname.value=="") {
			alert("First Name should not left blank")
		}
		else if (frm.lname.value=="") {
			alert("Last Name should not left blank")
		}
		else if (frm.email.value=="") {
			alert("Email should not left blank")
		}
		else
			//frm.action="emailotp.php";

	}


</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
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

		<nav class="head">
		<div class="se-left"><img src="logo.png" width="250px">
		</div>
		<div class="se-right">Already have an account?<a href="index.php"> Login</a></div>
		</nav>
		<div class="container-login100" style="background:lightgray">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" name = "frm" action="">
					<span class="login100-form-title p-b-34 p-t-27">
						Sign up
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter first name">
						<input class="input100" type="text" name="fname" placeholder="First name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter last name">
						<input class="input100" type="text" name="lname" placeholder="last name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter work email adress">
						<input class="input100" type="text"  name="email" placeholder="Work email adress">
						<span class="focus-input100" data-placeholder="&#xf200;"></span>
					</div>

			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnsubmit" onClick="validate()">
							Next
						</button>
					</div>
		
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!--<div id="dropDownSelect1"></div>-->
	
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
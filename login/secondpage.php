<?php
	include("connect.php");
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$email=$_SESSION['email'];
	if (isset($btnnext)) 
	{
		mysqli_query($con,"insert into freelancer(f_name,l_name,f_email,f_country,f_username,password) values('$fname','$lname','$email','$listcountry','$username','$txtpass')")or die(mysqli_error($con));
			header("location:experience_level.php");
	}
?>
<html>
<head>
<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha-image-adv.php?rand_number=" + Math.random();
}
</script>
</head>
<body >
<form method="POST"  enctype="multipart/form-data">	
<table border="5" align="center" cellspacing="10" cellpadding="10">
<tr>
	<td>Contry  :</td>
	<td>
		<select name="listcountry">
			<option  value="india" >India</option>
			<option  value="Surat" >Surat</option>
			<option  value="ahmedabad" >Ahmedabad</option>
			<option  value="Rajkot" >Rajkot</option>
			<option  value="Amreli" >Amreli</option>
		</select>
	</td>
	<tr align="center">
			<td>Password</td>
			<td><input type="password" name="txtpass" placeholder="************"></td>
	</tr>
	<tr >
		<td colspan="2" align="center">I Want To</td>
	</tr>
	<tr>
		<td><button name="btnhire" >Hire For A Project</button></td>
		<td><button name="btnfreelancer">Work as Freelancer</button></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><button name="btnnext">Next</button></td>
	</tr>
</tr>
</table>
</form>
</body>
</html>
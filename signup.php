<?php
	include("connect.php");
	if (isset($btnsubmit)) 
	{
		//mysqli_query($con,"insert into freelancer(f_name,l_name,f_email) values('$txtfname','$txtlname','$email')")or die(mysqli_error($con));

	$otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
	@$to=$email;
	@$sub=$txtlname;

	mail($to,$sub,$otp_code);
	$_SESSION['fname']=$txtfname;
    $_SESSION['lname']=$txtlname;
    $_SESSION['email']=$email;
    $_SESSION['otp']=$otp_code;
	header("location:otp1.php");
	}
			
			
?>

<form method="POST"  enctype="multipart/form-data">	
<table border="5" align="center" cellspacing="10" cellpadding="10">
<tr>
	<td>First Name  :</td>
	<td><input type="text" name="txtfname" maxlength="50" placeholder="First Name" size="30"></td>
</tr>
<tr>
	<td>Last Name  :</td>
	<td><input type="text" name="txtlname" maxlength="50" placeholder="Last Name" size="30"></td>
</tr>
<tr>
	<td>Email :</td>
	<td><input type="email" name="email" maxlength="50" placeholder="Email" size="30"></td>
</tr>
<tr>
	<td colspan=2 align="center"><input type="submit" name="btnsubmit" value="Submit"> </td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?php echo @"<font color=red>$msg</font>"; ?>
	</td>
</tr>
</table>
</form>



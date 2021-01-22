<?php
	include("connect.php");

	
	if(isset($btnfreelancer))
	{
		if ($txtotp==$_SESSION['otp']) {
		header("location:secondpage.php");
	}
	else 
	{
		$msg="Input Proper Otp";
		echo $msg;
	}
	echo $_SESSION['otp'];
	}	

?>
<form method="POST"  enctype="multipart/form-data">	
<table border="5" align="center" cellspacing="10" cellpadding="10">
<tr>
	<td>Otp Verification</td>
	<td><input type="text" name="txtotp" maxlength="50" placeholder="First Name" size="30"></td>
</tr>
<tr>
		
		<td><button name="btnfreelancer">Submit</button></td>
	</tr>
</table>
</form>
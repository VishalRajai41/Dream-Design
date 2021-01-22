<?php
$otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
@$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <rajaivishal41@gmail.com>' . "\r\n";
$headers .= 'Cc: rajaivishal41@gmail.com' . "\r\n";
$to='$txtemail';
$emailSubject = "DEMO OTP - HOW TO MAKE OTP CODE USING PHP";
$emailContent="Hii Test Msg";
/*$emailContent = "<div style='
    background: #f5f5f5;
    max-width: 600px;
    margin: 20px auto; 
    border: 1px solid #282887;
'>
	<div style='
    padding: 10px;
    background: #fdd55d;
    text-align: center;
    border-bottom: 1px solid #282887;
'></div>
	<div style='
    padding: 20px;
    text-align: center;
    color: #282887;
'><h2 style='
    text-align: center;
    margin-bottom: 20px;
'>Thanks to request an OTP</h2> 
				<p style='
    margin-bottom: 10px;
'>Your OTP Code for this transaction is <strong>$otp_code</strong></p>
				<p style='
    text-align: center;
    margin-bottom: 15px;
'>Like us On Facebook</p>
				<p> style='
    display: block;
    width: 100%;
    text-align: center;
    font-size: 18px;
    border: 1px solid #3b5998;
    position: relative;
    font-weight: 400;
    outline:0;
    cursor:pointer;
    text-decoration: none;
    max-width:300px;
    margin:20px auto;
    padding: 10px 0;
    background: transparent;
    color: #3b5998;
    border-width: 2px;
    border-radius:25px;
'>Like and Stay Updated</a></p>
<p style='
    margin-bottom: 10px;
'><br>
Mail us at: rajaivishal41@gmail.com</p>
  </div>
	</div>";*/
	mail($to,$emailSubject ,$emailContent);
?>
<form method="POST">	
<table border="5" align="center" cellspacing="10" cellpadding="10">
<tr>
	<td>To</td>
	<td><input type="email" name="txtemail" maxlength="50" placeholder="Email" size="30"></td>
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

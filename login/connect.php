<?php
session_start();
extract($_REQUEST);
$con=mysqli_connect("localhost","root","") or die(mysqli_error($con));
mysqli_select_db($con,"dream_design")or die(mysqli_error($con));

?>
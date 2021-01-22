<table>

<?php 	
		include("connect.php");
		$result=mysqli_query($con,"select * from sub_category_m where cat_id=$id") or die(mysqli_error($con));
		$i=0;
		$row1=mysqli_fetch_array($result)
		$arr=array($row1[0]);
		while (list($k,$v)=each($arr)) {
			$str.='<br/>'.$k.'<input type="checkbox"  value="'.$v.'" name="arr[]"/>';
		}
		if(isset($_POST['save'])){
		$countries=$_POST['country'];
		foreach ($countries as $country) {
			echo $country;
		}
	}

?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php echo get_countries_chk();?>
<input type="submit" name="save" value="submit">


</form>
</body>

</table>
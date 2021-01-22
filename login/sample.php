<?php
	
	function get_countries_chk(){
		$str='';
		$countries=array('India'=>1,'Usa'=>2,'Japan'=>3);
		while (list($k,$v)=each($countries)) {
			$str.='<br/>'.$k.'<input type="checkbox"  value="'.$v.'" name="country[]"/>';
		}
		return $str;
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
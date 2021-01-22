<table>

<?php 	
		include("connect.php");
		$result=mysqli_query($con,"select * from sub_category_m where cat_id=$id") or die(mysqli_error($con));
		$i=0;
		$cat='';
		while($row=mysqli_fetch_array($result)) 
		{
			$i++;
			$ch=$row[1];
			echo "<tr> <td> <input type=checkbox name='chk[]' value='$ch'> $row[1] </td></tr>";
			$cat=$cat.$ch.",";
		}
		$_SESSION['cat']=$cat;
		echo $cat;
?>

</table>
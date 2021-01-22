<?php

	include("connect.php");

?>
<script>
function loadsubcategory(str) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subcategory").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategory.php?id=" + str, true);
        xmlhttp.send();

  
}
</script>



<html>
<head>
	<title>Auction Your Antique</title>
</head>
<body>
	 
<form method=post  enctype="multipart/form-data">
<table>
	<tbody>
		<tr>
			<td >Product Category</td>
			<td >
				<select name="listcategory" onchange="loadsubcategory(this.value)">
					<option>-------Select-------</option>
					<?php 

						$result=mysqli_query($con,"select * from category_m") or die(mysqli_error($con));
						while($row=mysqli_fetch_array($result)) 
						{
							echo "<option value=$row[0]>$row[1]</option>";
						}
					?>	
				</select>
			</td>
		</tr>
		<tr > 
			<td>Sub Category</td>
			<td>
				<select name="subcategory" id="subcategory">
					<option>-------Select-------</option>
				</select>
			</td>
		</tbody>
</table></center>
</form>
</body>
</html>
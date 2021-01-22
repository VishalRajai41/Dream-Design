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


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
         .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid rgba(0,0,0,0.3);
            margin-bottom: 30px;
        }
        .head{
            width: 100%;
            top:0;
            height:70px; 
            font-size: 18px;
            position: absolute;
            background-color: white;
            box-shadow: 0px 5px 10px rgba(0,0,0,0.4);
        }
        .container-login100 {
              width: 100%;  
              min-height: 100vh;
              display: -webkit-box;
              display: -webkit-flex;
              display: -moz-box;
              display: -ms-flexbox;
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
              align-items: center;
              padding: 15px;

              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              /*position: relative;*/
              z-index: 1;  
        }
        .limiter {
            width: 100%;
            margin: 0 auto;
        }
        .form-control{
            margin-bottom: 25px;
            margin-top: 10px;
            padding-top: 3px;

            padding-bottom: 3px;
        }
        .selection{
            text-align: left;
            margin-top: 50px;
            margin-bottom:100px; 
        }
        
        .lbl{
            font-size: 20px;
            color:rgba(0,0,0,0.7);
        }
        .lbl2{
            font-size: 25px;
            text-align: center;
            color: limegreen;
            text-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        }
        

    </style>
<!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <nav class="head">
            <div class="se-left"><img src="logo.png" width="250px"></div>
        </nav>
        <div class="container-login100">
            <div class="wrap-login100">
            <div class="lbl2">Tell About Your Service</div><br><br>
            <div class="lbl1">What is the main service  you offer to clientss? </div>
            <div class="selection">
                <span class="lbl">Product Category</span>
                <select name="listcategory" class="form-control" onchange="loadsubcategory(this.value)">
                    <option>Select</option>
                  <?php 
                        include("connect.php");

                        $result=mysqli_query($con,"select * from category_m") or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($result)) 
                        {
                            echo "<option value=$row[0]>$row[1]</option>";
                        }
                    ?>  
                </select><br>
                <span class="lbl">Sub Category</span>
                <div id="subcategory">
                    
                </div>
               
                   
                
                <div class="lbl1">What skills do you offer clients?</div><br>
                <div class="wrap-input100 validate-input" data-validate = "Enter skills here">
                       <!-- <input class="input100" type="text" name="fname" placeholder="Enter skills here">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>-->
                        <input type="text" name="txtskill" placeholder="Enter skills here">
                </div>
                <div class="lbl1">What is your Experience Level?</div><br>
            </div>
            <div class="container-login100-form-btn">
                       <form>  <input type=submit name="btnlogin" value=Submit> </form>
                            
                    </div>
            

        </div>
    </div>
    </div>

    <div id="dropDownSelect1"></div>
    

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>

 <?php
        if(isset($btnlogin)){
    }

?>
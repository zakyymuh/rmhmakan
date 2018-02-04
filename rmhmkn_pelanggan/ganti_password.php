<?php
session_start();
include "header.php";
include "db.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Rumah Makan Broto</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
	
<body>
	<?php 
if(isset($_POST["gantipassword"])){
	$passwordlama = md5($_POST["passwordlama"]);
	$passwordbaru = md5($_POST["passwordbaru"]);
	$id=$_SESSION['uid'];
	$sql = "SELECT * FROM meja_info WHERE id_meja= $id AND password='$passwordlama'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
			$sql = "UPDATE meja_info SET password= '$passwordbaru' WHERE id_meja= $id";
			$run_query=mysqli_query($con,$sql);
			
		}else{

			
		}	
	
				
	}
	?>
	<div style="margin-top: 100px; " >
	<div class="panel panel-default">
        <div class="panel-heading" style="background-color: #0984e3">
        <h4 class="panel-title">Security</h4>
        </div>
        <form  action="ganti_password.php" method="post" name="gantipassword">
        <div class="panel-body">
          <div class="form-group" style="">
            <label class="col-sm-2 control-label">Password Lama </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="passwordlama">
            </div>
          </div>
          <div class="form-group" ">
            <label class="col-sm-2 control-label">Password Baru</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="passwordbaru">
              
          </div>
          
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" class="btn btn-primary" name="gantipassword">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </div>
        </div>
    </div>
</form>
	
</body>
</html>

















































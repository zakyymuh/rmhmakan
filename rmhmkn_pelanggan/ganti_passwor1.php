<body background="images/slider-bg.jpg">
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

  <style>


.login-box{
    background: #fbfbfb;
    width: 500px;
    margin-top: 11%;
    margin-right: auto;
    margin-left: auto;
    border-right: 1px solid grey;
    border-left: 1px solid grey;
    border-radius: 5px;
  }
.login-header,.navbar-header {
 font-size:35px;
 margin-bottom: 15px;
 text-decoration:none;
 line-height:1.5;
}
.navbar .navbar-right {
 font-size:25px;
}
.login-header a,.navbar-header a,.navbar-right a{
 text-decoration:none;
 color:black;
}
.banner-header {
 margin: 5px 5px;
}
.login-body {
 padding : 3%;
}
 .no-border-radius {
  border-radius : 0;
 }
 .box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px 0 0 0;
    margin-top: 10px;
    font-size: 20px;
 }
 .login-box input{
  padding: 5px 10px 5px 10px;
  font-size: 20px;
  height: 40px;
  color:black;
 }
 .login-box {
  padding: 30px 15px 5px 15px !important;
 }
 .login-box span {
  font-size: 20px;
 }
 .login-box img{
    width: 350px;
    height: 75px;
 }
 .btn-flat {
  border-radius:0;
 }
 .box-footer button{
  padding:5px 15px 5px 15px;
  font-size: 20px;
  width: 130px;
 }
 .box-footer span {
  font-size:12px;
 }
 .fa {
  color:black;
 }
 .box-footer a{
  height: 40px;
  width: 130px;
  font-size: 20px
 }

.box-footer .signup{
  font-size: 15px;
}

.container {
  background-image: url("product_images/slider-bg.jpg"); 
  width: 100%;
  height: 100vh;
}
</style>
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
  <body>
    <div class="container">
<div class="login-box">
 <div class="login-header text-center"> <center>
  <div class="logo">
      <a href="index.html"></a>
    </div>
</center><b>Ganti Password</b></a>
 </div>
 <div class="login-body">
  <form action="ganti_passwor1.php" method="POST">
  <div class="input-group">
  <span class="input-group-addon">
        <span class="glyphicon glyphicon-lock"></span>
        </span>
        <input type="password" name="passwordlama" class="form-control"  placeholder="Password Lama"  required="required">
  </div>
    <div class="input-group">
   <span class="input-group-addon">
        <span class="glyphicon glyphicon-lock"></span>
        </span>
        <input type="password" name="passwordbaru" class="form-control"  Placeholder='Password Baru' required="required">

  </div>
<div class="box-footer text-center">
  <div>
  <button type="submit" class="btn btn-primary " name='gantipassword'>Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>
  <br>
   <a class="signup" href="signup.php">Tidak punya id ?</a>
   <br>

          <br>
          <small>
            
            <span class="small text-muted">&copy Paradise Travel 2017 - 2018. All right reserved.</span>
          </small>
                  </div>
                  </div>
 </form>
 </div>
</div>
</div>
</body>
</html>
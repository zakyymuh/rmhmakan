<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
<style>
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
</style>
</head>
<body>
<div class="login-box">
 <div class="login-header text-center">
      <a href='#'><i class="fa fa-user"></i> <b>LOGIN</b> KARYAWAN</a>
 </div>
 <div class="login-body">
  <form action="#" method="POST">
  <div class="input-group">
  <span class="input-group-addon">
        <span class="fa fa-user"></span>
        </span>
        <input type="text" name="username" class="form-control" id="username" name="Nama Lengkap" placeholder="Nama Pengguna" alt="username" required="required">
  </div>
    <div class="input-group">
   <span class="input-group-addon">
        <span class="fa fa-lock"></span>
        </span>
        <input type="password" name="password" class="form-control" id="password" name="password" Placeholder='Kata Kunci' required="required">
  </div>
<div class="box-footer text-center">
  <div>
  <button type="submit" class="btn btn-primary " name='submit' value='masuk'>MASUK</button>
          <br>
          <br>
          <br>
          <small>
            
            <span class="small text-muted">&copy RUMAHMAKAN 2017 - 2018. All right reserved.</span>
          </small>
                  </div>
                  </div>
 </form>
 </div>
</div>
</body>
</html>
<script src="assets/js/jquery.min.js"></script>
<script src='assets/js/bootstrap.js'></script>
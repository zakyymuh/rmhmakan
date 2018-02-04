<!DOCTYPE html>
<html>
<?php include_once '../koneksi.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TerimaKasih</title>
    <!-- X-ICON -->
    <link rel="icon" href="<?=url?>favicon.ico" type="image/x-icon">
    <link href="<?=url?>assets/css/material-icon.css" rel="stylesheet" type="text/css">
    <link href="<?=url?>assets/css/roboto.css" rel="stylesheet" type="text/css">
    <link href="<?=url?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=url?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=url?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=url?>assets/css/style.css" rel="stylesheet">
    <link href="<?=url?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href='<?=url?>assets/css/mprogress.min.css' />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            </br></br></br>
        </div>
        
        <div class="card">
            <div class="body">
                <div class="alert bg-red">
                	<center style="font-size: 18px">Terima Kasih~<br>Apakah Anda Puas Dengan Pelayanan Kami ?</center>
                </div>
            	<center><button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float" style="height: 100px;width: 100px">
                 	<div class="material-icons" style="font-size: 60px ; margin-top : 10px">sentiment_very_satisfied</div>                  
                 </button>

                 <button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float" style="height: 100px;width: 100px;margin-left: 30px">
                 	<div class="material-icons" style="font-size: 60px ; margin-top : 10px">sentiment_very_dissatisfied</div>   
                 </button></br></br>
                 <table>
                    <tr><td width="73%" height="80%" style="font-size: 20px">&nbsp;Ya&nbsp;&nbsp;<td style="font-size: 20px">Tidak
                </table>
                 </center></br>
                 
            </div>
           </br></br>
        </div>
    </div>
    <script src="<?=url?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?=url?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=url?>assets/plugins/node-waves/waves.js"></script>
    <script src="<?=url?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src='<?=url?>assets/js/mprogress.min.js'></script>
    <script src="<?=url?>assets/js/admin.js"></script>
    <script src="<?=url?>assets/js/pages/examples/sign-in.js"></script>
    <script src="<?=url?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="<?=url?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?=url?>assets/js/pages/ui/dialogs.js"></script>
     
</body>

</html>
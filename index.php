<!DOCTYPE html>
<html>
<?php include_once 'koneksi.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MASUK &mdash; BROTO</title>
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
     <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Tunggu ...</p>
        </div>
    </div>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">MASUK</a>
            <small>RUMAH MAKAN BAPA BROTO</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="" method="POST">
                    <div class="msg">Masuk untuk memulai sesi</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="username" name="username" placeholder="nama pengguna" required autofocus="autofocus">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" placeholder="kata sandi" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8">
                            <button class="btn btn-block bg-pink waves-effect" id="btn" type="submit" value="MASUK" name="submit">MASUK</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 col-xs-offset-6 align-right">
                            <a href="forgot-password.html">Lupa password ?</a>
                        </div>
                    </div>
                </form>
            </div>
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
    <script type="text/javascript">
    $('#sign_in').submit( function(e){
        e.preventDefault();
        var username = $("[name='username']").val();
        var password = $("[name='password']").val();
        $("#btn").html("LOADING ..");
        var mprogress = new Mprogress();
        mprogress.start();
        mprogress.inc(0.37);
        $.ajax({
            type:'POST',
            data : 'username='+username+'&password='+password,
            url :'<?=url;?>aksi/login.php',
            success: function(result){
                var resultObj = JSON.parse(result);
                if (resultObj.message == "berhasil") {
                    link = resultObj.url;
                     location.href="<?=url?>"+link;
                
        mprogress.end();
                } else {    
                    showWarningLogin(); 
                    $("#btn").html("SIGN IN"); 
                   $("[name='username']").val(""); $("[name='password']").val(""); 
                
        mprogress.end();
                }
            }
        });
    });
    </script>
</body>

</html>
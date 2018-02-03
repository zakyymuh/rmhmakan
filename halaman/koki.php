<!DOCTYPE html>
<html>
<?php include_once '../koneksi.php'; 
?>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Halaman Koki</title>
    <!-- X-ICON -->
    <link rel="icon" href="<?=url?>assets/images/logo-mini.png" type="image/x-icon">

     <!-- Google Fonts -->
    <link href="<?=url?>assets/css/material-icon.css" rel="stylesheet" type="text/css">
    <link href="<?=url?>assets/css/roboto.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=url?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=url?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=url?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=url?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=url?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?=url?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=url?>assets/css/themes/all-themes.css" rel="stylesheet" />

     <style type="text/css">
        section.content{
            margin: 100px 1px 0 1px !important;
        }
    </style>
</head>

<body class="theme-light-green" >
     <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a class="navbar-brand" href="<?=url?>manager.php">RESTORAN BROTO - KOKI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="<?=url?>index.php" data-toggle="tooltip" data-placement="left" title="Sign Out" data-original-title="Sign Out" role="button">
                            <i class="material-icons">add</i>
                        </a>
                        </li>
                     <li>
                        <a href="<?=url?>index.php" data-toggle="tooltip" data-placement="left" title="Sign Out" data-original-title="Sign Out" role="button">
                            <i class="material-icons">account_circle</i>
                        </a>
                        </li>
                       
                        <li>
                        <a href="<?=url?>index.php" data-toggle="tooltip" data-placement="left" title="Sign Out" data-original-title="Sign Out" role="button">
                            <i class="material-icons">input</i>
                        </a>
                        </li>
                       
                       </ul>

            </div>
        </div>
    </nav>
   
   <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card js-animating-object">
                        <div class="header">                            
                            
                            <center>
                                <h1>PESANAN</h1>
                                <?php

                                ?>
                            </br></br></br>
                           <button type="button" class="btn bg-green waves-effect" style="height: 80px;width: 1300px">
                                    <div class="material-icons" style="font-size: 75px">check</div>
                                </button> 
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <link href="<?=url?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href='<?=url?>assets/css/mprogress.min.css' />
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


    <!-- Chart Plugins Js -->
    <script src="<?=url?>assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Custom Js -->
    <script src="<?=url?>assets/js/admin.js"></script>
    <script src="<?=url?>assets/js/pages/charts/chartjs.js"></script>
    <script src="<?=url?>assets/js/pages/ui/animations.js"></script>
   
</body>

</html>
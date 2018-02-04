<!DOCTYPE html>
<html>
<?php include_once("../../koneksi.php");    
    if(!session_start()) session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Rumah Makan Broto</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?=url?>assets/css/material-icon.css" rel="stylesheet" type="text/css">
    <link href="<?=url?>assets/css/roboto.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=url?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->

    <!-- Animation Css -->

    <!-- Morris Chart Css-->
    <link href="<?=url?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=url?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?=url?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=url?>assets/css/theme-green.min.css" rel="stylesheet" />
    <style type="text/css">
        .content{
            margin-left:15px !important;
        }
</style>
    <link href="<?=url?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=url?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
</head>
<body class="theme-green">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?=url?>halaman/koki/index.php"> Rumah Makan Broto - Koki</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                     <li>
                        <a href="<?=url?>halaman/koki/tambah_menu.php" role="button">
                            <i class="material-icons">library_add</i>
                        </a>
                        </li> <li>
                        <a href="#" role="button">
                            <i class="material-icons">account_circle</i>
                        </a>
                        </li> <li>
                        <a href="<?=url?>aksi/logout.php" data-toggle="tooltip" data-placement="left" title="Sign Out" data-original-title="Sign Out" role="button">
                            <i class="material-icons">input</i>
                        </a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
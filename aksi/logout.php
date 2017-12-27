<?php
session_start();
session_unset();
session_destroy();
include_once ("../koneksi.php");
$link = url;
header("refresh:0.1;url=$link");	
exit;
?>

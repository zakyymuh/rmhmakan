<?php	
	$dOk1 = 'localhost'; //alamat
	$Y22Y1 = 'root';     // username di xampp
	$Km1b = '';         // pass di xampp
	$LlaP = 'rumahmakan'; //database
	$c = new mysqli($dOk1,$Y22Y1,$Km1b,$LlaP);
	
	if ($c->connect_error)
   		die('Maaf koneksi gagal: '. $c->connect_error);

	define('url', "http://localhost/rmhmakan/");
	//define('DEBUG', true);
	define('DEBUG', false);
	if(DEBUG) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
	} else {
    error_reporting(0);
    ini_set("display_errors", 0);
	}

	date_default_timezone_set('Asia/Jakarta');
?>
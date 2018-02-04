<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_rmhmkn";
	
	$kon = mysqli_connect($host, $user, $pass, $db);
	
	
	//test koneksi
	
	if ($kon->connect_error) {
		echo "Error: " . $kon->connect_error;
		exit();
	}
?>
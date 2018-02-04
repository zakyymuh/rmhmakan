<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "fiqri";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
	define('url', "http://localhost/rmhmakan/");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//ini_set(error_reporting(1));
?>
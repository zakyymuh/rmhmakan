<?php session_start();
	include "koneksi.php";
	mysqli_query($kon,"DELETE FROM bahan_baku WHERE id_bahanbaku =".$_GET['id']); 
	header ("location:cekTransaksi.php");
	header('Location:index.php');
?>
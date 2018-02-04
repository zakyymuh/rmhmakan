<?php
	require "../koneksi.php";
	if($_GET['aksi'] == "tambah"){
		$nama = htmlentities($_POST['nama'],ENT_QUOTES);
		$satuan = htmlentities($_POST['satuan'],ENT_QUOTES);
		$jumlah = htmlentities($_POST['jumlah'],ENT_QUOTES);

		//generate kode baru
		//kode member
		//MB0118001
		
		$getmaxkode = mysqli_fetch_row(mysqli_query($c,"SELECT max(right(id_bahan,4)) FROM bahanbaku"));
		$max = $getmaxkode['0'] + 1;
		if($max <= 9){
			$kode = "B000".$max;
		}elseif($max > 9 && $max <= 99){
			$kode = "B00".$max;
		}else{
			$kode = "B0".$max;
		}
	  	 	$insert = mysqli_query($c,"INSERT INTO bahanbaku VALUES ('$kode','$nama','$jumlah','$satuan')");
	  	 	if(mysqli_error($c)){
	  	 		echo "<script>alert('Proses penambahan bahan baku gagal, cobalah beberapa saat lagi !')</script>";
				$url = url."halaman/pantri/tambah_bahan.php";
				header("refresh:0.1; url=$url");
				exit;
	  	 	}
	  	 	else{
	  	 		echo "<script>alert('Proses penambahan bahan baku berhasil !')</script>";
				$url = url."halaman/pantri/tambah_bahan.php";
				header("refresh:0.1; url=$url");
				exit;
				
	  	 	}
		}
	elseif ($_GET['aksi'] == "hapus") {
		$id = $_GET['id_bahan'];
		$query = mysqli_query($c,"DELETE FROM bahanbaku WHERE id_bahan = '$id'");
		 	if(mysqli_error($c)){
	  	 		echo "<script>alert('Proses penghapusan bahan baku gagal, cobalah beberapa saat lagi !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
	  	 	}
	  	 	else{
	  	 		echo "<script>alert('Proses penghapusan bahan baku berhasil !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
				
		}
	}elseif($_GET['aksi'] == "edit"){
		$id = $_GET['id_bahan'];
		$nama = htmlentities($_POST['nama'],ENT_QUOTES);
		$satuan = htmlentities($_POST['satuan'],ENT_QUOTES);
		$query = mysqli_query($c,"UPDATE bahanbaku SET nama_bahan = '$nama', satuan = '$satuan' WHERE id_bahan = '$id'");
		if(mysqli_error($c)){
	  	 		echo "<script>alert('Proses pengubahan bahan baku gagal, cobalah beberapa saat lagi !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
	  	 	}
	  	 	else{
	  	 		echo "<script>alert('Proses pengubahan bahan baku berhasil !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
				
		}
	}elseif($_GET['aksi'] == "tambah_jumlah"){
		$id = $_GET['id_bahan'];
		$jumlah = $_POST['jumlah'];
		$query = mysqli_query($c,"UPDATE bahanbaku SET total = '$jumlah' WHERE id_bahan = '$id'");
		if(mysqli_error($c)){
	  	 		echo "<script>alert('Proses penambahan bahan baku gagal, cobalah beberapa saat lagi !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
	  	 	}
	  	 	else{
	  	 		echo "<script>alert('Proses penambahan bahan baku berhasil !')</script>";
				$url = url."halaman/pantri/index.php";
				header("refresh:0.1; url=$url");
				exit;
				
		}
	}
	else{
		$url = url."halaman/pantri/index.php";
		header("refresh:0.1; url=$url");
	}
?>
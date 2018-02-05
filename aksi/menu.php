<?php
	require "../koneksi.php";
	if($_GET['aksi'] == "tambah"){
		$nama = htmlentities($_POST['nama'],ENT_QUOTES);
		$deskripsi = htmlentities($_POST['deskripsi'],ENT_QUOTES);
		$harga = htmlentities($_POST['harga'],ENT_QUOTES);
		//hitung array

		//generate kode baru
		//kode member
		//MB0118001
		
		$getmaxkode = mysqli_fetch_row(mysqli_query($c,"SELECT max(right(id_menu,4)) FROM menu"));
		$max = $getmaxkode['0'] + 1;
		if($max <= 9){
			$kode = "M000".$max;
		}elseif($max > 9 && $max <= 99){
			$kode = "M00".$max;
		}else{
			$kode = "M0".$max;
		}
		//
		$now = date('Y-m-d h:i:s');

		$folder = "../assets/uploads";
	        $namafile_name = $_FILES['upfile']['name'];
	        $namafile_type = $_FILES['upfile']['type'];
	        $namafile_size = $_FILES['upfile']['size'];
	        if(!empty($namafile_name)){
			$a = date('dMY-his');
	        if (getimagesize($_FILES['upfile']['tmp_name'])) {
	            if (!empty($namafile_type)) {
	                switch ($namafile_type) {
	                    case "image/jpeg" :
	                        move_uploaded_file($_FILES['upfile']['tmp_name'], "$folder/$namafile_name");
	                        $namafile1 = $a . ".jpg";
	                        rename("$folder/$namafile_name", "$folder/$namafile1");
	                        $data['foto'] = $namafile1;
	                        break;
	                    case "image/png" :
	                        move_uploaded_file($_FILES['upfile']['tmp_name'], "$folder/$namafile_name");
		                        $namafile1 = $a . ".png";
		                        rename("$folder/$namafile_name", "$folder/$namafile1");
		                        $data['foto'] = $namafile1;
		                        break;
	                    default:
							echo "<script>alert('Mohon hanya mengirimkan file gambar saja !')</script>";
							$url = url."halaman/koki/index.php";
							//header("refresh:0.1; url=$url");
							break;
	                }
	            }
	        } else {
				echo "<script>alert('Mohon hanya mengirimkan file gambar saja !')</script>";
							echo "A";

	       echo $namafile_name = $_FILES['upfile']['name'];
	      echo $namafile_type = $_FILES['upfile']['type'];
	        $namafile_size = $_FILES['upfile']['size'];
				$url = url."halaman/koki/index.php";
				//echo "<script>window.location.replace('".$url."')</script>";
				exit;
	        }
	       $gambar = $data['foto'];
	   }else{$gambar = "default.jpg";}
	   mysqli_query($c,"START TRANSACTION");
			$insert = mysqli_query($c,"INSERT INTO menu VALUES ('$kode','$nama','$deskripsi','$harga','$gambar')");
			if($insert){
		  	 	$bahan = $_POST['bahan'];
		  	 	$jumlah = $_POST['jumlah'];
		  	 	$hitung = count($bahan);
		  	 	for($i = 1;$i<=$hitung;$i++){
		  	 		$id_bahan = $bahan[$i - 1];
		  	 		$j = $jumlah[$i - 1];
					$insert = mysqli_query($c,"INSERT INTO bahan_menu VALUES ('$kode','$id_bahan','$j')");
					
		  	 	}
		  	 	if($insert){
		  	 		echo "<script>alert('Proses penambahan menu baru berhasil')</script>";
		  	 		mysqli_query($c,"COMMIT");
		  	 		$url = url."halaman/koki/index.php";
		  	 		header("refresh:0.1; url=$url");
					exit;
		  	 	}else{
		  	 		echo "<script>alert('Proses penambahan menu baru gagal, cobalah beberapa saat lagi !')</script>";
		  	 		$url = url."halaman/koki/tambah_menu.php";
		  	 		header("refresh:0.1; url=$url");
					exit;
		  	 	}
		  	 }else{

		  	 		echo "<script>alert('Proses penambahan bahan baku gagal, cobalah beberapa saat lagi !')</script>";
		  	 		$url = url."halaman/koki/tambah_menu.php";
		  	 		header("refresh:0.1; url=$url");
					exit;
		  	 }
			/*
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
				
	  	 	} */
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
	}elseif ($_GET['aksi'] == "hapusmenu") {
		$id = $_GET['id_menu'];
		mysqli_query($c,"START TRANSACTION");
		mysqli_query($c,"DELETE FROM pesanan_menu WHERE id_menu = '$id'");
		mysqli_query($c,"DELETE FROM bahan_menu WHERE id_menu = '$id'");
		$query = mysqli_query($c,"DELETE FROM menu WHERE id_menu = '$id'");
		 	if(mysqli_error($c)){
	  	 		echo "<script>alert('Proses penghapusan menu gagal, cobalah beberapa saat lagi !')</script>";
				$url = url."halaman/koki/daftarmenu.php";
				header("refresh:0.1; url=$url");
				exit;
	  	 	}
	  	 	else{
		 		mysqli_query($c,"COMMIT");
	  	 		echo "<script>alert('Proses penghapusan menu berhasil !')</script>";
				$url = url."halaman/koki/daftarmenu.php";
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
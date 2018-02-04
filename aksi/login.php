<?php
	require "../koneksi.php";
	sleep(10);
	if($_POST['username'] && $_POST['password']){
	$username = htmlentities($_POST['username'],ENT_QUOTES);
	$password = md5(htmlentities($_POST['password'],ENT_QUOTES));
	$get = mysqli_query($c,"SELECT * FROM petugas WHERE username = '$username' and password = '$password'");
	echo mysqli_error($c);
	if(mysqli_num_rows($get) == 1){
		session_start();
		$data = mysqli_fetch_array($get);
		$_SESSION['id_petugas'] = $data['id_petugas'];
		$_SESSION['username'] = $data['username'];
		$result['message'] = "berhasil";

		if ($data['username'] == "Pelayan") {
		$result['url'] = "halaman/pelayan/index.php?page=pelayan&sub=";
		}
		else if ($data['username'] == "Manager") {
		$result['url'] = "halaman/Manager.php";
		}
		else if ($data['username'] == "Koki") {
		$result['url'] = "halaman/Koki/index.php?page=koki&sub=";
		}
	}
	else{
		$result['message'] = "gagal";
	}
	}
	else{
		$result['message'] = "gagal";
		
	}
	echo json_encode($result);
?>
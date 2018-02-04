<?php
	require "../koneksi.php";
	sleep(.25);
	if($_POST['username'] && $_POST['password']){
	$username = htmlentities($_POST['username'],ENT_QUOTES);
	$password = md5(htmlentities($_POST['password'],ENT_QUOTES));
	$get = mysqli_query($c,"SELECT * FROM petugas WHERE username = '$username' and password = '$password'");
	if(mysqli_num_rows($get) == 1){
		session_start();
		$data = mysqli_fetch_array($get);
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = $data['status'];
		$result['message'] = "berhasil";
		if($data['status'] == "pantri"){
		$result['url'] = "halaman/pantri/index.php?page=beranda&sub=";
		}
	}
	elseif(mysqli_num_rows($mem) == 1){
		session_start();
		$data = mysqli_fetch_array($mem);
		$_SESSION['kode_member'] = $data['kode_member'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = "member";
		$result['url'] = "halaman/member/index.php?page=beranda&sub=";
		$result['message'] = "berhasil";
		}
	else{
		$result['message'] = "gagal";
	}
	}
	else{
		$result['message'] = "gagal";	
	} //*/
	echo json_encode($result);
?>
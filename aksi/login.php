<?php
	require "../koneksi.php";
	if($_POST['username'] && $_POST['password']){
	$username = htmlentities($_POST['username'],ENT_QUOTES);
	$password = md5(htmlentities($_POST['password'],ENT_QUOTES));
	$get = mysqli_query($c,"SELECT * FROM petugas WHERE username = '$username' and password = '$password'");
	if(mysqli_num_rows($get) == 1){
		session_start();
		$data = mysqli_fetch_array($get);
		$_SESSION['id_petugas'] = $data['id_petugas'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = $data['status'];
		$result['message'] = "berhasil";

		if($data['status'] == "pantri"){
		$result['url'] = "halaman/pantri/index.php?page=beranda&sub=";}

		elseif ($data['status'] == "pelayan") {
		$result['url'] = "halaman/pelayan/index.php?page=pelayan&sub=";
		}
		elseif ($data['status'] == "manager") {
		$result['url'] = "halaman/manager.php";
		}elseif ($data['status'] == "Meja") {
		$result['url'] = "halaman/pelanggan2/index.php";
		}
		else{
		$result['url'] = "halaman/koki/index.php";
		}
	}
	else{
		$result['message'] = "gagal";	
	} //*/
	echo json_encode($result);
}
?>
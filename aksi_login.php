<?php

include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);


$cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
$jumlah = mysqli_num_rows($cek);

if($jumlah > 0){
	$d = mysqli_fetch_array($cek);
	$_SESSION['id_user'] = $d['id_user'];
	$_SESSION['nama_user'] = $d['username'];
	$_SESSION['jabatan_user'] = $d['jabatan'];

	if($d['jabatan'] == "admin"){
		header("location:user/admin/index.php");
	}else if($d['jabatan'] == "sales"){
		header("location:user/sales/index.php");
	}else if($d['jabatan'] == "supervisor"){
		header("location:user/supervisor/index.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}



?>
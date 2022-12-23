<?php

include '../../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','sales')");

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password' and jabatan='sales'"));
$id_sales = $data['id_user'];
mysqli_query($koneksi,"INSERT INTO sales VALUES('$id_sales','$nama','$alamat','$no_hp')");

header("location:sales.php");

?>
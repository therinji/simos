<?php

include '../../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jam_mulai = $_POST['jam_mulai'];
$jam_berakhir = $_POST['jam_berakhir'];

mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','sales')");

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password' and jabatan='sales'"));
$id_sales = $data['id_user'];
mysqli_query($koneksi,"INSERT INTO sales VALUES('$id_sales','$nama','$nik','$tempat_lahir','$tgl_lahir','$alamat','$no_hp','$jam_mulai','$jam_berakhir')");

header("location:sales.php");

?>
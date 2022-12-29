<?php
include '../../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jam_mulai = $_POST['jam_mulai'];
$jam_berakhir = $_POST['jam_berakhir'];

if(!isset($password)){
    mysqli_query($koneksi,"UPDATE user SET username='$username' WHERE id_user='$id'");
}else{
    $password = md5($password);
    mysqli_query($koneksi,"UPDATE user SET username='$username', password='$password' WHERE id_user='$id'");
}
mysqli_query($koneksi,"UPDATE sales SET nama='$nama', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', jam_mulai='$jam_mulai', jam_berakhir='$jam_berakhir' WHERE id_sales='$id'");

header("location:sales.php");
?>
<?php
include '../../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

if(!isset($password)){
    mysqli_query($koneksi,"UPDATE user SET username='$username' WHERE id_user='$id'");
}else{
    $password = md5($password);
    mysqli_query($koneksi,"UPDATE user SET username='$username', password='$password' WHERE id_user='$id'");
}
mysqli_query($koneksi,"UPDATE sales SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id_sales='$id'");

header("location:sales.php");
?>
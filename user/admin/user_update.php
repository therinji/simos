<?php
include '../koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];


mysqli_query($koneksi,"UPDATE user SET username='$username', password='$password', jabatan='$jabatan' WHERE id_user='$id'");

header("location:user.php");
?>
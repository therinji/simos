<?php

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];


mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','$jabatan')");

header("location:user.php");

?>
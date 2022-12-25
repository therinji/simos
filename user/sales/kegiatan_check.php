<?php
include '../../koneksi.php';

$id = $_GET['id'];
$today = date("Y-m-d H:i:s");

mysqli_query($koneksi,"UPDATE customer SET kunjungan_terakhir='$today' WHERE id_customer='$id'");
mysqli_query($koneksi,"INSERT INTO kegiatan(id_customer) VALUES($id)");
header("location:kegiatan.php");

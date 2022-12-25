<?php

include '../../koneksi.php';

$tgl = $_POST['tgl'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jml = $_POST['jml'];

echo $tgl . " - " . $customer . " - " . $produk . " - " . $jml;
mysqli_query($koneksi,"INSERT INTO orderan VALUES ('','$produk','$jml','$customer','$tgl')");
header("location:order.php");

?>
<?php
include '../../koneksi.php';

$id = $_POST['id'];
$tgl = $_POST['tgl'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jml = $_POST['jml'];

mysqli_query($koneksi,"UPDATE orderan SET id_produk='$produk', jml_order='$jml', id_customer='$customer'  WHERE id_order='$id'");

header("location:order.php");

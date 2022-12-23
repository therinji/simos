<?php

include '../../koneksi.php';

$nama = $_POST['nama_customer'];
$alamat = $_POST['alamat_customer'];
$no_hp = $_POST['no_hp_customer'];
$pemilik = $_POST['pemilik_customer'];
$id_sales = $_POST['id_sales'];


mysqli_query($koneksi,"INSERT INTO customer VALUES('','$nama','$alamat','$no_hp','$pemilik','$id_sales','')");
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM customer where nama_customer='$nama' and alamat_customer='$alamat' and pemilik_customer='$pemilik'"));
$id_customer = $data['id_customer'];
mysqli_query($koneksi,"INSERT INTO jadwal VALUES('', '', '$id_customer', $id_sales)");

header("location:customer.php");

?>
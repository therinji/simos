<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_customer'];
$alamat = $_POST['alamat_customer'];
$no_hp = $_POST['no_hp_customer'];
$pemilik = $_POST['pemilik_customer'];
$id_sales = $_POST['id_sales'];
$kunjungan = $_POST['kunjungan_terakhir'];

mysqli_query($koneksi,"UPDATE customer SET nama_customer='$nama', alamat_customer='$alamat', no_hp_customer='$no_hp',  pemilik_customer='$pemilik',  id_sales='$id_sales',  kunjungan_terakhir='$kunjungan' WHERE id_customer='$id'");

header("location:customer.php");

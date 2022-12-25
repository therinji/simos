<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_customer'];
$alamat = $_POST['alamat_customer'];
$no_hp = $_POST['no_hp_customer'];
$pemilik = $_POST['pemilik_customer'];
$kunjungan = $_POST['kunjungan_terakhir'];

mysqli_query($koneksi,"UPDATE customer SET nama_customer='$nama', alamat_customer='$alamat', no_hp_customer='$no_hp',  pemilik_customer='$pemilik' WHERE id_customer='$id'");

header("location:customer.php");

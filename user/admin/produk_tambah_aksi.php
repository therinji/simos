<?php

include '../../koneksi.php';

$nama = $_POST['nama'];
$harga_produk = $_POST['harga_produk'];



mysqli_query($koneksi,"INSERT INTO produk values('', '$nama', '$harga_produk')");

header("location:produk.php");

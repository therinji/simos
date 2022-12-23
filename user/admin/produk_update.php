<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];

mysqli_query($koneksi,"UPDATE produk set nama_produk='$nama', harga_produk='$harga_produk' where id_produk='$id'");

header("location:produk.php");

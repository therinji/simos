<?php

include '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM customer WHERE id_customer='$id'");
mysqli_query($koneksi,"DELETE FROM jadwal WHERE id_customer='$id'");
header("location:customer.php");

?>
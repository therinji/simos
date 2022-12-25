<?php

include '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM orderan WHERE id_order='$id'");

header("location:order.php");

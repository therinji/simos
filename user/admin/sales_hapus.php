<?php

include '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM sales WHERE id_sales='$id'");

header("location:sales.php");

?>
<?php
include '../../koneksi.php';

$id = $_POST['id'];
$today = date("Y-m-d H:i:s");
$nama_file = date("YmdHis") . ".jpg";

mysqli_query($koneksi,"UPDATE customer SET kunjungan_terakhir='$today' WHERE id_customer='$id'");
mysqli_query($koneksi,"INSERT INTO kegiatan(id_customer, bukti_kegiatan) VALUES($id, '$nama_file')");
copy($_FILES['bukti_kegiatan']['tmp_name'],"../../uploads/" . $nama_file);
header("location:kegiatan.php");
?>


<?php
include '../../koneksi.php';

$jml_data = $_POST['jml_data'];

for($i=0;$i<$jml_data;$i++){
    $id = $_POST['id'][$i];
    $hari = $_POST['hari'][$i];
    echo $id . ' - ' . $hari;
    mysqli_query($koneksi,"UPDATE jadwal SET hari_jadwal='$hari' WHERE id_customer='$id'");
}

//mysqli_query($koneksi,"UPDATE customer SET nama_customer='$nama', alamat_customer='$alamat', no_hp_customer='$no_hp',  pemilik_customer='$pemilik',  id_sales='$id_sales',  kunjungan_terakhir='$kunjungan' WHERE id_customer='$id'");

header("location:jadwal.php");

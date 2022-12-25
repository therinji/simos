<?php
date_default_timezone_set('Asia/Jakarta');
$koneksi = mysqli_connect("localhost","root","","simos");

if(mysqli_connect_errno()){
    echo "koneksi database gagal";
}
?>
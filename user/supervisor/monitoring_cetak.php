<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Monitoring Sales</title>

	<link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>

<?php
include 'header.php';
include '../../koneksi.php';
?>
    <h2 class="text-center">UD Latansa Intiniaga</h2>
    <p class="text-center">Alamat: Sampet, Kedungsari, Gebog, Kudus Regency</p>
    <hr class="mb-4">
    <h4 class="text-center mb-4">Laporan Monitoring Sales</h4>
    <p><span>Periode : <?php echo date("d-m-Y", strtotime($_GET['tgl']));?></span><span class="float-right">Supervisor : Noor Imron</span></p>
    <table class="table table-bordered table-hover table-striped table-saya">
        <thead>
            <tr>
                
                <th width="2%">No</th>
                <th>Nama Toko</th>
                <th>Alamat Toko</th>
                <th>Nomor HP</th>
                <th>Pemilik</th>
                <th>Kunjungan</th>
                <th>Status</th>
                <th>Sales</th>
            </tr>
        </thead>
        <tbody>
                    <?php
                    $no = 1;
                    
                    if(isset($_GET['tgl'])){
                        $tgl_filter = $_GET['tgl'];
                        $hari = date('N', strtotime($tgl_filter));

                        $kunjungan = mysqli_query($koneksi, "SELECT * FROM customer, sales, jadwal where customer.id_sales = sales.id_sales and customer.id_customer = jadwal.id_customer and jadwal.hari_jadwal = '$hari'");

                        while ($c = mysqli_fetch_array($kunjungan)) {
                            $tgl_terakhir = substr($c['kunjungan_terakhir'],0,10);
                            $id_customer = $c['id_customer'];
                    
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['nama_customer']; ?></td>
                            <td><?php echo $c['alamat_customer']; ?></td>
                            <td><?php echo $c['no_hp_customer']; ?></td>
                            <td><?php echo $c['pemilik_customer']; ?></td>
                            <?php
                                $cek_status = mysqli_query($koneksi,"SELECT * FROM kegiatan WHERE id_customer='$id_customer' and date(waktu_kegiatan)='$tgl_filter';");
                                $jumlah = mysqli_num_rows($cek_status);
                                if($jumlah > 0){
                                    $d = mysqli_fetch_array($cek_status);

                                    echo "<td>" . $d['waktu_kegiatan'] . "</td>";
                                    echo "<td>Sudah dikunjungi</td>";
                                }else{
                                    echo "<td>-</td>";
                                    echo "<td>Belum dikunjungi</td>";
                                }
                            ?>
                            <td>
                                <?php echo $c['nama']; ?>
                            </td>
                        </tr>
                            <?php
                            }
                        }
                            ?>
                </tbody>
    </table>
    <script type="text/javascript">
		window.print();
	</script>
  </body>
  </html>

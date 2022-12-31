<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Data Kegiatan Sales</h3>
            <p class="text-muted">Data kegiatan kunjungan sales hari ini</p>

            <hr>

            <b class="float-right">
                <?php 
                $hari_today = date("N");
                $tgl_today =  date("d-m-Y");
                $date_today = date("Y-m-d");

                switch($hari_today){
                    case 1:
                        $hari_nama = 'Senin';
                        break;
                    case 2:
                        $hari_nama = 'Selasa';
                        break;
                    case 3:
                        $hari_nama = 'Rabu';
                        break;
                    case 4:
                        $hari_nama = 'Kamis';
                        break;
                    case 6:
                        $hari_nama = 'Sabtu';
                        break;
                    case 7:
                        $hari_nama = 'Minggu';
                        break;
                    default:
                        $hari_nama ='';
                        break;
                }
                
                echo "$hari_nama, $tgl_today";

                ?>
            </b>
            <br>
            <br>
            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                        <th>Nomor HP</th>
                        <th>Pemilik</th>
                        <th>Kunjungan Terakhir</th>
                        <th>Status hari ini</th>
                        <th>Bukti</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id_sales = $_SESSION['id_user'];
                    $no = 1;
                    $customer = mysqli_query($koneksi, "SELECT * FROM customer, sales, jadwal where customer.id_sales = sales.id_sales and customer.id_sales = '$id_sales' and customer.id_customer = jadwal.id_customer and jadwal.hari_jadwal = '$hari_today' ORDER BY customer.id_customer ASC");
                    while ($c = mysqli_fetch_array($customer)) {
                        $tgl_terakhir = substr($c['kunjungan_terakhir'],0,10)
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['nama_customer']; ?></td>
                            <td><?php echo $c['alamat_customer']; ?></td>
                            <td><?php echo $c['no_hp_customer']; ?></td>
                            <td><?php echo $c['pemilik_customer']; ?></td>
                            <td><?php echo $c['kunjungan_terakhir']; ?></td>
                            <?php
                            if($tgl_terakhir == $date_today){
                                $cek = true;
                                $kunjungan = $c['kunjungan_terakhir'];

                                echo "<td><span class='badge badge-success'>Sudah dikunjungi</span></td>";
                                $foto = mysqli_query($koneksi, "select bukti_kegiatan from kegiatan where waktu_kegiatan='$kunjungan'");
                                $f = mysqli_fetch_array($foto);
                                echo "<td><a target='_blank' href='../../uploads/" . $f['bukti_kegiatan'] . "'><img width='100px'src='../../uploads/" . $f['bukti_kegiatan'] . "' class='img-thumbnail' alt=''></a></td>";
                            }else{
                                $cek = false;
                                echo "<td><span class='badge badge-danger'>Belum dikunjungi</span></td>";
                                echo "<td></td>";
                            }
                            ?>
                            <td>
                                <?php
                                if(!$cek) echo "<a href='kegiatan_check.php?id=" . $c['id_customer'] . "' class='btn btn-success text-white btn-sm'><i class='fa fa-check'></i></a>";
                                ?>
                                
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

<?php
include 'footer.php';
?>

<a href=""></a>
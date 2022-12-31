<?php
include 'header.php';

?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Monitoring Sales</h3>
            <p class="text-muted">Semua Data kunjungan sales</p>

            <hr>
            <form action="" method="get" class="row g-3">
                <div class="mb-2 col-md-5">
                    <label for="tgl" class="col-form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?php if(isset($_GET['tgl'])) echo $_GET['tgl'];?>" required>
                </div>
                <div class="col-md-2 mt-5">
                    <button type="submit" class="btn btn-primary btn-sm text-light"><i class="fa fa-filter"></i> Filter</button>
                    <a class="btn btn-success btn-sm" href="monitoring_cetak.php?tgl=<?php if(isset($_GET['tgl'])){echo $_GET['tgl'];}?>" target="_blank"><i class="fa fa-file"></i> Cetak</a>
                </div>
                
            </form>
            
            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                        <th>Nomor HP</th>
                        <th>Pemilik</th>
                        <th>Kunjungan</th>
                        <th>Bukti</th>
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
                                    echo "<td><a target='_blank' href='../../uploads/" . $d['bukti_kegiatan'] . "'><img width='100px'src='../../uploads/" . $d['bukti_kegiatan'] . "' class='img-thumbnail' alt=''></a></td>";
                                    echo "<td><span class='badge badge-success'>Sudah dikunjungi</span></td>";
                                }else{
                                    echo "<td>-</td>";
                                    echo "<td>-</td>";
                                    echo "<td><span class='badge badge-danger'>Belum dikunjungi</span></td>";
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

        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
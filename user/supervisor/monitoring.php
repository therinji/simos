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
                    <input type="date" class="form-control" name="tgl" required>
                </div>
                <div class="col-md-2 mt-5">
                    <button type="submit" class="btn btn-primary btn-sm text-light"><i class="fa fa-filter"></i> Filter</button>
                    <?php if(isset($_GET['tgl_awal']) && isset($_GET['tgl_akhir']) ) echo "<a href='" . base_url() . "gudang/transaksi' class='btn btn-secondary btn-sm text-light'><i class='fa fa-sync'></i> Reset</a>"?>
                    
                </div>
                
            </form>
            <a class="btn btn-primary btn-sm mb-3" href="customer_tambah.php"><i class="fa fa-user-plus"></i> Tambah Customer</a>

            <a class="btn btn-success btn-sm mb-3 float-right" href="customer_cetak.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>
            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                        <th>Nomor HP</th>
                        <th>Pemilik</th>
                        <th>Kunjungan Terakhir</th>
                        <th>Status</th>
                        <th>Sales</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id_sales = $_SESSION['id_user'];
                    $no = 1;
                    
                    if(isset($_GET['tgl'])){
                        $tgl_filter = $_GET['tgl'];
                        $hari = date('N', strtotime($tgl_filter));

                        $kunjungan = mysqli_query($koneksi, "SELECT * FROM customer, sales, jadwal where customer.id_sales = sales.id_sales and customer.id_customer = jadwal.id_customer and jadwal.hari_jadwal = '$hari'");

                        while ($c = mysqli_fetch_array($kunjungan)) {
                            $tgl_terakhir = substr($c['kunjungan_terakhir'],0,10)
                    
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['nama_customer']; ?></td>
                            <td><?php echo $c['alamat_customer']; ?></td>
                            <td><?php echo $c['no_hp_customer']; ?></td>
                            <td><?php echo $c['pemilik_customer']; ?></td>
                            <td><?php echo $c['kunjungan_terakhir']; ?></td>
                            <td>
                                <?php
                                if($tgl_terakhir == $tgl_filter){
                                    $cek = true;
                                    echo "<span class='badge badge-success'>Sudah dikunjungi</span> ";
                                }else{
                                    $cek = false;
                                    echo "<span class='badge badge-danger'>Belum dikunjungi</span> ";
                                }
                                ?>
                            </td>
                            <td>
                                
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
<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Jadwal Sales</h3>
            <p class="text-muted">Jadwal kunjungan sales</p>

            <hr>
            <a class="btn btn-primary btn-sm mb-3" href="jadwal_edit.php"><i class="fa fa-wrench"></i> Edit Jadwal</a>

            <a class="btn btn-success btn-sm mb-3 float-right" href="customer_cetak.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>


            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sales</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                        <th>Hari</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    $jadwal = mysqli_query($koneksi, "SELECT * FROM jadwal, customer, sales where jadwal.id_customer = customer.id_customer and sales.id_sales = customer.id_sales");
                    while ($j = mysqli_fetch_array($jadwal)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $j['nama']; ?></td>
                            <td><?php echo $j['nama_customer']; ?></td>
                            <td><?php echo $j['alamat_customer']; ?></td>
                            <td><?php echo $j['hari_jadwal']; ?></td>
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
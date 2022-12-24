<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Edit Jadwal Sales</h3>
            <p class="text-muted">Edit Jadwal kunjungan harian sales</p>

            <hr>
            <form action="jadwal_update.php" method="post">
                <a class="btn btn-secondary btn-sm mb-3" href="jadwal.php"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success btn-sm mb-3"><i class="fa fa-save"></i> Simpan Jadwal</a></button>

                <table class="table table-bordered table-hover table-striped table-saya">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
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
                        $jml_data = mysqli_num_rows($jadwal);
                        while ($j = mysqli_fetch_array($jadwal)) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $j['nama']; ?></td>
                                <td><?php echo $j['nama_customer']; ?></td>
                                <td><?php echo $j['alamat_customer']; ?></td>
                                <td>
                                    <select name="hari[]" class="form-control" required="required">
                                        <option value="">--- Pilih Hari ---</option>
                                        <option value="1" <?php if($j['hari_jadwal'] == 1) echo 'selected';?>>Senin</option>
                                        <option value="2" <?php if($j['hari_jadwal'] == 2) echo 'selected';?>>Selasa</option>
                                        <option value="3" <?php if($j['hari_jadwal'] == 3) echo 'selected';?>>Rabu</option>
                                        <option value="4" <?php if($j['hari_jadwal'] == 4) echo 'selected';?>>Kamis</option>
                                        <option value="6" <?php if($j['hari_jadwal'] == 6) echo 'selected';?>>Sabtu</option>
                                        <option value="7" <?php if($j['hari_jadwal'] == 7) echo 'selected';?>>Minggu</option>
                                    </select>
                                </td>
                                <input type="hidden" name="id[]" value="<?php echo $j['id_customer']; ?>">
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                        <input type="hidden" name="jml_data" value="<?php echo $jml_data; ?>">
                    </tbody>

                </table>
            </form>

        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
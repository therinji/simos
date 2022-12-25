<?php
include 'header.php';

?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Data Order</h3>
            <p class="text-muted">Semua Data Order</p>

            <hr>
            <form action="" method="get" class="row g-3">
                <div class="mb-2 col-md-5">
                    <label for="tgl" class="col-form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?php if(isset($_GET['tgl'])) echo $_GET['tgl'];?>" required>
                </div>
                <div class="col-md-2 mt-5">
                    <button type="submit" class="btn btn-primary btn-sm text-light"><i class="fa fa-filter"></i> Filter</button>
                    <a class="btn btn-success btn-sm" href="laporan_order.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>
                </div>
                
            </form>
            
            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Order</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Order</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id_sales = $_SESSION['id_user'];
                    $no = 1;
                    $order = mysqli_query($koneksi, "SELECT * FROM orderan, produk, customer where orderan.id_produk = produk.id_produk and orderan.id_customer = customer.id_customer ORDER BY id_order DESC");
                    while ($o = mysqli_fetch_array($order)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $o['nama_produk']; ?></td>
                            <td><?php echo $o['jml_order']; ?></td>
                            <td><?php echo $o['nama_customer']; ?></td>
                            <td><?php echo $o['tgl_order']; ?></td>
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
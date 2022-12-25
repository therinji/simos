<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Data Order</h3>
            <p class="text-muted">Semua Data Order Customer</p>

            <hr>

            <a class="btn btn-primary btn-sm mb-3" href="order_tambah.php"><i class="fa fa-user-plus"></i> Tambah Order</a>

            <a class="btn btn-success btn-sm mb-3 float-right" href="#" target="_blank"><i class="fa fa-file"></i> Cetak</a>


            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th width="2%">No</th>
                        <th>Tgl</th>
                        <th>Nama Toko</th>
                        <th>Nama Produk</th>
                        <th>Jml</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id_sales = $_SESSION['id_user'];
                    $no = 1;
                    $order = mysqli_query($koneksi, "SELECT * FROM orderan, produk, customer where orderan.id_produk = produk.id_produk and orderan.id_customer = customer.id_customer and customer.id_sales = '$id_sales' ORDER BY id_order DESC");
                    while ($o = mysqli_fetch_array($order)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $o['tgl_order']; ?></td>
                            <td><?php echo $o['nama_customer']; ?></td>
                            <td><?php echo $o['nama_produk']; ?></td>
                            <td><?php echo $o['jml_order']; ?></td>
                            <td>
                                <a href="order_edit.php?id=<?php echo $o['id_order']; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-wrench"></i></a>
                                <a href="order_hapus.php?id=<?php echo $o['id_order']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
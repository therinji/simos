<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Data Customer</h3>
            <p class="text-muted">Semua Data Customer</p>

            <hr>


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
                        <th>Sales</th>
                        <th>Kunjungan Terakhir</th>

                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id_sales = $_SESSION['id_user'];
                    $no = 1;
                    $customer = mysqli_query($koneksi, "SELECT * FROM customer, sales where customer.id_sales = sales.id_sales and customer.id_sales = '$id_sales' ORDER BY id_customer ASC");
                    while ($c = mysqli_fetch_array($customer)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c['nama_customer']; ?></td>
                            <td><?php echo $c['alamat_customer']; ?></td>
                            <td><?php echo $c['no_hp_customer']; ?></td>
                            <td><?php echo $c['pemilik_customer']; ?></td>
                            <td><?php echo $c['nama']; ?></td>
                            <td>
                                <?php
                                if($c['kunjungan_terakhir'] != '0000-00-00 00:00:00'){
                                    echo date('d-m-Y H:i:s', strtotime($c['kunjungan_terakhir']));
                                }else{
                                    echo "-";
                                }
                                ?>
                            </td>

                            <td>
                                <a href="customer_edit.php?id=<?php echo $c['id_customer']; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-wrench"></i></a>
                                <a href="customer_hapus.php?id=<?php echo $c['id_customer']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
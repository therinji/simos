<?php
include 'header.php';
?>

<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-5">
                <div class="card-body">

                    <h3>Edit Customer</h3>
                    <p class="text-muted">Edit Data Customer</p>

                    <hr>

                    <a class="btn btn-primary btn-sm mb-5" href="customer.php">Kembali</a>

                    <?php

                    $id = $_GET['id'];
                    $customer = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer='$id'");
                    while ($c = mysqli_fetch_array($customer)) {
                    ?>

                        <form action="customer_update.php" method="post">

                            <div class="form-group">
                                <label>Nama Toko</label>
                                <input type="text" name="nama_customer" class="form-control" required="required" value="<?php echo $c['nama_customer'] ?>">
                                <input type="hidden" name="id" value="<?php echo $c['id_customer'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Alamat Produk</label>
                                <input type="text" name="alamat_customer" class="form-control" required="required" value="<?php echo $c['alamat_customer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" name="no_hp_customer" class="form-control" required="required" value="<?php echo $c['no_hp_customer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Pemilik</label>
                                <input type="text" name="pemilik_customer" class="form-control" required="required" value="<?php echo $c['pemilik_customer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Sales</label>
                                <input type="text" name="id_sales" class="form-control" required="required" value="<?php echo $c['id_sales']; ?>">
                            </div>
                            
                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">

                        </form>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
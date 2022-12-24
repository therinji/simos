<?php
include 'header.php';
?>

<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-5">
                <div class="card-body">

                    <h3>Edit Produk</h3>
                    <p class="text-muted">Edit Data Produk</p>

                    <hr>

                    <a class="btn btn-primary btn-sm mb-5" href="produk.php">Kembali</a>

                    <?php

                    $id = $_GET['id'];
                    $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
                    while ($d = mysqli_fetch_array($produk)) {
                    ?>

                        <form action="produk_update.php" method="post">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_produk" class="form-control" required="required" value="<?php echo $d['nama_produk'] ?>">
                                <input type="hidden" name="id" value="<?php echo $d['id_produk'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Harga Produk (Rp)</label>
                                <input type="number" name="harga_produk" class="form-control" required="required" value="<?php echo $d['harga_produk']; ?>">
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
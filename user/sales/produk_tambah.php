<?php
include 'header.php';
?>

<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-5">
                <div class="card-body">

                    <h3>Tambah Produk</h3>
                    <p class="text-muted">Tambah Data Produk</p>

                    <hr>

                    <a class="btn btn-primary btn-sm mb-5" href="produk.php">Kembali</a>

                    <form action="produk_tambah_aksi.php" method="post">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label>Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" required="required">
                        </div>


                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">

                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
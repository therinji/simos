<?php
include 'header.php';
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h3>Data Produk</h3>
            <p class="text-muted">Semua Data Produk</p>

            <hr>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card bg-info">
                        <div class="card-body">
                            <form method="get" action="produk_filter.php">
                                <div class="form-group">
                                    <label>Filter Produk</label>
                                    <select name="produk" class="form-control" required="required">
                                        <option value=""> - Pilih - </option>
                                        <?php
                                        $produk = mysqli_query($koneksi, "SELECT * FROM produk");
                                        while ($d = mysqli_fetch_array($produk)) {
                                        ?>
                                            <option value="<?php echo $d['id_produk']; ?>"><?php echo $d['nama_produk']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="submit" value="Tampilkan Data" class="btn btn-secondary btn-sm">
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <a class="btn btn-primary btn-sm mb-3" href="produk_tambah.php"><i class="fa fa-user-plus"></i> Tambah Produk</a>

            <a class="btn btn-success btn-sm mb-3 float-right" href="produk_cetak.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>


            <table class="table table-bordered table-hover table-striped table-saya">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>

                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    $produk = mysqli_query($koneksi, "SELECT * FROM Produk  ORDER BY id_produk ASC");
                    while ($d = mysqli_fetch_array($produk)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_produk']; ?></td>
                            <td><?php echo $d['harga_produk']; ?></td>

                            <td>
                                <a href="produk_edit.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-wrench"></i></a>
                                <a href="produk_hapus.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
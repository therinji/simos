<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Produk</title>

    <link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body>

    <?php
    include 'cek_login.php';
    include '../koneksi.php';
    ?>

    <h3 class="text-center mb-4">Laporan Data Produk</h3>


    <table class="table table-bordered table-hover table-striped table-saya">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>

            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            $produk = $_GET['produk'];
            $produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk ASC");
            while ($d = mysqli_fetch_array($produk)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_produk']; ?></td>
                    <td><?php echo $d['harga_produk']; ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>


    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
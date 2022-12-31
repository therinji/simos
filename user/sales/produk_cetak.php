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
    include 'header.php';
    include '../../koneksi.php';
    ?>

    <h2 class="text-center">UD Latansa Intiniaga</h2>
	<p class="text-center">Alamat: Sampet, Kedungsari, Gebog, Kudus Regency</p>
	<hr class="mb-4">
    <h4 class="text-center mb-4">Laporan Data Produk</h4>


    <table class="table table-bordered table-hover table-striped table-saya">
        <thead>
            <tr>
                <th width="2%">No</th>
                <th>Nama</th>
                <th>Harga Produk</th>

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
                    <td><?php echo 'Rp' . number_format($d['harga_produk'],2,',','.'); ?></td>

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
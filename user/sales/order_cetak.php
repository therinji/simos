<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Order</title>

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
<h4 class="text-center mb-4">Laporan Data Order</h4>

<table class="table table-bordered table-hover table-striped table-saya">
    <thead>
        <tr>
            <th width="2%">No</th>
            <th>Nama Produk</th>
            <th>Jumlah Order</th>
            <th>Nama Customer</th>
            <th>Sales</th>
            <th>Tanggal Order</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id_sales = $_SESSION['id_user'];
        $no = 1;
        $order = mysqli_query($koneksi, "SELECT * FROM orderan, produk, customer, sales where orderan.id_produk = produk.id_produk and orderan.id_customer = customer.id_customer and customer.id_sales = sales.id_sales and customer.id_sales = '$id_sales' ORDER BY id_order DESC");
        while ($o = mysqli_fetch_array($order)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $o['nama_produk']; ?></td>
                <td><?php echo $o['jml_order']; ?></td>
                <td><?php echo $o['nama_customer']; ?></td>
                <td><?php echo $o['nama']; ?></td>
                <td><?php echo $o['tgl_order']; ?></td>
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

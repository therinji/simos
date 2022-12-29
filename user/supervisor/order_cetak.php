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

<h3 class="text-center mb-4">Laporan Data Order</h3>

		
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
        if(isset($_GET['tgl_mulai']) && isset($_GET['tgl_berakhir'])){
            $mulai = $_GET['tgl_mulai'];
            $berakhir = $_GET['tgl_berakhir'];
            $order = mysqli_query($koneksi, "SELECT * FROM orderan, produk, customer where orderan.id_produk = produk.id_produk and orderan.id_customer = customer.id_customer and tgl_order between '$mulai' and '$berakhir' ORDER BY id_order DESC");
        }else{
            $order = mysqli_query($koneksi, "SELECT * FROM orderan, produk, customer where orderan.id_produk = produk.id_produk and orderan.id_customer = customer.id_customer ORDER BY id_order DESC");
        }
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
<script type="text/javascript">
	window.print();
</script>
</body>
</html>

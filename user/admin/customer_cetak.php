<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Customer</title>

	<link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>

	<?php
	include 'header.php';
	include '../../koneksi.php';
	$date_today = date("d-m-Y");
	?>

	<h2 class="text-center">UD Latansa Intiniaga</h2>
	<p class="text-center">Alamat: Sampet, Kedungsari, Gebog, Kudus Regency</p>
	<hr class="mb-4">
	<h4 class="text-center mb-4">Laporan Data Customer</h4>

	
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
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$customer = mysqli_query($koneksi, "SELECT * FROM customer, sales where customer.id_sales = sales.id_sales ORDER BY id_customer ASC");
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
				</tr>
			<?php
			}
			?>
		</tbody>

	</table>
	</table>
	<table style="float:right; margin-right:30px; text-align:center">
		<tr>
			<td>Kudus, <?=$date_today ?></td>
		</tr>
		<tr>
			<td>Supervisor</td>
		</tr>
		<tr style="height:50px">
		</tr>
		<tr>
			<td>Noor Imron</td>
		</tr>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>
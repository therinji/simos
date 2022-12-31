<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Sales</title>

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
	<h4 class="text-center mb-4">Laporan Data Sales</h4>
	
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Nomor HP</th>
				</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$sales = mysqli_query($koneksi,"SELECT * FROM sales ORDER BY id_sales ASC");
			while($w = mysqli_fetch_array($sales)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['nama']; ?></td>
				<td><?php echo $w['alamat']; ?></td>
				<td><?php echo $w['no_hp']; ?></td>
				
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
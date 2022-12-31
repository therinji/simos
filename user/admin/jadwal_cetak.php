<!DOCTYPE html>
<html>
<head>
	<title>Cetak Jadwal Sales</title>

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
	<h4 class="text-center mb-4">Jadwal Harian Sales</h4>

	
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th width="2%">No</th>
				<th>Sales</th>
				<th>Nama Toko</th>
				<th>Alamat Toko</th>
				<th>Hari</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$jadwal = mysqli_query($koneksi, "SELECT * FROM jadwal, customer, sales where jadwal.id_customer = customer.id_customer and sales.id_sales = customer.id_sales order by hari_jadwal, nama");
			while ($j = mysqli_fetch_array($jadwal)) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $j['nama']; ?></td>
					<td><?php echo $j['nama_customer']; ?></td>
					<td><?php echo $j['alamat_customer']; ?></td>
					<td>
						<?php
							switch($j['hari_jadwal']){
								case 1:
									echo 'Senin';
									break;
								case 2:
									echo 'Selasa';
									break;
								case 3:
									echo 'Rabu';
									break;
								case 4:
									echo 'Kamis';
									break;
								case 6:
									echo 'Sabtu';
									break;
								case 7:
									echo 'Minggu';
									break;
								default:
									echo '';
									break;
							}
						?>
					</td>
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
<?php
include 'header.php';
?>

<div class="container-fluid">

	<div class="card">
		<div class="card-body">

			<h3>Data Sales</h3>
			<p class="text-muted">Semua Data Sales</p>

			<hr>



			<a class="btn btn-primary btn-sm mb-3" href="tambah_sales.php"><i class="fa fa-user-plus"></i> Tambah Sales</a>

			<a class="btn btn-success btn-sm mb-3 float-right" href="sales_cetak.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>


			<table class="table table-bordered table-hover table-striped table-saya">
				<thead>
					<tr>
						<th width="2%">No</th>
						<th>Nama</th>
						<th>NIK</th>
						<th>TTL</th>
						<th>Alamat</th>
						<th>Nomor HP</th>
						<th>Jam Kerja</th>
						<th>Opsi</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					$no = 1;
					$sales = mysqli_query($koneksi,"SELECT * FROM sales ORDER BY id_sales ASC");
					while($w = mysqli_fetch_array($sales)){
						$tgl_lahir = date('d-m-Y', strtotime($w['tgl_lahir']));
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $w['nama']; ?></td>
						<td><?php echo $w['nik']; ?></td>
						
						<td><?php echo $w['tempat_lahir'] . ", " . $tgl_lahir; ?></td>
						<td><?php echo $w['alamat']; ?></td>
						<td><?php echo $w['no_hp']; ?></td>
						<td><?php echo $w['jam_mulai'] . " - " . $w['jam_berakhir']; ?></td>
						<td>
							<a href="sales_edit.php?id=<?php echo $w['id_sales']; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-wrench"></i></a>
							<a href="sales_hapus.php?id=<?php echo $w['id_sales']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
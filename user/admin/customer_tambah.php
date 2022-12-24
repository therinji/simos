<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Tambah Customer</h3>
					<p class="text-muted">Tambah Data Customer</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="customer.php">Kembali</a>

					<form action="customer_tambah_aksi.php" method="post">

						<div class="form-group">
							<label>Nama Customer</label>
							<input type="text" name="nama_customer" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat_customer" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Nomor HP</label>
							<input type="number" name="no_hp_customer" class="form-control">
						</div>
                        <div class="form-group">
							<label>Pemilik</label>
							<input type="text" name="pemilik_customer" class="form-control" required="required">
						</div>
                        <div class="form-group">
							<label>Sales</label>
							<select class="form-control" name="id_sales" required="required">
								<option value=''>--- Silahkan pilih sales ---</option>
								<?php
								$no = 1;
								$sales = mysqli_query($koneksi, "SELECT * FROM sales");
								while ($s = mysqli_fetch_array($sales)) {
								?>
								<option value='<?=$s['id_sales']?>'><?=$s['nama']?></option>
								<?php
								}
								?>
							</select>
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
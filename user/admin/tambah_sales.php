<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Tambah Sales</h3>
					<p class="text-muted">Tambah Data Sales</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="sales.php">Kembali</a>

					<form action="sales_tambah_aksi.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required">
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Nama Sales</label>
							<input type="text" name="nama" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Nomor HP</label>
							<input type="number" name="no_hp" class="form-control">
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
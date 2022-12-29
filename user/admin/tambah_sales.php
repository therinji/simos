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
							<label>NIK</label>
							<input type="number" name="nik" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tempat_lahir" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Nomor HP</label>
							<input type="number" name="no_hp" class="form-control">
						</div>

						<div class="form-group">
							<label>Jam Kerja</label>
							<div class="input-group">
								<input type="time" name="jam_mulai" class="form-control">
								<span class="input-group-text">s/d</span>
								<input type="time" name="jam_berakhir" class="form-control">
							</div>
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
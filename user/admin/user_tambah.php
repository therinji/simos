<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Tambah User</h3>
					<p class="text-muted">Tambah Data User</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="user.php">Kembali</a>

					<form action="user_tambah_aksi.php" method="post">

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jabatan" class="form-control">
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
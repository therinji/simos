<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Edit User</h3>
					<p class="text-muted">Edit Data User</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="user.php">Kembali</a>

					<?php

					$id = $_GET['id'];
					$user = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
					while($u = mysqli_fetch_array($user)){
					?>

					<form action="user_update.php" method="post">

                    <div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required" value="<?php echo $u['username'] ?>">
							<input type="hidden" name="id" value="<?php echo $u['id_user'] ?>">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control" required="required" value="<?php echo $u['password'] ?>">
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jabatan" class="form-control" require="required" value="<?php echo $u['jabatan'] ?>">
						</div>

						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
					</form>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Edit Sales</h3>
					<p class="text-muted">Edit Data Sales</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="sales.php">Kembali</a>

					<?php

					$id = $_GET['id'];
					$sales = mysqli_query($koneksi,"SELECT * FROM sales, user WHERE sales.id_sales = user.id_user and id_sales='$id'");
					while($w = mysqli_fetch_array($sales)){
					?>

					<form action="sales_update.php" method="post">

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $w['username'] ?>" required="required">
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							<small class="form-text text-muted">Kosongkan jika tidak ingin mengganti password</small>
						</div>

						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" required="required" value="<?php echo $w['nama'] ?>">
							<input type="hidden" name="id" value="<?php echo $w['id_sales'] ?>">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" required="required" value="<?php echo $w['alamat'] ?>">
						</div>

						<div class="form-group">
							<label>Nomor HP</label>
							<input type="number" name="no_hp" class="form-control" require="required" value="<?php echo $w['no_hp'] ?>">
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
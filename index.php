<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Monitoring Sales - Login</title>

	<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	
</head>
<body>

	<div class="container-fluid">
		

		<h1 class="text-center mt-5">Sistem Informasi Monitoring Sales</h1>
		<h2 class="text-center mb-5">Halaman Login</h2>


		<div class="row">
			<div class="col-md-4 mx-auto">
				
				<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-danger text-center'>Maaf! Username & Password Salah!</div>";
					}else if($_GET['pesan']=="logout"){
						echo "<div class='alert alert-success text-center'>Anda telah berhasil logout!</div>";
					}else if($_GET['pesan']=="belumlogin"){
						echo "<div class='alert alert-warning text-center'>Anda harus login terlebih dahulu!</div>";
					}
				}

				?>

			</div>
		</div>


		<div class="row">
			<div class="col-md-3 mx-auto">

				<div class="card mt-4">
					<div class="card-body">

						<form action="aksi_login.php" method="post">

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" required="required" class="form-control" placeholder="Masukkan username ..">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" required="required" class="form-control" placeholder="Masukkan Password ..">
							</div>

							<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block mb-3">

						</form>

					</div>
				</div>
				
			</div>
		</div>


	</div>

</body>
</html>
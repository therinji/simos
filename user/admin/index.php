<?php
include 'header.php';
?>

<div class="container">

	<div class="card">
		<div class="card-body">

			<h3>Dashboard</h3>
			<p class="text-muted">Halaman Dashboard</p>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<div class="card bg-danger text-white">
						<div class="card-body">
							
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-users fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Sales</h4>
									<?php 
									$sales = mysqli_query($koneksi,"SELECT * FROM sales");
									$jumlah_sales = mysqli_num_rows($sales);
									?>
									<p><?php echo $jumlah_sales; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-warning text-white">
						<div class="card-body">
							
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Produk</h4>
									<?php 
									$produk = mysqli_query($koneksi,"SELECT * FROM produk");
									$jumlah_produk = mysqli_num_rows($produk);
									?>
									<p><?php echo $jumlah_produk; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-success text-white">
						<div class="card-body">
							
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Customer</h4>
									<?php 
									$customer = mysqli_query($koneksi,"SELECT * FROM customer");
									$jumlah_customer = mysqli_num_rows($customer);
									?>
									<p><?php echo $jumlah_customer; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>


		</div>
	</div>

</div>

<?php
include 'footer.php';
?>
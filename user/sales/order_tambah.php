<?php
include 'header.php';
$date_today = date("Y-m-d");
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Tambah Order</h3>
					<p class="text-muted">Tambah Data Order Customer</p>

					<hr>

					<form action="order_tambah_aksi.php" method="post">

                        <div class="form-group">
							<label>Tgl order</label>
							<input type="date" name="tgl" value="<?=$date_today?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Customer</label>
							<select class="form-control" name="customer" required="required">
								<option value=''>--- Silahkan pilih customer ---</option>
								<?php
								$no = 1;
                                $id_sales = $_SESSION['id_user'];
								$customer = mysqli_query($koneksi, "SELECT * FROM customer where id_sales = '$id_sales' ORDER BY id_customer ASC");
								while ($c = mysqli_fetch_array($customer)) {
								?>
								<option value='<?=$c['id_customer']?>'><?=$c['nama_customer']?></option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Produk</label>
							<select class="form-control" name="produk" required="required">
								<option value=''>--- Silahkan pilih produk ---</option>
								<?php
								$no = 1;
								$produk = mysqli_query($koneksi, "SELECT * FROM produk");
								while ($p = mysqli_fetch_array($produk)) {
								?>
								<option value='<?=$p['id_produk']?>'><?=$p['nama_produk']?> - Rp<?=number_format($p['harga_produk'],2,',','.')?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Jumlah Order</label>
							<input type="number" name="jml" class="form-control">
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
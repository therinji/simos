<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Edit Order</h3>
					<p class="text-muted">Edit Data Order Customer</p>

					<hr>

                    <?php
                    $id = $_GET['id'];
                    $order = mysqli_query($koneksi, "SELECT * FROM orderan where id_order='$id'");
                    while ($o = mysqli_fetch_array($order)) {
                    ?>
					<form action="order_update.php" method="post">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="form-group">
							<label>Tgl order</label>
							<input type="date" name="tgl" value="<?=$o['tgl_order']?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Customer</label>
							<select class="form-control" name="customer" required="required">
								<option value=''>--- Silahkan pilih customer ---</option>
								<?php
								$no = 1;
                                $id_sales = $_SESSION['id_user'];
								$customer = mysqli_query($koneksi, "SELECT * FROM customer where id_sales = '$id_sales'");
								while ($c = mysqli_fetch_array($customer)) {
								?>
								<option value='<?=$c['id_customer']?>' <?php if($c['id_customer'] == $o['id_customer']) echo 'selected'?>><?=$c['nama_customer']?></option>
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
								<option value='<?=$p['id_produk']?>' <?php if($p['id_produk'] == $o['id_produk']) echo 'selected'?>><?=$p['nama_produk']?> - Rp<?=number_format($p['harga_produk'],2,',','.')?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Jumlah Order</label>
							<input type="number" name="jml" value="<?=$o['jml_order']?>" class="form-control">
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
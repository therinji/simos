<?php
// include '../../koneksi.php';

// $id = $_GET['id'];
// $today = date("Y-m-d H:i:s");

// mysqli_query($koneksi,"UPDATE customer SET kunjungan_terakhir='$today' WHERE id_customer='$id'");
// mysqli_query($koneksi,"INSERT INTO kegiatan(id_customer) VALUES($id)");
// header("location:kegiatan.php");
?>

<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Kunjungan Sales</h3>
					<p class="text-muted">Upload bukti kunjungan sales</p>
					<hr>
					<a class="btn btn-primary btn-sm mb-5" href="kegiatan.php">Kembali</a>

                    <?php
                    $id = $_GET['id'];

                    $kegiatan = mysqli_query($koneksi, "SELECT * FROM customer where id_customer='$id'");
                    while ($k = mysqli_fetch_array($kegiatan)) {
                    ?>
					<form action="kegiatan_check_aksi.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
						<div class="form-group">
							<label>Nama Customer</label>
							<input type="text" name="nama_customer" class="form-control" value="<?php echo $k['nama_customer'];?>" readonly>
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat_customer" class="form-control" value="<?php echo $k['alamat_customer'];?>" readonly>
						</div>

						<div class="form-group">
							<label>Nomor HP</label>
							<input type="number" name="no_hp_customer" class="form-control" value="<?php echo $k['no_hp_customer'];?>" readonly>
						</div>
                        <div class="form-group">
							<label>Pemilik</label>
							<input type="text" name="pemilik_customer" class="form-control" value="<?php echo $k['pemilik_customer'];?>" readonly>
						</div>

                        <div class="form-group">
							<label>Upload Bukti</label>
							<div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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


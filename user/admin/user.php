<?php
include 'header.php';
?>

<div class="container-fluid">

	<div class="card">
		<div class="card-body">

			<h3>Data User</h3>
			<p class="text-muted">Semua Data User</p>

			<hr>



			<a class="btn btn-primary btn-sm mb-3" href="user_tambah.php"><i class="fa fa-user-plus"></i> Tambah User</a>

			<table class="table table-bordered table-hover table-striped table-saya">
				<thead>
					<tr>
						<th>ID User</th>
						<th>Username</th>
						<th>Password</th>
						<th>Jabatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					$no = 1;
					$user = mysqli_query($koneksi,"SELECT * FROM user ORDER BY id_user ASC");
					while($u = mysqli_fetch_array($user)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $u['username']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['jabatan']; ?></td>
						
						<td>
							<a href="user_edit.php?id=<?php echo $u['id_user']; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-wrench"></i></a>
							<a href="user_hapus.php?id=<?php echo $u['id_user']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php 
					}
					?>
				</tbody>

			</table>

		</div>
	</div>

</div>

<?php
include 'footer.php';
?>
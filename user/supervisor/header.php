<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Sistem Informasi Monitoring Sales</title>

	<link rel="stylesheet" type="text/css" href="../../assets/font-awesome/css/all.css">
	<link href="../../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="../../assets/DataTables/datatables.min.css">
	<script type="text/javascript" src="../../assets/DataTables/datatables.min.js"></script>

	<script type="text/javascript" src="../../assets/js/Chart.js"></script>

</head>
<body>
	<?php
	include '../cek_login.php';
	include '../../koneksi.php';
	?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
		<div class="container">
			
			<a class="navbar-brand" href="index.php">S.I Monitoring Sales</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><i class="fa fa-home"></i> Dashboard <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-file"></i> Laporan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="monitoring.php">Monitoring Sales</a>
							<a class="dropdown-item" href="order.php">Order</a>
						</div>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
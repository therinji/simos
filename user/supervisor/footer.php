
<script type="text/javascript">
	$(document).ready(function(){
		$(".table-saya").DataTable();


		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [

				<?php
				$desa = mysqli_query($koneksi, "SELECT * FROM desa");
				while($d=mysqli_fetch_array($desa)){
				?>
				"<?php echo $d['desa_nama']; ?>", 
				<?php
				}
				?>

				],
				datasets: [{
					label: 'Jumlah Sales',
					data: [

					<?php
					$sales = mysqli_query($koneksi, "SELECT * FROM sales");
					while($d=mysqli_fetch_array($sales)){
						$id_sales = $d['sales_id'];
						$w = mysqli_query($koneksi,"SELECT * FROM customer WHERE nama='$id_sales'");
						$ww = mysqli_num_rows($w);
						?>
						"<?php echo $ww; ?>", 
						<?php
					}
					?>

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	});
</script>
</body>
</html>
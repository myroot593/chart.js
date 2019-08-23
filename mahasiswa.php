<?php
//Memanggil file koneksi dan function
include('koneksi.mahasiswa.php');
include('function.mahasiswa.php');
?>
<html>
<head>
	<title>Menampilkan Grafik Menggunakan Chart.js Berdasarkan Jenis Kelamin - ROOT93</title>
<style type="text/css">
	body{
		width: 550PX;
	}
	#chart-container {
    width: 100%;
    height: auto;
}

</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
</head>
<body>
	<?php
	//panggil function data mahasiswa berdasarkan jenis kelamin
	$tampil=Chart_Tampil_JK();
	$tampilkan=mysqli_fetch_array($tampil);
	
	?>
<div id=chart-container>
<canvas id="myPieChart" width="50" height="50"></canvas>
</div>
</body>
</html>

<script type="text/javascript">

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Laki laki","Perempuan"],
    datasets: [{
    label: '',
      data: [<?php echo $tampilkan['jumlah_pria']; ?>, <?php echo $tampilkan['jumlah_perempuan']; ?>],
      backgroundColor: ['#007bff', '#dc3545'],
    }],
  },
});
</script>

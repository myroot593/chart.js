<?php
header('Content-Type: application/json');
$koneksi = mysqli_connect("localhost","root","","statistik_janda");
$sql= "SELECT id,nama_daerah,jumlah FROM tb_janda ORDER BY id";
$result = mysqli_query($koneksi,$sql);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($koneksi);

echo json_encode($data);
?>

<?php
function query($sql){
	global $koneksi;
	$perintah=mysqli_query($koneksi,$sql);
	if(!$perintah) die("Gagal melakukan koneksi".mysqli_connect_error());
	return $perintah;
}

function Chart_Tampil_JK(){
	$sql="SELECT SUM(IF(jenis_kelamin='L',1,0)) AS jumlah_pria, SUM(IF(jenis_kelamin='P',1,0)) AS jumlah_perempuan FROM tb_mahasiswa";
	$perintah=query($sql);
	return $perintah;
}

?>

<?php
define('NAME_SERVER', 'localhost');
define('NAME_USER','root');
define('NAME_PASS','');
define('NAME_DB', 'chart');
$koneksi=mysqli_connect(NAME_SERVER,NAME_USER,NAME_PASS,NAME_DB);
if($koneksi==false){
	die("Tidak dapat melakukan koneksi".mysqli_connect_error());
}

?>

<?php 
$conect = mysqli_connect("localhost","root","","web_jts");

if (mysqli_connect_error()){
	echo "koneksi database gagal : " . mysqli_connect_error() ;
 }
 ?>

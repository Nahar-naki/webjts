<?php 
session_start();
include "koneksi.php";
if (isset($_GET['id'])) {

   $id = $_GET['id'];
   $sql = mysqli_query($conect, "DELETE FROM `tb_about` WHERE id_about='$id'");    
   if ($sql){
   	header('location:galeri.php');
   }else{
   	echo("gagal");
   }
 }
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

 ?>
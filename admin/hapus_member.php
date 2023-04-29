<?php 
session_start();
include "koneksi.php";
if (isset($_GET['id'])) {

   $id = $_GET['id'];
   $sql = mysqli_query($conect, "DELETE FROM `tb_member` WHERE id_member='$id'");    
   if ($sql){
   	header('location:member.php');
   }else{
   	echo("gagal");
   }
 }
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

 ?>
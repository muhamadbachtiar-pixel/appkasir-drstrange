<?php 
include"koneksi.php";
	$sql=$con->query("DELETE FROM tb_berita WHERE id_berita='$_GET[id]'");
	if ($sql) {
			echo "<script>document.location.href='../index.php?page=input';</script>";
		}else{
			echo"Data Gagal Di Input";
		}
 ?>
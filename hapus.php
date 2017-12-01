<?php
	include "koneksi.php";
	
	$cnim = $_GET['knim'];
	
	
	$hapus = "delete from FormDataDiri where NIM='$cnim'";
	$hasil = mysql_query($hapus,$con);
	header('location:tampil_data_pribadi.php');
?>
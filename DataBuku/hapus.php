<?php
	include "koneksi.php";
	
	$ckode = $_GET['dkode'];
	
	
	$hapus = "DELETE FROM DataBuku WHERE kode='$ckode'";
	$hasil = mysql_query($hapus,$con);
	header('location:tampil_data_buku.php');
?>
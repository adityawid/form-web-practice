<?php
	include "koneksi.php";
	
$ckode = $_POST['xkode'];
$cjudul = $_POST['xjudul'];
$cpengarang= $_POST['xpengarang'];
$ctahun= $_POST['xtahun'];
$cpenerbit = $_POST['xpenerbit'];
$cjenis = $_POST['xjenis'];
	
	
	$ubah = "UPDATE DataBuku SET judul_buku='$cjudul',pengarang='$cpengarang',tahun='$ctahun', penerbit='$cpenerbit',jenis='$cjenis' where kode='$ckode'";
	mysql_query($ubah,$con);
	header('location:tampil_data_buku.php');
?>
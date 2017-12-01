<?php
include "koneksi.php";

$ckode = $_POST['xkode'];
$cjudul = $_POST['xjudul'];
$cpengarang= $_POST['xpengarang'];
$ctahun= $_POST['xtahun'];
$cpenerbit = $_POST['xpenerbit'];
$cjenis = $_POST['xjenis'];




$savedt = "insert into 
			DataBuku (kode,judul_buku,pengarang,tahun, penerbit,jenis) 
			values ('$ckode','$cjudul','$cpengarang','$ctahun','$cpenerbit','$cjenis')";
mysql_query($savedt,$con);
if ($savedt){
	$_GET['tampil_data_buku.php'];
}
header('location:tampil_data_buku.php');
?>
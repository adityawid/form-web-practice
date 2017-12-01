<?php
include "koneksi.php";

$cnim = $_POST['xnim'];
$cnama = $_POST['xnama'];
$ctgl_lhr= $_POST['tgllhr'];
$cjns_kel= $_POST['jk'];
$cagama = $_POST['agama'];
$calamat = $_POST['xalam'];
$ckota = $_POST['xkota'];

$savedt = "insert into 
			FormDataDiri (NIM,Nama,tgl_lhr,jns_kel, agama,alamat,kota) 
			values ('$cnim','$cnama','$ctgl_lhr','$cjns_kel','$cagama','$calamat','$ckota')";
mysql_query($savedt,$con);
if ($savedt){
	$_GET['tampil_data_pribadi.php'];
}
?>
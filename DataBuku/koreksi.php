<?php
	include "koneksi.php";
	
	$ckode = $_GET['dkode'];
	
	$cari = "select * from DataBuku where kode='$ckode'";
	$hasil = mysql_query($cari,$con);
	while ( $kor = mysql_fetch_array($hasil))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Data Buku</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<style>
td {
	padding:10px;
}
div {margin-top:110px;
margin-left:850px;
position:absolute;
}

.tombol{font-size:22px;
	border-radius:20px;}  

.tombol:hover{font-size:22px;
	border-radius:10px;
	color:#FF0000;
	box-shadow:3px 3px 3px 2px 2px red; } 
</style>
<body>
<div>
	<img src="img/buku.png" width="120" height="200" />
</div>
<form action="update.php" method="post" name="form1">
<table border="0" width="900" align="center" bgcolor="#00FFCC">
	
<tr>
	<td colspan="3" align="center"><h2>Entry Data Buku</h2></td>
</tr>
<tr>
	<td>Kode Buku </td><td>: </td> <td>	<input type="text" name="xkode" size="14"value="<?php echo $kor[0]?>" /></td>
</tr>

<tr>
	<td>Judul Buku    </td><td>: </td> <td><input type="text" name="xjudul" size="50" value="<?php echo $kor[1]?>" /></td>
</tr>
<tr>
	<td>Pengarang    </td><td>: </td> <td><input type="text" name="xpengarang" size="50" value="<?php echo $kor[2]?>" /></td>
</tr>
<tr>
	<td>Tahun Terbit </td><td>: </td> <td><input type="date" name="xtahun" value="<?php echo $kor[3]?>"/></td>
</tr>
<tr>
	<td>Penerbit    </td><td>: </td> <td><input type="text" name="xpenerbit" size="50" value="<?php echo $kor[4]?>"/></td>
</tr>

<tr>
	<td>Jenis </td><td>: </td> 
    <td><select name="xjenis">
			<option value="ek" <?php if ($kor[5]==ek) { echo "selected";} ?>>Ekonomi</option>
            <option value="ko" <?php if ($kor[5]==ko) { echo "selected";} ?>>Komputer</option>
			<option value="bh" <?php if ($kor[5]==bh) { echo "selected";} ?>>Bahasa</option>
			<option value="so" <?php if ($kor[5]==so) { echo "selected";} ?>>Sosial</option>
            <option value="ln" <?php if ($kor[5]==ln) { echo "selected";} ?>>Lain-Lain</option>
        </select>
    </td>
</tr>
<tr>
<td colspan="3" align="center">
<input type="submit" value="simpan" class="tombol" />
<input type="reset" value="cancel" class="tombol"  />
</td>
</tr>
</table>
</form>
</body>
</html>

<?php 
}
?>

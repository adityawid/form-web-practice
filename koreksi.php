<?php
	include "koneksi.php";
	
	$cnim = $_GET['knim'];
	
	$cari = "select * from FormDataDiri where NIM='$cnim'";
	$hasil = mysql_query($cari,$con);
	while ( $kor = mysql_fetch_array($hasil))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Koreksi Data Pribadi - Latihan Database</title>
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
	<img src="img/AdityaWi.jpg" width="120" height="200" />
</div>
<form action="update.php" method="post" name="form1">
<table border="0" width="900" align="center" bgcolor="#00FFCC">
	
<tr>
	<td colspan="3" align="center"><h2>Entry Data Pribadi</h2></td>
</tr>
<tr>
	<td>NIM </td><td>: </td> <td>	<input type="text" name="xnim" size="14" value="<?php echo $kor[0]?>" /></td>
</tr>

<tr>
	<td>Nama    </td><td>: </td> <td><input type="text" name="xnama" size="40" value="<?php echo $kor[1]?>" /></td>
</tr>
<tr>
	<td>TGL.Lahir </td><td>: </td> <td><input type="date" name="tgllhr" value="<?php echo $kor[2]?>"/></td>
</tr>
<tr>
	<td>Jenis.Kel </td><td>: </td> 
    <td><input type="radio" name="jk"  value="Laki-Laki" <?php if($kor[3] == 'L'){echo "checked";}?>/>Laki-laki
		<input type="radio" name="jk" value="Perempuan" <?php if($kor[3] == 'P'){echo "checked";}?>/> Perempuan
    </td>
</tr>
<tr>
	<td>Agama </td><td>: </td> 
    <td><select name="agama">
			<option value="is" <?php if ($kor[4]==is) { echo "selected";} ?>>ISLAM</option>
            <option value="hi" <?php if ($kor[4]==hi) { echo "selected";} ?>>HINDU</option>
			<option value="bu" <?php if ($kor[4]==bu) { echo "selected";} ?>>BUDHA</option>
			<option value="kr" <?php if ($kor[4]==kr) { echo "selected";} ?>>KRISTEN</option>
			<option value="ka"  <?php if ($kor[4]==ka) { echo "selected";} ?>>KATOLIK</option>
			<option value="ko" <?php if ($kor[4]==ko) { echo "selected";} ?>>KONGHUCHU</option>
        </select>
    </td>
</tr>
<tr>
	<td>Alamat </td><td>: </td> 
    <td><textarea rows="4" cols="50" name="xalam" value="" ><?php echo $kor[5]?></textarea>
    </td>
</tr>
<tr>
	<td>Kota </td><td>: </td> 
    <td><input type="text" name="xkota" size="20" value="<?php echo $kor[6]?>" />
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

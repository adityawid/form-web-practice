<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
	include "koneksi.php";
	
	$query = "select * from  FormDataDiri";
	$hasil = mysql_query($query,  $con );
	
	echo "<h1>Tampil Dataku</h1>";
?>
<table border="1" width="100%">
<tr>
	<td>Nim</td>
    <td>Nama</td>
    <td>Tanggal Lahir</td>
    <td>Jenis Kelamin</td>
    <td>Agama</td>
    <td>Alamat</td>
    <td>Kota</td>
</tr>	

<?php
	while ($content = mysql_fetch_array($hasil))
	{
	?>
    <tr>
    <td><?php echo $content[0]; ?></td>
    <td><?php echo $content[1]; ?></td>
    <td><?php echo $content[2]; ?></td>
    <td><?php echo $content[3]; ?></td>
    <td><?php 
		if($content[4] == is){
		echo "ISLAM";
		}
		else if ($content[4] == kr )
		{
		echo "Kristen";
		} else if ($content[4] == hi)
		{
		echo "Hindu";
		}else if ( $content[4] == bu )
		{ 
		echo "Budha";
		}else if ( $content[4] == ka )
		{ 
		echo "Katolik";
		}else {
		echo "Khonghuchu";
		}
		?></td>
    <td><?php echo $content[5]; ?></td>
    <td><?php echo $content[6]; ?></td>
    <td><?php 
		echo "<a href=koreksi.php?knim=$content[0]>Edit</a>";
		echo"  -  " ;
		echo "<a href=hapus.php?knim=$content[0]>Hapus</a>";
	?></td>
    </tr>
<?php
	}
?>
</table>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
	include "koneksi.php";
	
	$query = "select * from  DataBuku";
	$hasil = mysql_query($query,  $con );
	
	echo "<h1>Tampil Data Buku</h1>";
?>
<table border="1" width="100%">
<tr>
	<td>Kode</td>
    <td>Judul</td>
    <td>Pengarang</td>
    <td>Tahun Terbit</td>
    <td>Penerbit</td>
    <td>Jenis Buku</td>
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
    <td><?php echo $content[4]; ?></td>
    <td><?php 
		if ($content[5] == ek )
		{
		echo "Ekonomi";
		} else if ($content[5] == ko)
		{
		echo "Komputer";
		}else if ( $content[5] == bh )
		{ 
		echo "Bahasa";
		}else if ( $content[5] == so )
		{ 
		echo "Sosial";
		}else {
		echo "Lain-Lain";
		}
		?></td>
    
    <td><?php 
		echo "<a href=koreksi.php?dkode=$content[0]>Edit</a>";
		echo"  -  " ;
		echo "<a href=hapus.php?dkode=$content[0]>Hapus</a>";
	?></td>
    </tr>
    <tr>
<?php
	}
?>
</table>
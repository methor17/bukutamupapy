<?php
mysql_connect("localhost","root","");
mysql_select_db("dbtamu_papyrus");    
if (isset($_GET['input2']))
{
$input2 = $_GET['input2'];
$query = mysql_query("SELECT DISTINCT nopol FROM tb_buku WHERE nama LIKE '%$input2%' AND hapus='Y' ORDER BY nopol"); //query mencari hasil search
$hasil2 = mysql_num_rows($query);
if ($hasil2 > 0)
{
	while ($data = mysql_fetch_row($query))
	{
	?>
		<table border="1">
		 <tr><td width="76">No Pol Kendaraan  :
		 <a href="javascript:autoInsert2('<?=$data[0]?>');">
		 <?=$data[0]?></a> 
		 </td>
		 </tr>
		 </table>
	<?php
	}
}else{
	echo "Data tidak ditemukan, Silahkan Isi Manual";
	}
}else if(isset($_GET['nopol']))
{
	$nopol = $_GET['nopol'];
	$query = mysql_query("SELECT DISTINCT * FROM tb_buku WHERE hapus='Y' AND nopol='$nopol'");
	$info = mysql_fetch_row($query);
	echo "No Pol Kendaraan  : ".$info[0];
}
?>
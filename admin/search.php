<?php
mysql_connect("localhost","root",""); /* koneksi */
mysql_select_db("dbtamu_papyrus");              /*  MySQL  */
if (isset($_GET['input']))
{
$input = $_GET['input'];
$query = mysql_query("SELECT DISTINCT nm_tamu, alm_tamu, instansi FROM tb_buku WHERE hapus='Y' AND nm_tamu LIKE '%$input%' ORDER BY nm_tamu"); //query mencari hasil search
$hasil = mysql_num_rows($query);
if ($hasil > 0)
{
	while ($data = mysql_fetch_row($query))
	{
	?>
		<table border="1">
		 <tr><td width="76">nama tamu :
		 <a href="javascript:autoInsert('<?=$data[0]?>','<?=$data[1]?>','<?=$data[2]?>');">
		 <?=$data[0]?></a>  | alamat :
		 <a href="javascript:autoInsert('<?=$data[0]?>','<?=$data[1]?>','<?=$data[2]?>');">
		 <?=$data[1]?></a> | instansi :
		 <a href="javascript:autoInsert('<?=$data[0]?>','<?=$data[1]?>','<?=$data[2]?>');">
		 <?=$data[2]?></a></td>
		 </tr>
		 </table>
	<?php
	}
}else{
	echo "Data tidak ditemukan, Silahkan Isi Manual";
	}
}else if(isset($_GET['nm_tamu']))
{
	$nm_tamu = $_GET['nm_tamu'];
	$query = mysql_query("SELECT DISTINCT * FROM tb_buku WHERE hapus='Y' AND nm_tamu='$nm_tamu' ORDER BY nm_tamu");
	$info = mysql_fetch_row($query);
	echo "Nama tamu : ".$info[0]."<BR>alamat : ".$info[1]."<BR>Instansi : ".$info[2];
}
?>
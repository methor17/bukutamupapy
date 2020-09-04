<?php
mysql_connect("localhost","root","");
mysql_select_db("dbtamu_papyrus");    
if (isset($_GET['input1']))
{
$input1 = $_GET['input1'];
$query = mysql_query("SELECT DISTINCT nama, bagian FROM tb_buku WHERE nama LIKE '%$input1%' AND hapus='Y' ORDER BY nama"); //query mencari hasil search
$hasil1 = mysql_num_rows($query);
if ($hasil1 > 0)
{
	while ($data = mysql_fetch_row($query))
	{
	?>
		<table border="1">
		 <tr><td width="76">nama  :
		 <a href="javascript:autoInsert1('<?=$data[0]?>','<?=$data[1]?>');">
		 <?=$data[0]?></a>  | bagian :
		 <a href="javascript:autoInsert1('<?=$data[0]?>','<?=$data[1]?>');">
		 <?=$data[1]?></a>
		 </td>
		 </tr>
		 </table>
	<?php
	}
}else{
	echo "Data tidak ditemukan, Silahkan Isi Manual";
	}
}else if(isset($_GET['nama']))
{
	$nama = $_GET['nama'];
	$query = mysql_query("SELECT DISTINCT * FROM tb_buku WHERE hapus='Y' AND nama='$nama'");
	$info = mysql_fetch_row($query);
	echo "Nama  : ".$info[0]."<BR>bagian : ".$info[1];
}
?>
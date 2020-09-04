<?php ob_start(); ?>
<html>
<head>
  <title>LISTING TAMU PERTANGGAL</title>
<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px; font-size:17px}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>

<h3><b>LISTING TAMU PERTANGGAL: <?php echo date('d-m-Y');?></b></h3>
<br><br>
<table border="1" width="100%">
<tr>
        <td width="5%"></td>
		<td width="8%"></td>
		<td width="140%" align="center">NAMA TAMU</td>
		<td width="30%" align="center">INSTANSI</td>
		<td width="30%" align="center">Bertemu</td>
		<td width="30%" align="center">Alasan</td>
		<td width="20%" align="center">In</td>
		<td width="20%" align="center">Out</td>
  </tr>
<?php
$link = mysqli_connect("localhost", "root", "", "dbtamu_papyrus") or die(mysqli_error($link));

$query = "SELECT nota, nm_tamu, instansi, nama, alasan, Jin, Jout, tgl FROM tb_buku WHERE tgl=CURDATE()"; 
$sql = mysqli_query($link, $query); 
$row = mysqli_num_rows($sql); 

if($row > 0){ 
    $no = 1; 
    while($data = mysqli_fetch_array($sql)){ 
        echo "<tr>";
        echo "<td width='10'>".$no."</td>";
		echo "<td width='70'>".$data['nota']."</td>";
		echo "<td width='120'>".$data['nm_tamu']."</td>";
		echo "<td width='120'>".$data['instansi']."</td>";
		echo "<td width='120'>".$data['nama']."</td>";
		echo "<td width='120'>".$data['alasan']."</td>";
		echo "<td width='70'>".$data['Jin']."</td>";
		echo "<td width='70'>".$data['Jout']."</td>";
		echo "</tr>";
		
		$no++;
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('../vendor/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Tamu PT Papyrus.pdf', 'D');
?>

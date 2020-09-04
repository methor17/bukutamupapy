<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">
<style type="text/css"> @media print {

#noprint { display: none; }

#print { display: block; } }

</style>

<?php
include ('core/init.php');

if (isset($_GET['id'])) {
    $link = mysqli_connect("localhost", "root", "", "dbtamu_papyrus") or die(mysqli_error($link));
    $query = "SELECT * FROM tb_buku WHERE nota = '$_GET[id]'";
    $sql = mysqli_query($link, $query); 
    $data = mysqli_fetch_array($sql);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}


?>

  <title>Listing Tamu PT Papyrus</title>

   <style>
   </style>
</head>
<body>
<div id="print">
<table width="1000" border="1">
  <tr>
    <td colspan="3" align="center"><font size="5"><b>PT. PAPYRUS SAKTI</b><br /></font>
	Jl. Raya Banjaran Km 16,2 Bandung</td>
    <td colspan="5">
	<table border="0">
	<tr>
	  <td width="161"><label>
	  <u>Pendaftaran Tamu</u><br>
	  <i>Registration Of Visitor</i>
	  </label></td>
	  <td width="9" rowspan="2">:</td>
	  <td width="147" rowspan="2" align="center"><div align="left">
	  <img src="barcode.php?text=<?php echo $data['nota'];?>"/></td>
	</tr>
	<tr>
	  <td><i><?php echo $data['nota'];?></i></td>
	  </tr>
	</table>	</td>
  </tr>
  <tr>
    <td colspan="3">
	<table width="100%" border="0">
	<td width="18%"><label>
	<u>Nama</u><br>
	<i>Name</i></label></td>
	<td width="4%">:</td>
	<td width="78%"><b><?php echo strtoupper($data['nm_tamu']);?></b></td>
	</table>	</td>
    <td colspan="5">
	<table border="0">
	<td width="161"><label>
	<u>Ingin bertemu</u><br>
	<i>Wish to see</i></label></td>
	<td width="10"></td>
	<td width="143"><b><?php echo strtoupper($data['nama']);?></b></td>
	</table>	</td>
  </tr>
  <tr>
    <td colspan="5">
	<table width="358" border="0">
	<td width="51"><label>
	<u>Alamat</u><br>
	<i>Address</i></label></td>
	<td width="17">:</td>
	<td width="264"><b><?php echo strtoupper($data['alm_tamu']);?></b></td>
	</table>	</td>
    <td colspan="3">
	  <table border="0">
	    <td width="115"><label>
	      <u>No.Pol.Kendaraan</u><br>
	      <i>Number Plate</i></label></td>
	  <td width="3">:</td>
	  <td width="273"><b><?php echo strtoupper($data['nopol']);?></b></td>
      </table></td>
  </tr>
  <tr>
    <td colspan="2" width="350">
	<table border="0">
	<td width="96"><label><u>Perusahaan</u><br>
	<i>Representesing</i></label></td>
	<td width="3">:</td>
	<td width="235"><b><?php echo strtoupper($data['instansi']);?></b></td>
	</table>	</td>
    <td colspan="5" width="225">
	<table border="0">
	<td width="44"><label><u>Perihal</u><br>
	<i>Subjek</i></label></td>
	<td width="3">:</td>
	<td width="299"><b><?php echo strtoupper($data['alasan']);?></b></td>
	</table>	</td>
    <td width="84">
	<table width="83" border="0">
	<tr><td width="77"><label><u>Ada Janji</u></label></td></tr>
	<tr><td><b><?php echo strtoupper($data['janji']);?></b></td></tr>
	</table>	</td>
  </tr>
  <tr>
    <td width="250">
	<table border="0">
	<td width="47"><label>
	<u>Tanggal</u><br>
	<i>Date</i></label></td>
	<td width="3">:</td>
	<td width="169"><b><?php echo $data['tgl'];?></b></td>
	</table>	</td>
    <td colspan="3" width="250">
	  <table border="0">
	    <td width="42"><label>
	      <u>Masuk</u><br>
	      <i>In</i></label></td>
	  <td width="3">:</td>
	  <td width="61"><b><?php echo $data['Jin'];?></b></td>
      </table></td>
    <td colspan="2" width="225">
	<table border="0">
	<td width="41"><label>
	<u>Keluar</u><br>
	<i>Out</i></label></td>
	<td width="3">:</td>
	<td width="123"><b><?php echo $data['Jout'];?></b></td>
	</table>	</td>
    <td colspan="2" rowspan="2" width="125">
	  <table border="0">
	    <tr><td width="134"><label><u>Sifat Pekerjaan</u></label></td></tr>
	    <tr><td><b><?php echo strtoupper($data['sifat']);?></b></td></tr>
      </table></td>
  </tr>
  <tr>
    <td>
	<table border="0">
	<tr><td width="227"><label><u>Tandatangan Tamu</u><br>
	<i>Guest's Signature</i></label></td></tr>
	<tr><td><br /><br /> <br /></td></tr>
	</table>	</td>
    <td colspan="3">
	  <table border="0">
	    <tr><td width="116"><label><u>Keamanan</u><br>
        <i>Security</i></label></td></tr>
	    <tr><td><br /><br /><br /></td></tr>
      </table></td>
    <td colspan="2">
	<table border="0">
	<tr><td><label><u>Ttd. yang telah Anda kunjungi</u><br>
	<i>Signature the person you're</i></label></td></tr>
	<tr><td><br /><br /><br /></td></tr>
	</table>	</td>
  </tr>
  <tr>
    <td colspan="4" align="center">
	<u>Harap slip ini dikembalikan ke keamanan</u><br>
	<i>Please return it to security</i>	</td>
    <td colspan="5" align="center">
	<i><u>Terimakasih untuk tidak merokok selama berkujung</u><br>
	Thank you for no smoking during your visit</i>	</td>
  </tr>
</table>
</div>
<br />
<br />
<center>

<div class="row col s12" id="noprint">
<table border="0">
  <tr>
	    <td><button type="submit" style="background-color: #27AE60; margin-left: 6px;"  
		onClick="window.location.href='index.php'"><font size="+2" color="#FFFFFF"><b>BERANDA</b></font>
        </button></td>
		<td><button type="submit" style="background-color: #27AE60; margin-left: 6px;"  
		onClick="window.print()" ><font size="+2" color="#FFFFFF"><b>CETAK</b></font>
        </button></td>
  </tr>
</div>
</center>
</body>
</html>

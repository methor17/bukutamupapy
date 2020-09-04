<?php
$link = mysqli_connect("localhost", "root", "", "dbtamu_papyrus") or die(mysqli_error($link));

$nota=$_POST['nota'];
$nm_tamu=$_POST['nm_tamu'];
$alm_tamu=$_POST['alm_tamu'];
$instansi=$_POST['instansi'];
$nopol=$_POST['nopol'];
$sifat=$_POST['sifat'];
$janji=$_POST['janji'];
$nama=$_POST['nama'];
$bagian=$_POST['bagian'];
$alasan=$_POST['alasan'];


$query ="UPDATE tb_buku SET nm_tamu='$nm_tamu', alm_tamu='$alm_tamu', instansi='$instansi', nopol='$nopol', sifat='$sifat', janji='$janji', nama='$nama', bagian='$bagian', alasan='$alasan' WHERE nota = '$nota'";
$sql = mysqli_query($link, $query); 

	if ($sql){
    	echo "<script>alert('Update Data Berhasil!')
    	 </script>";
		header('location: cetakform.php?id='.$_POST['nota']);
	}else{
    	echo "<script>alert('Update Data Gagal!')
    	 location.replace('index.php')</script>";	
	}
?>
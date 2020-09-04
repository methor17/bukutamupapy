<?php
function run($query){
  global $link;

  if(mysqli_query($link, $query)){
    return true;
  }else {
    return false;
  }
}

function kirimData($nota, $nm_tamu, $alm_tamu, $instansi, $nopol, $sifat, $janji, $nama, $bagian, $alasan){
  $query = "INSERT INTO tb_buku (nota, nm_tamu, alm_tamu, instansi, nopol, sifat, janji, nama, bagian, alasan, Jin, tgl) VALUES ('$nota', '$nm_tamu', '$alm_tamu', '$instansi', '$nopol', '$sifat', '$janji', '$nama', '$bagian', '$alasan', now(), now())";
  return run($query);
}

function tampilData(){
  global $link;

  $query = "SELECT * FROM tb_buku WHERE hapus='Y'";
  $result = mysqli_query($link, $query);

  return $result;
}

function hapusData($nota){
  $query = "UPDATE tb_buku SET hapus ='T' WHERE nota = $nota";
  return run($query);
}

function editData($nota){
  $query = "UPDATE tb_buku SET Jout = now() WHERE nota = $nota";
  return run($query);
}

function search(){
  global $link;

  $input_cari = @$_POST['input_cari'];
  $cari_data = @$_POST['cari_data'];
  if ($cari_data) {
    if ($input_cari != "") {
      $query = mysqli_query($link, "SELECT * FROM tb_buku WHERE nota LIKE '%$input_cari%' AND hapus='Y'") or die(mysqli_error());
    } else {
      $query = mysqli_query($link, "SELECT * FROM tb_buku WHERE hapus='Y'") or die(mysqli_error());
    }
  } else {
    $query = mysqli_query($link, "SELECT * FROM tb_buku WHERE hapus='Y'") or die(mysqli_error());
  }

  $cek = mysqli_num_rows($query);
    if ($cek < 1) {
      ?>
      <script type="text/javascript">alert("Data tidak ditemukan, silahkan coba lagi!");</script>
      <?php
    }

  return $query;
}

?>

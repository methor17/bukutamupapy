<?php
require_once ('core/init.php');
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

require_once('../dist/sidebar.php');
?>


<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">

<main>
  <div class="section row">
    <div class="col s12">
    <a class="waves-effect btn" style="background-color: #00b0ff;" href="index.php"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
    <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#bantuan"><i class="material-icons left">help</i>Bantuan</a>
    </div>
  </div>

  <div class="row">
    <form class="col s12" action="aksiedit.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">view_comfy</i>
          <input class="validate" type="text" name="nota" readonly="readonly" value="<?php echo $data['nota'];?>" autocomplete="off">
		  <label>No. Tamu</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nm_tamu" value="<?php echo $data['nm_tamu'];?>" autocomplete="off">
          <label>Nama Lengkap</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <input class="materialize-textarea" type="text" name="alm_tamu" value="<?php echo $data['alm_tamu'];?>" autocomplete="off">
          <label>Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>'
		  <input class="materialize-textarea" type="text" name="instansi" value="<?php echo $data['instansi'];?>" autocomplete="off">
          <label>Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <input class="materialize-textarea" type="text" name="nopol" value="<?php echo $data['nopol'];?>" autocomplete="off">
          <label>No.Pol.Kendaraan</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <label>Sifat</label>
	  </div>
      </div><br />
	  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
		  <?php if ($data['sifat'] == 'Kantor') { ?>
                <td>
			    <input class="with-gap" id="test1" type="radio" name="sifat" value="Kantor" checked /><label for="test1">Kantor</label>
          		<input class="with-gap" id="test2" type="radio" name="sifat" value="Lapangan" /><label for="test2">Lapangan</label>
		  		<input class="with-gap" id="test3" type="radio" name="sifat" value="Kasir" /><label for="test3">Kasir</label>
				</td>
          <?php } else if(($data['sifat'] == 'Lapangan')){ ?>
				<td>
				<input class="with-gap" id="test1" type="radio" name="sifat" value="Kantor" /><label for="test1">Kantor</label>
          		<input class="with-gap" id="test2" type="radio" name="sifat" value="Lapangan" checked /><label for="test2">Lapangan</label>
		  		<input class="with-gap" id="test3" type="radio" name="sifat" value="Kasir" /><label for="test3">Kasir</label>
				</td>
          <?php } else {?>
			    <td>
				<input class="with-gap" id="test1" type="radio" name="sifat" value="Kantor" /><label for="test1">Kantor</label>
          		<input class="with-gap" id="test2" type="radio" name="sifat" value="Lapangan" /><label for="test2">Lapangan</label>
		  		<input class="with-gap" id="test3" type="radio" name="sifat" value="Kasir" checked /><label for="test3">Kasir</label>
		  		</td>
		 <?php } ?>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <label>Janji</label>
	  </div>
      </div><br />
	  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
		  <?php if ($data['janji'] == 'Ya') { ?>
                <input class="with-gap" name="janji" value="Ya" type="radio" id="test4" checked />
   		    	<label for="test4">Ya</label>
    			<input class="with-gap" name="janji" value="Tidak" type="radio" id="test5" />
   		    	<label for="test5">Tidak</label>
          <?php } else { ?>
                <input class="with-gap" name="janji" value="Ya" type="radio" id="test4" />
   		    	<label for="test4">Ya</label>
    			<input class="with-gap" name="janji" value="Tidak" type="radio" id="test5" checked />
   		    	<label for="test5">Tidak</label>
          <?php } ?>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nama" value="<?php echo $data['nama'];?>" autocomplete="off">
          <label>Menemui</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="bagian" value="<?php echo $data['bagian'];?>" autocomplete="off">
          <label>Bagian</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <input class="materialize-textarea" type="text" name="alasan" value="<?php echo $data['alasan'];?>" autocomplete="off">
		  <label>alasan</label>
		</div>
      </div>      
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
		  <input class="validate" type="text" name="Jin" readonly="readonly" value="<?php echo $data['Jin'];?>" autocomplete="off">
		  <label>Jam Masuk</label>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
		  <input class="validate" type="text" name="Jout" readonly="readonly" value="<?php echo $data['Jout'];?>">
		  <label>Jam Keluar</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
		  <input class="validate" type="text" name="tgl" readonly="readonly" value="<?php echo $data['tgl'];?>">
          <label>Tanggal</label>
		 </div>
      </div>
      
     <div class="row col s12">
	    <button class="btn waves-effect right" type="submit" name="kirim" style="background-color: #27AE60; margin-left: 6px;" >Simpan
          <i class="material-icons right">save</i>
        </button>
		</div>
    </form>
  </div>
</main>

<?php
require_once('../dist/footer.php');
?>

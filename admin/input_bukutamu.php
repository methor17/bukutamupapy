<?php
require_once('core/init.php');
if (isset($_POST['kirim'])) {
  if(kirimData($_POST['nota'], $_POST['nm_tamu'], $_POST['alm_tamu'], $_POST['instansi'], $_POST['nopol'], $_POST['sifat'], $_POST['janji'],
  			   $_POST['nama'], $_POST['bagian'],$_POST['alasan'])){
	echo "<script type='text/javascript'>alert('Data Barhasil Disimpan!');</script>";
    header('location: cetakform.php?id='.$_POST['nota']);
  }else {
    echo "<script type='text/javascript'>alert('Data Gagal Disimpan!');</script>";
  }
}


require_once('../dist/sidebar.php');
$tahun=substr(date("Y-m-d"), 2, 2);
$bulan=substr(date("Y-m-d"), 5, 2);
$query =mysqli_query($link,"SELECT max(nota) as maxKode FROM tb_buku where month(tgl)='".date('m')."' ORDER BY tgl  LIMIT 1");
$data = mysqli_fetch_array($query);
if (date('d') == '01'){
     $noOrder=1;
}else{
    $row=$data;
	$noOrder=$row['maxKode'];
}
$noOrder = $data['maxKode'];
$a = (int) substr($noOrder, 4, 3);
$a++;
$nota =$tahun .$bulan . sprintf("%03s", $a);
?>
<title>Isi Buku Tamu - PT. Papyrus Sakti Paper Mill</title>

<script src="../vendor/materializecss/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"> 
                                // 1 detik = 1000 
                                window.setTimeout("waktu()",1000);   
                                function waktu() {    
                                    var tanggal = new Date();   
                                    setTimeout("waktu()",1000);   
                                   document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds(); 
                               } 
</script>

<script type="text/javascript">
    function validasi(form_data){
        if (form_data.nm_tamu.value == ""){
            alert("Anda belum mengisikan nama tamu.");
            form_data.nm_tamu.focus();
            return (false);
        }

        if (form_data.alm_tamu.value == ""){
            alert("Anda belum mengisikan alamat tamu.");
            form_data.alm_tamu.focus();
            return (false);
        }
          
        if (form_data.instansi.value == ""){
            alert("Anda belum mengisikan instansi.");
            form_data.instansi.focus();
            return (false);
        }

        if (form_data.nopol.value == ""){
            alert("Anda belum mengisikan Nomor polisi kendaraan");
            form_data.nopol.focus();
            return (false);
        }
		
		if (form_data.nama.value == ""){
            alert("Anda belum mengisikan nama yang ditemui");
            form_data.nama.focus();
            return (false);
        }
		if (form_data.bagian.value == ""){
            alert("Anda belum mengisikan bagian");
            form_data.bagian.focus();
            return (false);
        }
		if (form_data.alasan.value == ""){
            alert("Anda belum mengisikan alasan berkunjung");
            form_data.alasan.focus();
            return (false);
        }
       
        return (true);
    }
</script>
<script>  

function Enternama(event){  // fungsi saat tombol enter  

	if(event.keyCode == 13 || event.which == 13){  

  	document.getElementById('alm_tamu').focus();  
	document.getElementById('instansi').focus();
	document.getElementById('nama').focus();
    document.getElementById('bagian').focus();
    document.getElementById('alasan').focus();  	
	}   

}  

</script> 
<script language="JavaScript">var ajaxRequest;
function getAjax() //fungsi untuk mengecek AJAX pada browser
{
	try{
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e){
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
			}
		catch (e){
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
				}
			catch (e){
				alert("Your browser broke!");
				return false;
			}
		}
	}
}

// pencarian nama tamu
function autoComplete() 
{
	getAjax();
	input = document.getElementById('nm_tamu').value;
	if (input == "")
	{
		document.getElementById("hasil").innerHTML = "";
	}else{
		ajaxRequest.open("GET","search.php?input="+input);
		ajaxRequest.onreadystatechange = function()
	{
	document.getElementById("hasil").innerHTML = ajaxRequest.responseText;
	}
		ajaxRequest.send(null);
	}
}
function autoInsert(nm_tamu, alm_tamu, instansi)
{
	document.getElementById("nm_tamu").value = nm_tamu;
	document.getElementById("alm_tamu").value = alm_tamu;
	document.getElementById("instansi").value = instansi;
	document.getElementById("hasil").innerHTML = "";
}


// pencarian nama yang akan ditemui

function autoComplete1()
{
	getAjax();
	input1 = document.getElementById('nama').value;
	if (input1 == "")
	{
		document.getElementById("hasil1").innerHTML = "";
	}else{
		ajaxRequest.open("GET","search1.php?input1="+input1);
		ajaxRequest.onreadystatechange = function()
	{
	document.getElementById("hasil1").innerHTML = ajaxRequest.responseText;
	}
		ajaxRequest.send(null);
	}
}
function autoInsert1(nama, bagian) 
{
	document.getElementById("nama").value = nama;
	document.getElementById("bagian").value = bagian;
	document.getElementById("hasil1").innerHTML = "";
}


// pencarian nopol yang akan ditemui

function autoComplete2()
{
	getAjax();
	input2 = document.getElementById('nopol').value;
	if (input2 == "")
	{
		document.getElementById("hasil2").innerHTML = "";
	}else{
		ajaxRequest.open("GET","search2.php?input2="+input2);
		ajaxRequest.onreadystatechange = function()
	{
	document.getElementById("hasil2").innerHTML = ajaxRequest.responseText;
	}
		ajaxRequest.send(null);
	}
}
function autoInsert2(nopol) 
{
	document.getElementById("nopol").value = nopol
	document.getElementById("hasil2").innerHTML = "";
}

</script>
<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">
<main>
  <div class="section row">
    <div class="col s12">
    <a class="waves-effect btn" style="background-color: #00b0ff;" href="index.php"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
    <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#bantuan"><i class="material-icons left">help</i>Bantuan</a>
    </div>
  </div>

  <div class="row">
    <form class="col s12" action="" method="post" onSubmit="return validasi(this)" id="form_data" >
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">view_comfy</i>
          <input class="validate" type="text"  name="nota" readonly="readonly" value="<?php echo $nota ?>">
		  <label>No. Tamu</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nm_tamu" id="nm_tamu" onkeyup="autoComplete();" autofocus onkeypress="Enternama(event)" autocomplete="off">
          <label for="nm_tamu">Nama Lengkap</label>
		</div>
      </div>
	  <div id='hasil'></div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
          <input class="materialize-textarea" type="text" name="alm_tamu" autocomplete="off" id="alm_tamu">
          <label for="alm_tamu">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">place</i>
		  <input class="materialize-textarea" type="text" name="instansi" autocomplete="off" id="instansi">
          <label for="instansi">Instansi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <input class="materialize-textarea" type="text" name="nopol" autocomplete="off"  id="nopol" onkeyup="autoComplete2();">
          <label>No.Pol.Kendaraan</label>
        </div>
      </div>
	  <div id='hasil2'></div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <label>Sifat</label>
		</div>
      </div><br />
	  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="with-gap" id="test1" type="radio" name="sifat" value="Kantor" checked /><label for="test1">Kantor</label>
          	<input class="with-gap" id="test2" type="radio" name="sifat" value="Lapangan" /><label for="test2">Lapangan</label>
		  	<input class="with-gap" id="test3" type="radio" name="sifat" value="Kasir" /><label for="test3">Kasir</label>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
		  <label>Janji</label>
		  </div>
      </div><br />
	  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="with-gap" name="janji" value="Ya" type="radio" id="test4" checked />
   		    <label for="test4">Ya</label>
    		<input class="with-gap" name="janji" value="Tidak" type="radio" id="test5" />
   		    <label for="test5">Tidak</label>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="nama" id="nama" onkeyup="autoComplete1();" autocomplete="off">
          <label>Menemui</label>
        </div>
      </div>
	  <div id='hasil1'></div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input class="validate" type="text" name="bagian" id="bagian" autocomplete="off">
          <label>Bagian</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="alasan" autocomplete="off"></textarea>
          <label>Alasan</label>
        </div>
      </div>      
	  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
		  <label>Jam Masuk :<div id="output"></div>
		  </label> <br />
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">today</i>
          <label>Tanggal : <br /> 
		  <?php echo date('d/m/Y'); ?></label>
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

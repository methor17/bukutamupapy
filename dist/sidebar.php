<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="../vendor/materializecss/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../vendor/materializecss/css/icon.css" media="screen,projection"/>
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../dist/css/style.css" media="screen,projection"/>  
  	 
	 
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <center>
          <img class="circle responsive-img z-depth-3" src="../dist/img/myAvatar.png" style="width: 70%; margin-top: 5%; margin-bottom: 5%;">
          <h5>Selamat datang!</h5>
	    </center><br>
		
        <li class="bold"><a href="index.php" class="waves-effect"><i class="material-icons">dashboard</i>Beranda</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect"><i class="material-icons">view_list</i>Pengisian Buku Tamu</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="input_bukutamu.php">Buku Tamu</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect"><i class="material-icons">file_download</i>Cetak Laporan</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="export_pdf.php">Laporan Hari Ini</a></li>
				  <li><a href="cetaklptgl.php">Laporan Per tanggal</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="#bantuan" class="waves-effect modal-trigger"><i class="material-icons">live_help</i>Bantuan</a></li>
        <li class="bold"><a href="../logout.php" class="waves-effect"><i class="material-icons">power_settings_new</i>Keluar</a></li>
      </ul>
    </header>

    <!-- Main -->
    <nav><div class="nav-wrapper"></div>
    </nav>
    <div id="bantuan" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Bantuan Aplikasi</h4>
        <p> 
		Aplikasi ini dibuat untuk membantu proses entri buku tamu di perusahaan PT.Papyrus Sakti Paper Mill.<br>
		<li>Untuk melakukan entri data tamu baru silakan pilih menu "Pengisian buku tamu" dan klik buku tamu  </li>
		<li>Isi semua data pada formulir buku tamu kemudian "simpan"</li>
		<li>Setelah simpan data kemudian akan diarahkan ke bagian cetak formulir tamu, klik "cetak"!
		</li>
		<li>Apabila selesai mencetak , klik "Beranda" untuk kembali ke halaman utama.</li>
		<li>Di halaman utama terdapat list tamu yang berkunjung ke PT, klik "check out" apabila tamu telah selesai berkunjung dan akan keluar! </li>     
		</p>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat ">Ya, Saya Mengerti</a>
      </div>
    </div>

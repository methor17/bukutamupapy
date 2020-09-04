<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('core/init.php');
require_once('../dist/sidebar.php');
$result = tampilData();
$result = search();

?>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <script type = "text/javascript"
         src="../vendor/materializecss/js/jquery-3.2.1.min.js"></script>           
      </script> 
    <title>Dasbor Admin - Tamu PT. Papyrus Sakti Paper Mill</title>
	<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">
    <script src="../vendor/materializecss/js/jquery-3.2.1.min.js"></script>
	<link type="text/css" rel="stylesheet" href="../vendor/materializecss/css/ui-lightness/jquery-ui-1.8.21.custom.css"/>
    <script language="JavaScript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });</script>
	<main>
      <div class="section row">
    <div class="col s12">
    <a class="waves-effect btn" style="background-color: #00b0ff;" href="index.php"><i class="material-icons left">list</i>Lihat Buku Tamu</a>
    <a class="waves-effect btn modal-trigger" style="background-color: #f44336; margin-left: 6px;" href="#bantuan"><i class="material-icons left">help</i>Bantuan</a>
    </div>
  </div>
      <div class = "row">
         <form class = "col s12" action="export_pdf2.php">
            <div class = "row">               
               <label>Dari</label>              
               <input type = "date" class = "datepicker" name="dari" />    
            </div>
			<div class = "row">               
               <label>Sampai</label>              
               <input type = "date" class = "datepicker" name="sampai"/>    
            </div>  
		<div class="row">
		<button class="btn waves-effect right" type="submit" name="cetak" style="background-color: #27AE60; margin-left: 6px;" >Cetak
          <i class="material-icons right">print</i>
        </button>
		</div>          
         </form>       
      </div>
   </main  

<?php
}else {
  header("location:/tamu_papyrus/index.php");
}
require_once('../dist/footer.php');
?>

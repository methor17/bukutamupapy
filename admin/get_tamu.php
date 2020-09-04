    <?php
    $nm_tamu = $_GET['nm_tamu'];
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("dbtamu_papyrus");
     
    $sql = "SELECT nm_tamu, alm_tamu, instansi FROM tb_buku WHERE hapus='Y' AND nm_tamu LIKE '$nm_tamu%'";
    $hs = mysql_query($sql);
    $json = array();
    while($rs = mysql_fetch_array($hs)){
    	$json[] = array(
    		'label' => $rs['nm_tamu'],
    		'value' => $rs['nm_tamu'],
    		'alm_tamu' => $rs['alm_tamu']
    	);
    }
    header("Content-Type: application/json");
    echo json_encode($json);
	?>
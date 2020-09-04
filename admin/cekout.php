<?php
require_once('core/init.php');
if(isset($_GET['id'])){
if(editData($_GET['id'])){
    header('location: index.php');
  }else {
    echo "Data Gagal Di cek out";
  }
}
?>

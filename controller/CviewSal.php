<?php
require "Model/accueil.php";

if(!isset($_GET['id_s'] )){
    header('Location: ' . BASE_URL . '/accueil');
}

  
$id_s = (int)$_GET['id_s']  ;  
$res2 = viewsal($id_s);
$data = $res2->fetch() ;

require "view/viewSal.php";
?>

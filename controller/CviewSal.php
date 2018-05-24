<?php


if(isset($_GET['id_f'] )){
    header('Location: ' . BASE_URL . '/accueil');
}

   
$id_l = (int)$_GET['id_l']  ; 
$id_s = (int)$_GET['id_f']  ;  



require "view/viewSal.php";
?>

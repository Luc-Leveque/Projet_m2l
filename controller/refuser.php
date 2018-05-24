<?php

require "Model/formation.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 1 ){
    header('Location: ' . BASE_URL . '/accueil');
}

if(!isset($_GET['id_s'])){
    header('Location: ' . BASE_URL . '/accueil');
}

if(!isset($_GET['id_f'])){
    header('Location: ' . BASE_URL . '/accueil');
}



$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_GET['id_s']  ; 
$res = infosal($id_s);


$cc= (int)$_GET['cc'];
$cc= (int)$res['credit']+$cc ;

$cd= (int)$_GET['cd'];
$cd= (int)$res['nbj']+$cd ;


refuserdemande($id_f,$id_s);
coutcredit($id_s,$cc);
coutdurée($id_s,$cd);


header('Location: ' . BASE_URL . '/Demandeformation');

?>
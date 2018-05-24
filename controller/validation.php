<?php

require "Model/formation.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 1 ){
    header('Location: ' . BASE_URL . '/accueil');
}

if(isset($_GET['id_s'])){
    header('Location: ' . BASE_URL . '/accueil');
}

if(isset($_GET['id_f'])){
    header('Location: ' . BASE_URL . '/accueil');
}


$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_GET['id_s']  ; 

validerdemande($id_f,$id_s);
coutcredit($id_f);
coutdurée($id_f);

header('Location: ' . BASE_URL . '/Demandeformation');

?>


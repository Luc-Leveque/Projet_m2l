<?php


require "Model/formation.php";


if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 2){
    header('Location: ' . BASE_URL . '/accueil');
}

if(!isset($_GET['id_a'])){
    header('Location: ' . BASE_URL . '/accueil');
}
if(!isset($_GET['id_f'])){
    header('Location: ' . BASE_URL . '/accueil');
}


$id_f = (int)$_GET['id_f']  ; 
$id_a = (int)$_GET['id_a']  ; 


suppform($id_f) ; 
suppadd($id_a) ;

header('Location: ' . BASE_URL . '/gestionformation');

?>
<?php


require "Model/authentification.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 2){
    header('Location: ' . BASE_URL . '/accueil');
}

if(!isset($_GET['id_a'])){
    header('Location: ' . BASE_URL . '/accueil');
}
if(!isset($_GET['id_s'])){
    header('Location: ' . BASE_URL . '/accueil');
}


$id_s = (int)$_GET['id_s']  ; 
$id_a = (int)$_GET['id_a']  ; 


supp($id_s) ; 
suppadd($id_a) ;

header('Location: ' . BASE_URL . '/gestionsalarie');

?>

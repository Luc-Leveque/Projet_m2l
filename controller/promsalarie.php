<?php

require "Model/chef.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 2 ){
    header('Location: ' . BASE_URL . '/accueil');
}

if(!isset($_GET['id_s'])){
    header('Location: ' . BASE_URL . '/accueil');
}

$id_s = (int)$_GET['id_s']  ; 

promo($id_s);

header('Location: ' . BASE_URL . '/gestionsalarie');
?>
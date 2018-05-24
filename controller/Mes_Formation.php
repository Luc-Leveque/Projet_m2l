<?php

require "Model/formation.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] == 2 ){
    header('Location: ' . BASE_URL . '/accueil');
}

$id_s = $_SESSION['id'] ;

$res = mes_form($id_s);

require "view/Mes_Formation.php";
?>

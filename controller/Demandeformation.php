<?php

require "Model/formation.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 1){
    header('Location: ' . BASE_URL . '/accueil');
}

$id_u = $_SESSION['id'];


$res = demandeencours($id_u);

$res2 = demandevalider($id_u);

$res3 = demanderefuser($id_u);

require "view/Demandeformation.php";
?>


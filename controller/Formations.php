<?php

require "Model/formation.php";

$res = all_form();
if(isset($_SESSION['erreur']){}
var_dump($_SESSION['erreur'])
if(isset($_SESSION['erreur']) && $_SESSION['erreur'] == 1){
    $_SESSION['erreur'] = 0 ;
    
}

require "view/Formations.php";
?>


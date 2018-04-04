<?php

require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s = $_SESSION['id'];

if($_SESSION['lvl'] == 0){$etat = 0;}
if($_SESSION['lvl'] == 1 ){$etat = 1;}


if(verifdejademande($id_f,$id_s)){
    
}
else{demande($id_s,$id_f,$etat);}

header('Location: ' . BASE_URL . '/Formations');

?>


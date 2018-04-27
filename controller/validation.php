<?php

require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_GET['id_s']  ; 

validerdemande($id_f,$id_s);
coutcredit($id_f);
coutdurée($id_f);

header('Location: ' . BASE_URL . '/Demandeformation');

?>


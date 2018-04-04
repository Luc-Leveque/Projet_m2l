<?php

require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_GET['id_s']  ; 

validerdemande($id_f,$id_s);

header('Location: ' . BASE_URL . '/Formations');

?>


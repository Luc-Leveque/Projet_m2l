<?php


require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_a = (int)$_GET['id_a']  ; 


suppform($id_f) ; 
suppadd($id_a) ;

header('Location: ' . BASE_URL . '/gestionformation');

?>
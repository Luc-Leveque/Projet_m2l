<?php


require "Model/authentification.php";

$id_f = (int)$_GET['id_f']  ; 
$id_a = (int)$_GET['id_a']  ; 


suppform($id_f) ; 
suppadd($id_a) ;

header('Location:index.php?page=gestionformation');

?>
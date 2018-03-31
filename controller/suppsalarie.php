<?php


require "Model/authentification.php";

$id_s = (int)$_GET['id_s']  ; 
$id_a = (int)$_GET['id_a']  ; 


supp($id_s) ; 
suppadd($id_a) ;

header('Location:index.php?page=gestionslarie');

?>

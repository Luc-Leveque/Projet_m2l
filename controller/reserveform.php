<?php


require "Model/chef.php";

$id_s = (int)$_GET['id_s']  ; 
$id_f = (int)$_GET['id_f']  ; 
$nbr = (int)$_GET['nbr']  ; 
$ct = (int)$_GET['ct']  ; 



reserverform($id_s , $id_f) ; 
majcreditjour($nbr,$ct,$_SESSION['id_s']);


header('Location:index.php?page=partiechef');

?>
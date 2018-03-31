<?php

//$id_l = (int)$_GET['id_l']  ; 
//$id_f = (int)$_GET['id_f']  ; 

$id_f = 9;

$req = "SELECT * FROM  formation f , adresse a , prestataire p , type_formation t where id_f = $id_f  and a.id_a=f.id_a and p.id_p=f.id_p and t.id_t=f.id_t";
$requete = $bdd->query($req);
$data = $requete->fetch() ;

require "view/viewForm.php";
?>
<?php
require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s =(int)$_SESSION['id'];

$res2 = comm($id_f);

if(isset($_POST['poster'])){
    $etat = 0 ; 
    
    $comm = htmlentities($_POST['comm']);
    
    if(empty($comm)){$etat = 1 ;}
    
    if($etat == 0){
        poster($id_s,$id_f,$comm);
        header('Location: ' . BASE_URL . '/Cviewform/'.$id_f);
    }
}

$req = "SELECT * FROM  formation f , adresse a , prestataire p , type_formation t where id_f = $id_f  and a.id_a=f.id_a and p.id_p=f.id_p and t.id_t=f.id_t";
$requete = $bdd->query($req);
$data = $requete->fetch() ;


require "view/viewForm.php";
?>
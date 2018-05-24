<?php

require "Model/formation.php";

if(isset($_GET['id_f'] )){
    header('Location: ' . BASE_URL . '/accueil');
}


$id_f = (int)$_GET['id_f']  ; 
$id_s = $_SESSION['id'];
$etat = 0 ;

if(isset($_SESSION['lvl']) and $_SESSION['lvl']==1){
    $etat = 1 ;
}

if(isset($_GET['cc'])){
   $cc= (int)$_GET['cc'];
   $cc= (int)$_SESSION['credit']-$cc ;
    
    if($cc<0){
        $_SESSION['erreur'] = "Vous n'avez pas assez de credit" ;
        header('Location: ' . BASE_URL . '/Formations');
    }
}
if(isset($_GET['cd'])){
    $cd= (int)$_GET['cd'];
    $cd= (int)$_SESSION['nbj']-$cd ;
    if($cd<0){
        $_SESSION['erreur'] = "Vous n'avez plus assez de nombre de jour de formations" ;
        header('Location: ' . BASE_URL . '/Formations');
    }  
}

if(verifdejademande($id_f,$id_s)){
    $_SESSION['erreur'] = "Vous avez déjà postuler a cette formation" ;
}
else{
    demande($id_s,$id_f,$etat);
    coutcredit($id_s,$cc);
    coutdurée($id_s,$cd);
}
header('Location: ' . BASE_URL . '/Formations');

?>


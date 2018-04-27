<?php

require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s = $_SESSION['id'];

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


if($_SESSION['lvl'] == 0){$etat = 0;}
if($_SESSION['lvl'] == 1 ){$etat = 1;}

if($etat == 1){
    //coutcredit($id_f,$cc);
    //coutdurée($id_f,);
}

if(verifdejademande($id_f,$id_s)){
    $_SESSION['erreur'] = "Vous avez déjà postuler a cette formation" ;
}
else{demande($id_s,$id_f,$etat);}

header('Location: ' . BASE_URL . '/Formations');

?>


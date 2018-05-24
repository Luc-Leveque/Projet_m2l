<?php
require "Model/formation.php";

if(!isset($_GET['id_f'])){
   header('Location: ' . BASE_URL . '/accueil');
}

$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_SESSION['id'];

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

$req = viewform($id_f);
$data = $req->fetch() ;


require "view/viewForm.php";
?>
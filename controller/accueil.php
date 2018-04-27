<?php

require "Model/article.php";

$recherche=0;

if(isset($_POST['submit'])){
    
    $etat=0;
    $rch = htmlentities($_POST['recherche']) ;
    
    if(empty($rch)){$etat=1;}
    
    if($etat==0){
        $res=rechsal($rch);
        $res1=rechadd($rch);
        $res2=rechform($rch);
        $res3=rechdate($rch);
        $recherche = 1 ;

    }
}


require "view/accueil.php";
?>

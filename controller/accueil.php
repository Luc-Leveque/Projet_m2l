<?php

require "Model/accueil.php";

$res = date_formations() ;

while($req = $res->fetch())
{
    $date = strtotime($req['date_deb']);
    $date += $req['nbr_jour'] ;
    $date_now = strtotime('now');
    
    if($date_now - $date > 0 ){
        maj_form($req['id_f']);   
    }
}


$recherche=0;

if(isset($_POST['submit'])){
    
    $etat=0;
    $rch = htmlentities($_POST['recherche']) ;
    
    if(empty($rch)){$etat=1;}
    
    if($etat==0){
        $res  = rechsal($rch);
        $res1 = rechadd($rch);
        $res2 = rechform($rch);
        $res3 = rechdate($rch);
        $recherche = 1 ;

    }
}


require "view/accueil.php";
?>

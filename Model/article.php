<?php


function get_last_formation($deb= 0 , $fin = 5){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT * FROM formation LIMIT :deb ,:fin");
    $requete ->bindValue(":deb",$deb,PDO::PARAM_INT);
    $requete ->bindValue(":fin",$fin,PDO::PARAM_INT);
    $requete->execute();
    return $requete->fetchAll();
}


function displayArticle($id){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT * FROM articles Where id = ;id");
    $requete ->bindValue(":id",$deb,PDO::PARAM_INT);
    $requete->execute();
    return $requete->fetchAll();
}


function rechsal($rch){
        
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM salarié  where nom_s LIKE '%$rch%' ");
    $req->execute();
    return($req);
    
}
function rechadd($rch){
        
    global $bdd;

    $req2 = $bdd->prepare("SELECT * FROM adresse where adresse LIKE '%$rch%' ");
    $req2->execute();
    return($req2);
    
}
function rechform($rch){
        
    global $bdd;

    $req3 = $bdd->prepare("SELECT * FROM formation where Titre LIKE '%$rch%' ");
    $req3->execute();
    return($req3);
    
}
function rechdate($rch){
        
    global $bdd;

    $req4 = $bdd->prepare("SELECT * FROM formation where date_deb LIKE '%$rch%' ");
    $req4->execute();
    return($req4);
    
}
?>

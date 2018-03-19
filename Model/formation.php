<?php

function ajoutform($titre , $contenu , $prerequis , $date_deb , $duree, $credit,$type,$id_a,$id_p){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO formation(titre,contenu,prerequis,date_deb,duree,credit,id_t,id_a,id_p)  Values(:titre ,:contenu , :prerequis , :date_deb,:duree,:credit,:id_t,:id_a,:id_p) ");
    $requete ->bindValue(":titre",$titre,PDO::PARAM_STR);
    $requete ->bindValue(":contenu",$contenu,PDO::PARAM_STR);
    $requete ->bindValue(":prerequis",$prerequis,PDO::PARAM_STR);
    $requete ->bindValue(":date_deb",$date_deb,PDO::PARAM_STR);
    $requete ->bindValue(":duree",$duree,PDO::PARAM_INT);
    $requete ->bindValue(":credit",$credit,PDO::PARAM_INT);
    $requete ->bindValue(":id_t",$type,PDO::PARAM_INT);
    $requete ->bindValue(":id_a",$id_a,PDO::PARAM_INT);
    $requete ->bindValue(":id_p",$id_p,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}

function adresses($adresse , $ville , $cp ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO adresse(adresse,commune,cp)  Values(:adresse,:commune,:cp) ");
    $requete ->bindValue(":adresse",$adresse,PDO::PARAM_STR);
    $requete ->bindValue(":commune",$ville,PDO::PARAM_STR);
    $requete ->bindValue(":cp",$cp,PDO::PARAM_STR);
    $requete->execute();
    
    return $requete;
}

?>
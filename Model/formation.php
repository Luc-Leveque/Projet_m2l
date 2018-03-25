<?php

function ajoutform($titre , $contenu , $prerequis , $date_deb , $duree, $credit,$type,$id_a,$id_p){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO formation(Titre,contenu,prerequis,date_deb,nbr_jour,cout_credit,id_t,id_a,id_p)  Values(:Titre ,:contenu , :prerequis , :date_deb,:nbr_jour,:cout_credit,:id_t,:id_a,:id_p) ");
    $requete ->bindValue(":Titre",$titre,PDO::PARAM_STR);
    $requete ->bindValue(":contenu",$contenu,PDO::PARAM_STR);
    $requete ->bindValue(":prerequis",$prerequis,PDO::PARAM_STR);
    $requete ->bindValue(":date_deb",$date_deb,PDO::PARAM_STR);
    $requete ->bindValue(":nbr_jour",$duree,PDO::PARAM_INT);
    $requete ->bindValue(":cout_credit",$credit,PDO::PARAM_INT);
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

function presta($nom , $id_a ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO prestataire(nom_p , id_a )  Values(:nom_p, :id_a) ");
    $requete ->bindValue(":nom_p",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":id_a",$id_a,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}

function suppform($id_f){
    global $bdd ; 

        $req='DELETE FROM formation WHERE id_f= :id_f';
		$req = $bdd->prepare($req);
		$req = $req->execute(array(
		':id_f'=> $id_f
		));    
}

function suppadd($id_a){
    global $bdd ; 

        $req='DELETE FROM adresse WHERE id_a= :id_a';
		$req = $bdd->prepare($req);
		$req = $req->execute(array(
		':id_a'=> $id_a
		));   
}

function modform($id_s , $nom ,$prenom ,$email) {
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE formation SET nom_s=:nom_s, prenom_s=:prenom_s, email=:email WHERE id_s = :id_s");
    $requete ->bindValue(":nom_s",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":prenom_s",$prenom,PDO::PARAM_STR);
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
   
}

?>
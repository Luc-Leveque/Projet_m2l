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
function demande($id_s,$id_f,$etat){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO participer(id_s,id_f,etat)  Values(:id_s,:id_f,:etat) ");
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete ->bindValue(":id_f",$id_f,PDO::PARAM_INT);
    $requete ->bindValue(":etat",$etat,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
    
}

function verifdejademande($id_f,$id_s){
    global $bdd;
	$requete = $bdd->prepare("SELECT * FROM participer WHERE id_f=:id_f and id_s= :id_s ");
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete ->bindValue(":id_f",$id_f,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete->fetch();
}


function all_form()
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM  formation f , adresse a,prestataire p , type_formation t where f.id_a=a.id_a and p.id_p=f.id_p and f.id_t=t.id_t ");
    $req->execute();
    return($req);
}

function mes_form($id_s)
{
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM  formation f ,salarié s , participer pa , prestataire p ,type_formation t ,adresse a where  pa.id_s=s.id_s and f.id_a=a.id_a and  f.id_t=t.id_t and  f.id_f=pa.id_f and  p.id_p=f.id_p  and s.id_s= $id_s  ");
    $req->execute();
    return($req);
}

function demandeencours($id_u){
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM  formation f ,salarié s , participer pa , prestataire p  where  pa.id_s=s.id_s and f.id_f=pa.id_f and  p.id_p=f.id_p and etat = 0 and id_c= $id_u  ");
    $req->execute();
    return($req);
}

function demandevalider($id_u){
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM  formation f ,salarié s , participer pa , prestataire p  where  pa.id_s=s.id_s and f.id_f=pa.id_f and  p.id_p=f.id_p and etat = 2 and id_c= $id_u  ");
    $req->execute();
    return($req);
}

function demanderefuser($id_u){
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM  formation f ,salarié s , participer pa , prestataire p  where  pa.id_s=s.id_s and f.id_f=pa.id_f and  p.id_p=f.id_p and etat = 1 and id_c= $id_u  ");
    $req->execute();
    return($req);
}

function comm($id_f){
        
    global $bdd;

    $req2 = $bdd->prepare("SELECT * FROM commentaire c,salarié s where s.id_s=c.id_u and id_f=$id_f  ");
    $req2->execute();
    return($req2);
    
}

function validerdemande($id_f,$id_s){
    
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE participer SET etat = 2 WHERE id_s = :id_s and id_f=:id_f");
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete ->bindValue(":id_f",$id_f,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
    
}

function refuserdemande($id_f,$id_s){
    
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE participer SET etat = 1 WHERE id_s = :id_s and id_f=:id_f");
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete ->bindValue(":id_f",$id_f,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
    
}



function poster($id_s,$id_f,$comm){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO commentaire(id_u,id_f,libelle )  Values(:id_u,:id_f,:libelle) ");
    $requete ->bindValue(":libelle",$comm,PDO::PARAM_STR);
    $requete ->bindValue(":id_u",$id_s,PDO::PARAM_INT);
    $requete ->bindValue(":id_f",$id_f,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}


?>
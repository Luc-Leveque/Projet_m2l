<?php

function inscriptionsal($nom , $prenom , $mdp , $email , $id_a, $id_c ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO salarié(nom_s,prenom_s,email,mdp,id_a,id_c)  Values(:nom ,:prenom , :email , :mdp,:id_a,:id_c) ");
    $requete ->bindValue(":nom",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":prenom",$prenom,PDO::PARAM_STR);
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete ->bindValue(":id_a",$id_a,PDO::PARAM_INT);
    $requete ->bindValue(":id_c",$id_c,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}

function inscription($nom , $prenom , $mdp , $email , $id_a, $estchef ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO salarié(nom_s,prenom_s,email,mdp,id_a,estchef)  Values(:nom ,:prenom , :email , :mdp,:id_a,:estchef) ");
    $requete ->bindValue(":nom",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":prenom",$prenom,PDO::PARAM_STR);
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete ->bindValue(":id_a",$id_a,PDO::PARAM_INT);$requete ->bindValue(":estchef",$estchef,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}

function adresses($adresse , $ville , $cp ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO adresse(adresse,commune , cp)  Values(:adresse,:commune , :cp) ");
    $requete ->bindValue(":adresse",$adresse,PDO::PARAM_STR);
    $requete ->bindValue(":commune",$ville,PDO::PARAM_STR);
    $requete ->bindValue(":cp",$cp,PDO::PARAM_STR);
    $requete->execute();
    
    return $requete;
}

function supp($id_s){
    global $bdd ; 

        $req='DELETE FROM salarié WHERE id_s= :id_s';
		$req = $bdd->prepare($req);
		$req = $req->execute(array(
		':id_s'=> $id_s
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

function modsa($id_s , $nom , $prenom , $email){
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE salarié SET nom_s=:nom_s, prenom_s=:prenom_s, email=:email WHERE id_s = :id_s");
    $requete ->bindValue(":nom_s",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":prenom_s",$prenom,PDO::PARAM_STR);
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}

function modmdp($id_s,$mdp){
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE salarié SET mdp= :mdp  WHERE id_s = :id_s");
    $requete ->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
}


function login($email,$mdp){
    global $bdd;
	$requete = $bdd->prepare("SELECT * FROM salarié WHERE email =:email AND mdp =:mdp");
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    $requete->execute();
    
    return $requete->fetch();
}

function verifemail($email){
    global $bdd;
	$requete = $bdd->prepare("SELECT * FROM salarié WHERE email =:email");
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->execute();
    
    return $requete->fetch();
}


function rememberMe($id_u)
    {
        global $bdd;
        $requete = $bdd->prepare("SELECT * FROM users WHERE id_u =:id_u");
        $requete->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $requete->execute();
        
        return $requete->fetch();
    }
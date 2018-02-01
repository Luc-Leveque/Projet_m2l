<?php

function inscription($nom , $prenom , $mdp , $email , $tel, $date_de_naissance, $age, $permis, $adresse, $ville, $cd ){
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO users(nom,prenom,email,mdp,tel,date_de_naissance,age,permis,adresse,ville,cd)  Values(:nom ,:prenom , :email , :mdp , :tel, :date_de_naissance, :age, :permis, :adresse, :ville, :cd) ");
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete ->bindValue(":tel",$tel,PDO::PARAM_STR);
    $requete ->bindValue(":date_de_naissance",$date_de_naissance,PDO::PARAM_STR);
    $requete ->bindValue(":age",$age,PDO::PARAM_STR);
    $requete ->bindValue(":permis",$permis,PDO::PARAM_STR);
    $requete ->bindValue(":adresse",$adresse,PDO::PARAM_STR);
    $requete ->bindValue(":ville",$ville,PDO::PARAM_STR);
    $requete ->bindValue(":cd",$cd,PDO::PARAM_STR);
    $requete->execute();
    
    return $requete;
}

function login($email,$mdp){
    global $bdd;
	$requete = $bdd->prepare("SELECT * FROM users WHERE email =:email AND mdp =:mdp");
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
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

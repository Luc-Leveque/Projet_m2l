<?php

require "Model/authentification.php";

if(isset($_POST['submit'])){
        if(isset($_POST['nom']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['nom'])){
            
        }
        if(isset($_POST['prenom']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['prenom'])){
            
        }
        if(isset($_POST['mdp']) && preg_match("#^([A-Za-z0-9]{1,})$#",$_POST['mdp'])){
                    
        }
        if(isset($_POST['email'])){
            
        }
        if(isset($_POST['tel']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['nom'])){
            //modifier preg match
        }
         if(isset($_POST['date_de_naissance']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['nom'])){
            //modifier preg match
        }
         if(isset($_POST['adresse']) && preg_match("#^([A-Za-z0-9]{1,})$#",$_POST['adresse'])){
            
        }
         if(isset($_POST['age']) && preg_match("#^([0-9]{1,3})$#",$_POST['age'])){
            
        }
         if(isset($_POST['ville']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['ville'])){
            
        }
         if(isset($_POST['cd']) && preg_match("#^([0-9]{5}|2A|2B)$#",$_POST['cd'])){
            
        }
         if(isset($_POST['permis'])){
            
        }
    
                
                   $nom=htmlspecialchars($_POST['nom']);
                   $login=htmlspecialchars($_POST['login']);
                   $prenom=htmlspecialchars($_POST['prenom']);
                   $email=htmlspecialchars($_POST['email']);
                   $mdp=sha1(($_POST['mdp']));
                    
                    inscription($nom,$prenom,$mdp,$email,$login);
}


require "view/inscription.php";





?>
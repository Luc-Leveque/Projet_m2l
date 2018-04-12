<?php

require "Model/authentification.php";
require "Model/chef.php";

$res = all_sal();

if(isset($_POST['submit'])) 
    {
        $erreur="";
        $email = htmlentities($_POST['email']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $add = htmlentities($_POST['add']);
        $ville = htmlentities($_POST['ville']);
        $cp = htmlentities($_POST['cp']);
        $mdp = sha1(htmlentities($_POST['mdp']));
        
        $etat = 0 ; 
        
        if( !preg_match("#^([A-Za-z -']{1,})$#",$nom)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du nom incorect </div>";
        }
        
        if(!preg_match("#^([A-Za-z -'_]{1,})$#",$prenom)){
           $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du prenom incorect </div>";
        }
        
        if(empty($email)){
           $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Le champs email est vide </div>";
        }
        
        if(empty($add)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs adresse est vide </div>";
        } 
        if(empty($ville)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs ville est vide </div>";
        } 
        if(empty($cp)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs codepostal est vide </div>";
        }
        if(empty($mdp)){
           $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Le champs mot de passe est vide </div>";
        }
        
        if(verifemail($email)){
            $etat = 1; 
            $erreur .= "<div class='alert alert-danger' >Cette adresse email est déjà utilisé </div>";
        }
        
        if($etat == 0 ){
            if($_POST["hierarchie"] == 0 ){
                $id_c = htmlentities($_POST['chef']);
                adresses($add,$ville,$cp) ;
                $id_a = $bdd->lastInsertId();
                inscriptionsal($nom ,$prenom , $mdp ,$email,$id_a,$id_c);
                header('Location: ' . BASE_URL . '/gestionsalarie');
            }
            else{
                $estchef = 1 ; 
                adresses($add,$ville,$cp) ;
                $id_a = $bdd->lastInsertId();
                inscription($nom ,$prenom , $mdp ,$email,$id_a,$estchef);
                header('Location: ' . BASE_URL . '/gestionsalarie');
            }
        }
    }


require "view/gestionsalarie.php";
?>

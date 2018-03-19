<?php

require "Model/formation.php";

    $_SESSION['connecte']=true;
    $_SESSION['id_s']= 1;
    $_SESSION['estchef']= 1;
    $id_chef = $_SESSION['id_s'];


if(isset($_POST['submit'])) 
    {
        $erreur="";
        $titre = htmlentities($_POST['titre']);
        $contenu = htmlentities($_POST['contenu']);
        $prerequis = htmlentities($_POST['prerequis']);
        $date_deb = htmlentities($_POST['date_deb']);
        $duree = htmlentities($_POST['duree']);
        $credit = htmlentities($_POST['credit']);
        $add = htmlentities($_POST['add']);
        $ville = htmlentities($_POST['ville']);
        $cp = htmlentities($_POST['cp']);
        $type = htmlentities($_POST['type_form']);   
        $nom = htmlentities($_POST['nom_p']);
        $prenom = htmlentities($_POST['prenom_p']);
        
        $etat = 0 ; 
        
        if( !preg_match("#^([A-Za-z0-9 -']{1,})$#",$titre)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du Titre incorect </div>";
        }
        
        if(!preg_match("#^([0-9]{1,})$#",$duree)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format de la durée est incorect </div>";
        } 
        
        if( !preg_match("#^([A-Za-z -']{1,})$#",$nom)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du nom est incorect</div>";
        }
        
        if(!preg_match("#^([A-Za-z -']{1,})$#",$prenom)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du prenom est incorect </div>";
        } 
        
        if(!preg_match("#^([0-9]{1,5})$#",$credit)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du champs credit est incorect </div>";
        }
        
        if(empty($contenu)){
           $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Le champs contenu est vide </div>";
        }   
        if(empty($prerequis)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Le champs prerequis est vide </div>";
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
        
        if($etat == 0 ){
            adresses($add,$ville,$cp) ;
            $id_a = $bdd->lastInsertId();
            presta($nom,$prenom)
            inscriptionsal($nom ,$prenom , $mdp ,$email,$id_a,$id_c);

        }
    }


require "view/gestionformation.php";
?>

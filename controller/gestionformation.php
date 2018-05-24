<?php

require "Model/formation.php";

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] != 2){
    header('Location: ' . BASE_URL . '/accueil');
}


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
        $type = htmlentities($_POST['type']);  
        $nom = htmlentities($_POST['nom_p']);
        $add_p = htmlentities($_POST['add_p']);
        $ville_p = htmlentities($_POST['ville_p']);
        $cp_p = htmlentities($_POST['cp_p']);
        $id_p = htmlentities($_POST['presta']);
        
        $etat = 0 ; 
        $inspresta = 0 ; 
      
        
        if($_POST['etat'] == 1){
            
            $inspresta = 1 ;
            
            if( !preg_match("#^([A-Za-z -']{1,})$#",$nom)){
                $etat = 1 ;
                $erreur .= "<div class='alert alert-danger' >Format du nom est incorect</div>";
            }
            
            if(empty($add_p)){
                $etat = 1 ; 
                $erreur .= "<div class='alert alert-danger' >Le champs adresse du prestataire est vide </div>";
            } 
            if(empty($ville_p)){
                $etat = 1 ; 
                $erreur .= "<div class='alert alert-danger' >Le champs ville du prestataire est vide </div>";
            } 
            if(empty($cp_p)){
                $etat = 1 ; 
                $erreur .= "<div class='alert alert-danger' >Le champs code postal du prestataire est vide </div>";
            }
            
        }
        
        if( !preg_match("#^([A-Za-z0-9 -']{1,})$#",$titre)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du Titre incorect </div>";
        }
        
        if(!preg_match("#^([0-9]{1,})$#",$duree)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format de la durée est incorect </div>";
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
        
        if(empty($date_deb)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Le champs prerequis est vide </div>";
        }  
        
        if(empty($add)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs adresse de la formation est vide </div>";
        } 
        if(empty($ville)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs ville de la formation est vide </div>";
        } 
        if(empty($cp)){
           $etat = 1 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs code postal de la formation est vide </div>";
        }
        
        if($etat == 0 ){
            if($inspresta == 1 ){
                
                adresses($add_p,$ville_p,$cp_p) ;
                $id_a = $bdd->lastInsertId();
                presta($nom, $id_a) ;
                $id_p = $bdd->lastInsertId();
                adresses($add,$ville,$cp) ;
                $id_a = $bdd->lastInsertId();
                ajoutform($titre , $contenu , $prerequis , $date_deb , $duree, $credit,$type,$id_a,$id_p);

        }
        else{
            adresses($add,$ville,$cp) ;
            $id_a = $bdd->lastInsertId();
            ajoutform($titre , $contenu , $prerequis , $date_deb , $duree, $credit,$type,$id_a,$id_p);
        }

        
    }
}


require "view/gestionformation.php";
?>

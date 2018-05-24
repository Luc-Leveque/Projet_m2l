<?php
require "Model/formation.php";

if(!isset($_GET['id_f'])){
    header('Location: ' . BASE_URL . '/accueil');
}



$id_f = (int)$_GET['id_f'] ;

    if(isset($_POST['submit'])) 
    {
        
        $etat = 0 ;
        $erreur="";
        $inspresta = 0 ;
        
        $email = htmlentities($_POST['email']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);

        
        
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
        
        if(!preg_match("#^([A-Za-z- _']{1,})$#",$nom)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du nom incorect </div>";
        }
        if(!preg_match("#^([A-Za-z -_']{1,})$#",$prenom)){
            $etat = 1 ;
            $erreur .= "<div class='alert alert-danger' >Format du prenom incorect </div>";
        }
         
        
        if($etat==0){
            if($inspresta == 1){
                adresses($add_p,$ville_p,$cp_p) ;
                $id_a = $bdd->lastInsertId();
                presta($nom, $id_a) ;
                $id_p = $bdd->lastInsertId();
                modform($id_s , $nom ,$prenom ,$email);
            }
            else{
                modform($id_s , $nom ,$prenom ,$email);
            }
        }
        header('Location: ' . BASE_URL . '/gestionformation');
    }
?>
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>
<?php
require "view/modform.php";
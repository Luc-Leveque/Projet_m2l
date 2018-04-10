<?php
require "Model/authentification.php";

if(isset($_GET['id_s'])){
    $id_s = (int)$_GET['id_s'] ;
}
else{$id_s = $_SESSION['id'];}


    if(isset($_POST['submit'])) 
    {
        $etatmdp = 0 ;
        $etat = 1 ;
        $erreur="";
        
        $email = htmlentities($_POST['email']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $ville = htmlentities($_POST['ville']);
        $cp = htmlentities($_POST['cp']);
        $add = htmlentities($_POST['add']);
        $newmdp = sha1(htmlentities($_POST['newmdp']));
        $confmdp = sha1(htmlentities($_POST['confmdp']));
        
        if(!preg_match("#^([A-Za-z- _']{1,})$#",$nom)){
            $etat = 0 ;
            $erreur .= "<div class='alert alert-danger' >Format du nom incorect </div>";
        }
        if(!preg_match("#^([A-Za-z -_']{1,})$#",$prenom)){
            $etat = 0 ;
            $erreur .= "<div class='alert alert-danger' >Format du prenom incorect </div>";
        }
        
        if(empty($add)){
           $etat = 0 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs adresse est vide </div>";
        } 
        if(empty($ville)){
           $etat = 0 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs ville est vide </div>";
        } 
        if(empty($cp)){
           $etat = 0 ; 
            $erreur .= "<div class='alert alert-danger' >Le champs codepostal est vide </div>";
        }
            
        if(!empty($newmdp)  && !empty($confmdp)){
            if($newmdp == $confmdp){
                modmdp($id_s ,$newmdp);
                $etatmdp = 1 ; 
            }
            else{ $erreur .= "<div class='alert alert-danger' > Les mots de passes ne corespondent pas </div>"; }
        }
        if($etat==1){        
            modsa($id_s , $nom ,$prenom ,$email);
            modad($id_a , $add ,$ville ,$cp);
        }
        
        if(isset($_GET['id_s'])){
            header('Location: ' . BASE_URL . '/gestionsalarie');
        }
        else{header('Location: ' . BASE_URL . '/accueil');}
    }
?>
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>
<?php
require "view/modsalrie.php";
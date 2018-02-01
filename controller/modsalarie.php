<?php
require "Model/authentification.php";

$id_s = (int)$_GET['id_s'] ;

    if(isset($_POST['submit'])) 
    {
        $etatmdp = 0 ;
        $etat = 1 ;
        $erreur="";
        
        $email = htmlentities($_POST['email']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
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
            
        if(!empty($newmdp)  && !empty($confmdp)){
            if($newmdp == $confmdp){
                modmdp($id_s ,$newmdp);
                $etatmdp = 1 ; 
            }
            else{ $erreur .= "<div class='alert alert-danger' > Les mots de passes ne corespondent pas </div>"; }
        }
        if(empty($newmdp)  && empty($confmdp) && $etat==1){        
            modsa($id_s , $nom ,$prenom ,$email);
        }
        
        if($etatmdp == 1 && $etat==1){
            modsa($id_s , $nom ,$prenom ,$email);
        }
    }
?>
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>
<?php
require "view/modsalrie.php";
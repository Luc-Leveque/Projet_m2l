<?php


require "Model/authentification.php";



$emailsaisie= "";
$erreur = "";

	if(isset($_POST['submit'])) 
    {
        $email = htmlentities($_POST['email']);
        $mdp = htmlentities(sha1($_POST['mdp']));
        
        if($reponse = login($email,$mdp)){
            $_SESSION['connecte']=true;
            $_SESSION['id']= $reponse['id_s'];
            $_SESSION['nom']= $reponse['nom_s'];
            $_SESSION['prenom']= $reponse['prenom_s'];
            $_SESSION['email']= $reponse['email'];
            $_SESSION['credit']= $reponse['credit'];
            $_SESSION['nbj']= $reponse['nbj'];
            $_SESSION['lvl']= $reponse['estchef'];
            if(isset($_POST['remember']))
            {      
                setcookie('auth',$reponse['id_s']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
            }
            header('Location: ' . BASE_URL . '/accueil');
        }
        else
        {
        	$erreur = '<div class="alert alert-danger" >Mauvais identifiant</div>';
            $emailsaisie= $email;
            
        }
    }
   if(isset($_COOKIE['auth']))
    {
        $auth = $_COOKIE['auth'];
        $auth = explode('-----',$auth);
        $reponse = rememberMe($auth[0]);
        $key = sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);

        
        if($key == $auth[1])
        {
            $_SESSION['connecte']=true;
            $_SESSION['id']= $reponse['id_s'];
            $_SESSION['nom']= $reponse['nom_s'];
            $_SESSION['prenom']= $reponse['prenom_s'];
            $_SESSION['email']= $reponse['email'];
            $_SESSION['credit']= $reponse['credit'];
            $_SESSION['nbj']= $reponse['nbj'];
            $_SESSION['lvl']= $reponse['estchef'];
            
            setcookie('auth', $reponse['id_s']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
            
        header("location:".BASE_URL."/accueil");
        }
        else
        {
        setcookie('auth','',time()-3600,'/','localhost',false,true);
            
        }
    }

require "view/login.php";

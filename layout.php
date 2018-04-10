<!DOCTYPE html>

<?php
$page = $_SERVER['REQUEST_URI'];
$page = str_replace("/Projet_m2l/", "",$page);

if(isset($_SESSION['id'])){ 
        if(isset($_SESSION['lvl']) && $_SESSION['lvl']==0 ){
?>
<html lang="en">
<head>
  <title>Application M2l</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="<?= BASE_URL ;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= BASE_URL ;?>/css/style.css" />
<script src="<?= BASE_URL ;?>/js/jquery.js"></script>
<script src="<?= BASE_URL ;?>/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($page == "accueil"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/accueil">Accueil</a></li>
        <li <?php if($page == "Mes_Formation"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/Mes_Formation">Mes formations</a></li>
        <li <?php if($page == "Formations"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/Formations">Liste des formations</a></li>
        <li <?php if($page == "historique"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/historique">Historique</a></li>
        <li <?php if($page == "modsalarie"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/modsalarie">Modifier mon compte</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo BASE_URL; ?>/logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
 <?php }}?>
 <?php if(isset($_SESSION['id'])){ 
        if(isset($_SESSION['lvl']) && $_SESSION['lvl']==1 ){?>
<html lang="en">
<head>
  <title>Application M2l</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="<?= BASE_URL ;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= BASE_URL ;?>/css/style.css" />
<script src="<?= BASE_URL ;?>/js/jquery.js"></script>
<script src="<?= BASE_URL ;?>/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($page == "accueil"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/accueil">Accueil</a></li>
        <li <?php if($page == "Mes_Formation"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/Mes_Formation">Mes formations</a></li>
        <li <?php if($page == "Formations"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/Formations">Liste des formations</a></li>
        <li <?php if($page == "historique"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/historique">Historique</a></li>
        <li <?php if($page == "liste"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/liste">Liste des salarié sous ma responsabilité</a></li>
        <li <?php if($page == "Demande_formation"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/Demandeformation">Demande de formations</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo BASE_URL; ?>/logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
 <?php }}?>
 <?php if(isset($_SESSION['id'])){ 
        if(isset($_SESSION['lvl']) && $_SESSION['lvl']==2 ){?>
<html lang="en">
<head>
  <title>Application M2l</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="<?= BASE_URL ;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= BASE_URL ;?>/css/style.css" />
<script src="<?= BASE_URL ;?>/js/jquery.js"></script>
<script src="<?= BASE_URL ;?>/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($page == "gestionformation"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/gestionformation">Gerer les formations</a></li>
        <li <?php if($page == "gestionsalarie"){echo 'class="active"';} ?>><a href="<?php echo BASE_URL; ?>/gestionsalarie">Gerer les salariés</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo BASE_URL; ?>/logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
</nav>
 <?php }}?>
 
<?php if(!isset($_SESSION['id'])){ ?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion M2l</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="<?= BASE_URL ;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ;?>/css/style.css" />
    <script src="<?= BASE_URL ;?>/js/jquery.js"></script>
    <script src="<?= BASE_URL ;?>/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

 <?php }?>
    <?php  
    
      echo flash() ;  
      echo $content ; 
?>
</body>

</html>


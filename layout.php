<!DOCTYPE html>

<?php if(isset($_SESSION['id'])){ ?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo BASE_URL; ?>/accueil">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 <?php }?>
 
<?php if(!isset($_SESSION['id'])){ ?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ConnexionM2l</title>
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


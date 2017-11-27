<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hyperplanning_HPAL_Paris</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
                   <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                               <a class="navbar-brand" href="#"><img alt="alternative text" src="img/logo.jpeg" /></a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">hyperplanning_HPAL_Paris</a> </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo BASE_URL; ?>/messagerie">Messagerie </a></li>
                                    <li><a href="<?php echo BASE_URL; ?>/noter">Noter</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>/listeclasse">Liste classe </a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index?page=logout"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
            
    <?php    
      echo $content ; 
?>
</body>

</html>
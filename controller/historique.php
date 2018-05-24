<?php

    require"Model/formation.php";
    $titre = "Accueil";
    $res = historique($_SESSION['id']);
    require "View/historique.php";
?>

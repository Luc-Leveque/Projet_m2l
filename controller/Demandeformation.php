<?php

require "Model/formation.php";


$id_u = $_SESSION['id'];


$res = demandeencours($id_u);

$res2 = demandevalider($id_u);

$res3 = demanderefuser($id_u);

require "view/Demandeformation.php";
?>


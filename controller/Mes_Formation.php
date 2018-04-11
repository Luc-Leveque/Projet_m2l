<?php

require "Model/formation.php";

$id_s = $_SESSION['id'] ;

$res = mes_form($id_s);

require "view/Mes_Formation.php";
?>

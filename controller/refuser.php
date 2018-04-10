<?php

require "Model/formation.php";

$id_f = (int)$_GET['id_f']  ; 
$id_s = (int)$_GET['id_s']  ; 

refuserdemande($id_f,$id_s);

header('Location: ' . BASE_URL . '/Demandeformation');

?>
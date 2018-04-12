<?php

require "Model/chef.php";

$id_s = (int)$_GET['id_s']  ; 

promo($id_s);

header('Location: ' . BASE_URL . '/gestionsalarie');
?>
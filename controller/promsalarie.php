<?php

require "Model/authentification.php";

$id_u = $_SESSION['id'];




header('Location: ' . BASE_URL . '/gestionsalarie');
?>
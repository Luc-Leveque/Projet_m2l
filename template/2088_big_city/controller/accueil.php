<?php

require "Model/article.php";


$title = "Accueil";

if(isset($_GET['num_page'])){
    $num_page = $_GET['num_page']; 
    
    if($num_page == 1 ){
        $formations = get_last_formation(0,5); 
    }

    if($num_page == 2 ){
        $formations = get_last_formation(5,10); 
    }

    if($num_page == 3 ){
        $formations = get_last_formation(10,15); 
    }

    if($num_page == 4 ){
        $formations = get_last_formation(15,20); 
    }

    if($num_page == 5 ){
        $formations = get_last_formation(20,25); 
    }
}
   else{
    $formations = get_last_formation(0,5);
}
require "view/accueil.php";
?>

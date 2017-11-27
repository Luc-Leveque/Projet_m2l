<?php 

session_start();//connexion bdd	

require "model/connect.php";
require "core/function.php";


define('WEBROOT',dirname(__FILE__));
define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));
define('ROOT',dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');



if(!isset($_GET['page']) || $_GET['page'] =="")
            $page = "accueil";
        else
        {
            if(!file_exists("controller/".$_GET['page'].".php"))
            {
                $page = 404;
            }
            else
                $page = $_GET['page'];
        }
    
    
ob_start();

include "controller/".$page.".php";
$content = ob_get_contents();
ob_end_clean();

require "layout.php";


?>
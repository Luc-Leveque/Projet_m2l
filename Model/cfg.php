<?php
	try
	{
		$bdd = new PDO("mysql:host=172.16.0.3;dbname=lleveque;charset=utf8","lleveque","1515");
	
	}
    catch(Exeption $e)
	{
		die("erreur de connection");
	}

?>
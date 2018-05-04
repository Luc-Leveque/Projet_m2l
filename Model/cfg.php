<?php
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","lleveque","1515");
	
	}
    catch(Exeption $e)
	{
		die("erreur de connection");
	}

?>
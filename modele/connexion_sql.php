<?php
	try
	{
		$bdd = new PDO("mysql:host=localhost:8889; dbname=Twizyx", "root", "root");
	}
	catch(Exception $e)
	{
		die("Erreur : " . $e->getmessage());
	}
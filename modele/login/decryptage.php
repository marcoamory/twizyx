<?php
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	include("cryptage.php");
	try
	{
		$bdd = new PDO("mysql:host=localhost:8889; dbname=TwizyX", "root", "root");
	}
	catch (Exception $e)
	{
		die("Erreur: " . $e->getmessage());
	}

	$req = $bdd->query("SELECT email, motDePasse FROM utilisateurs");
	
	while($resultat = $req->fetch())
	{
		$motDePasse = decrypt($resultat['motDePasse'], $cleDeCryptage);
		$email = $resultat['email'];
		
		echo $email . " -> " . $motDePasse ."<br/>";
	}
	
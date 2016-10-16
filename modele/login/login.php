<?php
	
	function connexion($connexionEmail, $motDePasse)
	{
		include("../../modele/connexion_sql.php");
			
		$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE email = :email AND motDePasse = :motDePasse'); //Recherche du pseudo et mdp dans la bdd
		$req->execute(array('email'=> $connexionEmail, 'motDePasse' => $motDePasse));
		
		$resultat = $req->fetch();
		$req->closeCursor();
		
		return $resultat;
	}
	
	function updateDateConnexion($id)
	{
		try
		{
			$bdd = new PDO("mysql:host=localhost:8889; dbname=Twizyx", "root", "root");
		}
		catch(Exception $e)
		{
			die("Erreur : " . $e->getmessage());
		}
		
		$req = $bdd->prepare("UPDATE utilisateurs SET dateConnexion = CURDATE() WHERE id = :id");
		$req->execute(array("id" => $id));
		$req->closeCursor();
	}
	
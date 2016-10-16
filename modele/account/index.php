<?php
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	function recupereNomPrenom($id)
	{
		include("../../modele/connexion_sql.php");
		
		$req = $bdd->prepare("SELECT nom, prenom, langue FROM utilisateurs WHERE id= :id");
		$req->execute(array(	"id" => $id));
		
		$resultat = $req->fetch();
		$req->closeCursor();
		
		return $resultat;
	}
	
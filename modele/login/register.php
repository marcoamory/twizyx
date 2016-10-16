<?php
		
		function insertFormData($email, $motDePasse)
		{
			include("../../modele/connexion_sql.php"); //Connexion à la bdd
			$req = $bdd->prepare("INSERT INTO utilisateurs (dateCreation, dateConnexion, email, motDePasse) VALUES (CURDATE(), CURDATE(),:email, :motDePasse)");
			$req->execute(array(
							"email" => $email,
							"motDePasse" => $motDePasse));
						
		$req->closeCursor();
		}
		
		function getId($email)
		{
			
			include("../../modele/connexion_sql.php");
		
			$reponse = $bdd->prepare("SELECT id FROM utilisateurs WHERE email = :email"); //Récupération de l'ID du nouveau membre
			$reponse->execute(array("email" => $email));

			$resultat = $reponse->fetch();
			$reponse->closeCursor();
						
			return  $resultat['id'];
		}


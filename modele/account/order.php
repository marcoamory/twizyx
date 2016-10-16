<?php
	//FONCTION RECUPERATION ADRESSE FACTURATION
	
	function recupereAdresseFacturation($id, $type)
	{
		include("../../modele/connexion_sql.php");
		
		$req = $bdd->prepare("SELECT id FROM adresses WHERE id_utilisateur = :id_utilisateur AND type = :type");
		$req->execute(array(	"id_utilisateur" => $id,
								"type" => $type));
		$reponse = $req->fetch();
		$req->closeCursor();
		
		return $reponse['id'];
	}	
		
	// FONCTION INSERTION DES DONNEES DE LA COMMANDE	
	function insertDataForm($sessionId, $modeleVehicule, $modification, $societe, $adresseFacturation)
	{
		include("../../modele/connexion_sql.php");
		
		
		$req = $bdd->prepare("INSERT INTO commandes (idUtilisateurs, dateCreation, modeleVehicule, modification, societe, adresseFacturation) VALUES (:idUtilisateurs, CURDATE(), :modeleVehicule, :modification, :societe, :adresseFacturation)");
		$req->execute(array(
							"idUtilisateurs" => $sessionId,
							"modeleVehicule" => $modeleVehicule,
							"modification" => $modification,
							"societe" => $societe,
							"adresseFacturation" => $adresseFacturation));
		$req->closeCursor();
	}
	
	// INSERTION DES DONNEES DES ADRESSES
	
	function insertAdresseData($idUtilisateur, $type, $nom, $nomSociete, $tva, $rue, $numero, $boite, $ville, $codePostal, $pays)
	{
	
		include("../../modele/connexion_sql.php");
		
		$requete = $bdd->prepare("INSERT INTO adresses (id_utilisateur, type, nom, societe, tva, rue, numero, boite, ville, codePostal, pays) VALUES (:id_utilisateur, :type, :nom, :societe, :tva, :rue, :numero, :boite, :ville, :codePostal, :pays)");
		
		$requete->execute(array(	"id_utilisateur" => $idUtilisateur,
									"type" => $type,
									"nom" => $nom,
									"societe" => $nomSociete,
									"tva" => $tva,
									"rue" => $rue,
									"numero" => $numero,
									"boite" => $boite,
									"ville" => $ville,
									"codePostal" => $codePostal,
									"pays" => $pays));
		$requete->closeCursor();
	}
	
	
	// RECUPERATION DE L'ADRESSE DE LIVRAISON
	
	function recupereAdresseLivraison($sessionId, $type)
	{
		include("../../modele/connexion_sql.php");
		
		$req = $bdd->prepare("SELECT nom, societe, tva, rue,  numero, boite, ville, codePostal, pays FROM adresses WHERE id_utilisateur = :id_utilisateur AND type = :type");
		$req->execute(array(	"id_utilisateur" => $sessionId,
								"type" => $type));
		$resultat = $req->fetch();
		
		return $resultat;
		
	}
	
	// UPDATE DE L'ADRESSE DE LIVRAISON
	
	function updateAdresseData($id_utilisateur, $type)
	{
		include("../../modele/connexion_sql.php");
		
		$requete = $bdd->prepare("UPDATE adresses SET nom = :nom, societe = :societe, tva = :tva, rue = :rue, numero = :numero, boite = :boite, ville = :ville, codePostal = :codePostal, pays = :pays WHERE id_utilisateur = :id_utilisateur AND type = :type");
		
		$requete->execute(array(	"nom" => $_POST['nomDestinataire'],
									"societe" => $_POST['nomSociete'],
									"tva" => "/",
									"rue" => $_POST['rue'],
									"numero" => $_POST['numero'],
									"boite" => $_POST['boite'],
									"ville" => $_POST['ville'],
									"codePostal" => $_POST['codePostal'],
									"pays" => $_POST['pays'],
									"id_utilisateur" => $id_utilisateur,
									"type" => $type));
		$requete->closeCursor();

	}
	
	//INSERTION DES DONNEES DE CONTACT DANS UTILISATEURS
	
	function insertInfoContact($nom, $prenom)
	{
		include("../../modele/connexion_sql.php");
		
		$req = $bdd->prepare("INSERT INTO utilisateur (nom, prenom) VALUES (:nom, :prenom)");
		$req->execute(array(	"nom" => $nom,
								"prenom" => $prenom));
		$req->closeCursor();
	}
	
	// UPDATE DES DONNEES DE CONTACT DANS UTILISATEURS
	
	function updateInfoContact($id)
	{
		include("../../modele/connexion_sql.php");
		
		$req = $bdd->prepare("UPDATE utilisateurs SET email=:email, nom=:nom, prenom=:prenom, langue=:langue WHERE id=:id");
		$req->execute(array(	"email" => $_POST['email'],
								"nom" => $_POST['nom'],
								"prenom" => $_POST['prenom'],
								"langue" => $_POST['lang'],
								"id" => $id));
	}